<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        $ip = $request->getClientIp();
        $client_ip = json_decode(file_get_contents("http://ip-api.com/json/".$ip),true);
        if(isset($client_ip["status"]) && $client_ip["status"]=="success"){
            session()->put("timezone",$client_ip["timezone"]);
            session()->put('country', $client_ip["country"]);
            session()->put('countryCode', $client_ip["countryCode"]);
        }else{
            session()->put("timezone",config('app.timezone'));
            session()->put('country', config("app.country") );
            session()->put('countryCode', config('app.countryCode'));
        }
        return redirect()->intended(RouteServiceProvider::Dashboard);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

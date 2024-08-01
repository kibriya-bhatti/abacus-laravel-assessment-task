@extends('layouts.simple')
@section('content')
    <!-- Page Content -->
    @php

        $timezone = app()->request->ip();
    @endphp
    <div class="bg-image" style="background-image: url('assets/media/photos/photo28@2x.jpg');">
        <div class="row no-gutters bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100 text-center">
                        <a class="font-w600 font-size-h2 text-white text-decoration-none" href="{{ route('login') }}">
                            <img src="{{ asset('media/logo/logo.webp') }}" alt="app-log" class="w-50">
                        </a>
                        <p class="text-white-75  mt-2">
                            Welcome to the {{ config('app.name') }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- END Meta Info Section -->
            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-white">
                <div class="p-3 w-100 d-lg-none text-center">
                    <a class="link-fx font-w600 font-size-h3 text-dark" href="{{ route('login') }}">
                        <img src="{{ asset('media/logo/logo.svg') }}" alt="app-logo" class="w-50 ml-md-4">
                    </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <!-- Header -->
                        <div class="text-center mb-sm-5 mb-0">
                            <h1 class="font-w700 mb-2">
                                Sign In
                            </h1>
                            <h2 class="font-size-base text-muted">
                                Welcome, please login or <a href="{{ route('register') }}">sign up</a> for a new account.
                            </h2>
                        </div>
                        <!-- END Header -->
                        <div class="row no-gutters justify-content-center">
                            <div class="col-sm-8 col-xl-4">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                @if (session('error'))
                                    <div class="alert alert-danger text-center text-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <x-input id="email" class="form-control form-control-lg form-control-alt py-4"
                                            type="email" name="email" :value="old('email')" placeholder="Email" required
                                            autofocus />
                                    </div>
                                    <div class="form-group">
                                        <x-input id="password" class="form-control form-control-lg form-control-alt py-4"
                                            type="password" name="password" placeholder="Password" required
                                            autocomplete="current-password" />
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a class="text-muted font-size-sm font-w500 d-block d-lg-inline-block mb-1"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>

                                        <div>
                                            <x-button-alt-primary>
                                                <i class="fa fa-fw fa-sign-in-alt mr-1 opacity-50"></i> Sign In
                                            </x-button-alt-primary>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <div
                    class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-md-row justify-content-between font-size-sm text-center text-sm-left">
                    <p class="font-w500 text-black-50 py-2 mb-0 ">
                        <strong>{{ env('APP_NAME') }}</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                </div>
            </div>
            <!-- END Main Section -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection

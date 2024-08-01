@extends('layouts.simple')

@section('content')
    <!-- Page Content -->
    <div class="bg-primary-dark">
        <div class="row no-gutters bg-primary-dark-op">

           <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
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
                    <a class="link-fx font-w600 font-size-h3 text-dark" href="index.html">

                    </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <h1 class="font-w700 mb-2">
                                Create Account
                            </h1>
                            <h2 class="font-size-base text-muted">
                                Get your access today in one easy step
                            </h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <div class="row no-gutters justify-content-center">
                            <div class="col-sm-8 col-xl-4">
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('register') }}" id="user-register">
                                    @csrf
                                    <div class="form-group">
                                        <x-input id="name" class="form-control form-control-lg form-control-alt py-4"
                                            type="text" name="name" :value="old('name')" placeholder="Enter your name"
                                            autofocus />
                                    </div>
                                    <div class="form-group">
                                        <x-input id="email" class="form-control form-control-lg form-control-alt py-4"
                                            type="email" name="email" :value="old('email')" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <x-input id="password" class="form-control form-control-lg form-control-alt py-4"
                                            type="password" name="password" autocomplete="new-password"
                                            placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <x-input id="password_confirmation"
                                            class="form-control form-control-lg form-control-alt py-4" type="password"
                                            name="password_confirmation" placeholder="Confirm Password" />
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <a class="font-size-sm font-w500" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                        <div>
                                            <x-button-alt-primary>
                                                <i class="fa fa-fw fa-sign-in-alt mr-1 opacity-50"></i> Sign Up
                                            </x-button-alt-primary>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign Up Form -->
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

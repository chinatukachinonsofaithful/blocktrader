@extends('auth.layout')
@push('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-xl-4 my-5">
                {{-- <div class="flex items-center justify-center">
                    <div class="fixed top-0 left-0 px-4 py-5 md:relative">
                        <a href="{{ url('/')}}">
                            <img class="uk-margin-small-right in-offset-top-10" src="{{ image_url(get_settings('site_logo')) }}"
                                alt="{{ get_settings('website_name') }}" width="160">
                        </a>
                    </div>
                </div> --}}
                <h1 class="display-4 text-center mb-3">
                    Sign in
                </h1>
                <p class="text-muted text-center mb-5">
                    Sign in to our dashboard.
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf <!-- CSRF token for Laravel -->

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email_address" class="form-label">Email Address</label>
                        <input name="email" type="email" id="email_address" class="form-control"
                            placeholder="name@address.com" autocomplete="username" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('password.request') }}" class="form-text small text-muted">
                                    Forgot password?
                                </a>
                            </div>
                        </div>
                        <div class="input-group input-group-merge">
                            <input name="password" type="password" id="password" class="form-control"
                                placeholder="Enter your password" autocomplete="current-password" required />
                            <span class="input-group-text">
                                <i class="fe fe-eye" id="eye"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="form-group">
                        <div class="form-check">
                            <input name="remember" type="checkbox" id="remember_me" class="form-check-input" />
                            <label for="remember_me" class="form-check-label">Remember me</label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                    </div>

                    <!-- Sign Up Link -->
                    <div class="text-center mt-3">
                        <small class="text-muted">
                            Don't have an account yet? <a href="{{ route('register') }}">Sign up</a>.
                        </small>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endpush

@extends('auth.layout')

@push('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-xl-4 my-5">
                {{-- <div class="flex items-center justify-center">
                    <a href="/">
                        <div class="fixed top-0 left-0 px-4 py-5 md:relative">
                            <a href="{{ url('/')}}">
                                <img class="uk-margin-small-right in-offset-top-10" src="{{ image_url(get_settings('site_logo')) }}"
                                    alt="{{ get_settings('website_name') }}" width="160">
                            </a>
                        </div>
                    </a>
                </div> --}}

                <h1 class="display-4 text-center mb-3">
                    Password reset
                </h1>

                <p class="text-muted text-center mb-5">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password
                    reset link that will allow you to choose a new one.
                </p>

                <!-- Form for requesting password reset link -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email_address" class="form-label">
                            Email address
                        </label>
                        <input name="email" type="email" id="email_address" class="form-control"
                            placeholder="name@address.com" required="required" autofocus="autofocus" />
                    </div>

                    <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
                        Email Password Reset Link
                    </button>

                    <!-- Text link to login -->
                    <div class="text-center">
                        <small class="text-muted text-center">
                            Remember your password? <a href="{{ route('login') }}">Log in</a>.
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

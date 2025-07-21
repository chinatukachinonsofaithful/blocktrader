@extends('auth.layout')

@push('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-xl-4 my-5">
                {{-- <div class="flex items-center justify-center">
                    <a href="{{ url('/')}}">
                        <div class="fixed top-0 left-0 px-4 py-5 md:relative">
                            <a href="{{ url('/')}}">
                                <img class="uk-margin-small-right in-offset-top-10" src="{{ image_url(get_settings('site_logo')) }}"
                                    alt="{{ get_settings('website_name') }}" width="160">
                            </a>
                        </div>
                    </a>
                </div> --}}


                <h1 class="display-4 text-center mb-3">
                    Email verification
                </h1>


                <p class="text-muted text-center mb-5">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the
                    link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </p>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif


                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>


                <form method="POST" action="{{ route('logout') }}" class="justify-center flex items-center">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 mt-3">
                        {{ __('Log Out') }}
                    </button>
                </form>

            </div>
        </div>
    </div>

@endpush

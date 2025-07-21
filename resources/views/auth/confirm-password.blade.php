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
                    Reset Password
                </h1>

                <p class="text-muted text-center mb-5">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>




                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf


                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="password" class="form-label">
                            Password
                        </label>
                        <div class="input-group input-group-merge">
                            <input name="password" type="password" id="password" class="form-control"
                                placeholder="Enter your password" autocomplete="new-password" required="required" />
                            <span class="input-group-text">
                                <i class="fe fe-eye"></i>
                            </span>
                        </div>
                    </div>



                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
                        Confirm
                    </button>
                </form>


            </div>
        </div>
    </div>
    <script>
        const inputPasswords = document.querySelectorAll('input[type="password"]');
        const eyeIcons = document.querySelectorAll('.fe-eye');

        eyeIcons.forEach((eyeIcon, index) => {
            eyeIcon.addEventListener('click', function() {
                const input = inputPasswords[index];
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';

                input.setAttribute('type', type);

                this.classList.toggle('fe-eye');
                this.classList.toggle('fe-eye-off');
            });
        });
    </script>
@endpush

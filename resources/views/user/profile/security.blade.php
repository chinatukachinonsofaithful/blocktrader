@extends('layout.user')
@push('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="header mt-md-5">
                    <div class="header-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="header-pretitle">
                                    Overview
                                </h6>
                                <h1 class="header-title">
                                    Security Settings
                                </h1>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Nav -->
                                <ul class="nav nav-tabs nav-overflow header-tabs">
                                    <li class="nav-item">
                                        <a href="{{ url('user/profile') }}" class="nav-link">
                                            General
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('user/accounts') }}" class="nav-link">
                                            Accounts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('user/security') }}" class="nav-link active">
                                            Security
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('user/kyc') }}" class="nav-link">
                                            Verification
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-5">
                    <div class="col-12 col-md-9 col-xl-7">
                        <h2 class="mb-2">
                            Change your password
                        </h2>
                        <p class="text-muted mb-xl-0">
                            Ensure your account is using a long, random password to stay secure.
                        </p>
                    {{-- </div>
                    <div class="col-12 col-xl-auto">
                        <form method="POST" action="/forgot--password">
                            <input type="hidden" name="_token" value="g3MwUDr1CCxK1Z6wGnn6beGd4fxZKklch2DZaYfw"
                                autocomplete="off"> <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-white">
                                Forgot your password?
                            </button>
                        </form>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 order-md-2">
                        <div class="card bg-light border ms-md-4">
                            <div class="card-body">
                                <p class="mb-2">
                                    Password requirements
                                </p>
                                <p class="small text-muted mb-2">
                                    To create a new password, you have to meet all of the following requirements:
                                </p>
                                <ul class="small text-muted ps-4 mb-0">
                                    <li>
                                        Minimum 8 character
                                    </li>
                                    <li>
                                        At least one special character
                                    </li>
                                    <li>
                                        At least one number
                                    </li>
                                    <li>
                                        Can’t be the same as a previous password
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <form method="POST" action="{{ route('security.password') }}">
                            @csrf  <!-- CSRF Protection -->
                        
                            <div class="form-group">
                                <label for="old_password" class="form-label">
                                    Current Password
                                </label>
                                <input name="old_password" type="password" id="old_password" class="form-control"
                                       placeholder="Enter your current password" autocomplete="current-password" required />
                            </div>
                        
                            <div class="form-group">
                                <label for="password" class="form-label">
                                    New Password
                                </label>
                                <input name="password" type="password" id="password" class="form-control"
                                       placeholder="Enter your new password" autocomplete="new-password" required />
                            </div>
                        
                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">
                                    Confirm New Password
                                </label>
                                <input name="password_confirmation" type="password" id="password_confirmation"
                                       class="form-control" placeholder="Confirm your new password" autocomplete="new-password" required />
                            </div>
                        
                            <button class="btn w-100 btn-primary lift" type="submit">
                                Update Password
                            </button>
                        </form>
                        
                    </div>
                </div>
                <hr class="my-5">


                <br>
            </div>
        </div>
    </div>
    </div>
@endpush

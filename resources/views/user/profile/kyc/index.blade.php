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
                                    Kyc Verification
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
                                        <a href="{{ url('user/security') }}" class="nav-link">
                                            Security
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('user/kyc') }}" class="nav-link active">
                                            Verification
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>



                @if ($user->kyc_status == 0)
                    <a href="{{ url('user/kyc/create') }}" class="btn btn-primary">
                        Verify your identity
                    </a>
                @elseif($user->kyc_status == 1)
                    <p><strong>Identification status:</strong></p>
                    <p class="text-warning">Submitted, pending verification</p>
                @elseif($user->kyc_status == 2)
                    <p><strong>Identification status:</strong></p>
                    <p class="text-success">APPROVED</p>
                @else
                    <p><strong>Identification status:</strong></p>
                    <p class="text-danger">Submitted, Rejected</p>
                    <a href="{{ url('user/kyc/create') }}" class="btn btn-primary mt-2">
                        Verify identity again
                    </a>
                @endif





                <br><br>
            </div>
        </div>
    </div>
    </div>
@endpush

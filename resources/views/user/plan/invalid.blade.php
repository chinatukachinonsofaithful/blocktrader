@extends('layout.user')
@push('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">

      

        <!-- HEADER -->
        <div class="header">
        </div> <!-- / .header -->

        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- Card -->
                    <div class="card card-inactive">
                        <div class="card-body text-center">

                            <!-- Image -->
                            <i class="fa fa-wallet text-warning mt-5 mb-4" style="font-size: 500%"></i>

                            <!-- Title -->
                            <h1>
                                Insufficient balance!
                            </h1>

                            <!-- Subtitle -->
                            <p class="text-muted">
                                Sorry, you do not have sufficient balance in your account for this investment.
                                Please make a deposit and try again once you have sufficient balance.
                            </p>
                            <div class="mb-4 mt-3">
                                <small class="text-muted">
                                    Deposit instantly using our available payment method.
                                </small>
                            </div>

                            <!-- Button -->
                            <a href="{{ url('user/deposit/create')}}" class="btn btn-primary">
                                Deposit Now
                            </a>
                            <div class="mt-3 mb-6">
                                <!-- Button -->
                                <a href="{{ url('user/plans')}}">
                                    Check our available plans
                                </a>

                            </div>
                            <p class="text-muted">
                                Please feel free to contact us if you have any questions or concerns.
                            </p>

                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->
@endpush

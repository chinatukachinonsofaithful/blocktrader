@extends('layout.user')
@push('content')
    <!-- HEADER -->
    <div class="header">
    </div> <!-- / .header -->

    <div class="main-content">


        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">



                    <!-- HEADER -->
                    <div class="header">
                    </div> <!-- / .header -->

                    @if ($user->account == 0)
                    <!-- CONTENT -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">

                                <!-- Card -->
                                <div class="card card-inactive">
                                    <div class="card-body text-center">

                                        <!-- Image -->
                                        <i class="fa fa-wallet text-primary mt-5 mb-4" style="font-size: 500%"></i>

                                        <!-- Title -->
                                        <h1>
                                            You're almost ready to withdraw!
                                        </h1>

                                        <!-- Subtitle -->
                                        <p class="text-muted">
                                            Please create a withdrawal account before making a withdrawal.
                                        </p>

                                        <!-- Button -->
                                        <a href="{{url('user/accounts')}}"
                                            class="btn btn-primary">
                                            Add Withdrawal Account
                                        </a>
                                        <div class="mt-3">
                                            <!-- Button -->
                                            <a href="{{url('user/dashboard')}}">
                                                Go to dashboard
                                            </a>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    @else



                    <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne"
                        data-helpers--step-form-target="step">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                <h6 class="mb-4 text-uppercase text-muted">
                                    Step 1 of 2
                                </h6>
                                <h1 class="mb-3">
                                    Withdraw Funds
                                </h1>
                                <p class="mb-5 text-muted">
                                    Withdraw your funds directly to your account.
                                </p>
                            </div>
                        </div>


                        <form method="POST" class="tab-content" action="{{ route('withdraw.store') }}">
                            @csrf

                            <!-- Amount Field -->
                            <div class="form-group">
                                <label for="amount" class="form-label">Amount</label>
                                <div class="input-group input-group-merge input-group-reverse input-group-revers mb-3">
                                    <input name="amount" type="number" id="amount" class="form-control"
                                        aria-label="Amount Reverse" aria-describedby="amountReverse" placeholder="0.00"
                                        required min="400" data-action="input->deposit--create#validateField"
                                        data-deposit--create-target="amount" />
                                    <div class="input-group-text" id="amountReverse">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                </div>
                                <small class="form-text text-muted">Minimum 400.00 USD</small>
                                <small class="form-text text-muted is-amount-invalid my-n2"
                                    style="color: #c99595!important"></small>
                            </div>

                            <!-- Payment Account (Read-Only) -->
                            <div class="form-group">
                                <label for="payment_option" class="form-label">Payment Account</label>
                                <input type="text" readonly class="form-control" name="description"
                                    value="My {{ $user->crypto_type ?? 'No Payment Account' }} ({{ $user->account_address ?? 'No Payment Account' }})"
                                    placeholder="My {{ $user->crypto_type ?? 'No Payment Account' }} ({{ $user->account_address ?? 'No Payment Account' }})" />

                            </div>

                            <!-- Remarks (Optional) -->
                            <div class="form-group">
                                <label for="remarks" class="form-label">Remarks (Optional)</label>
                                <input name="remarks" type="text" class="form-control" placeholder="Remarks" />
                            </div>

                             <!-- Payment Account -->
                        <label for="Payment Account" class="form-label h4">Payment Account</label>
                        <div class="card">
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="d-flex align-content-center">
                                                    <i class="fa fa-wallet pt-2" style="font-size: 30px;"></i>
                                                    <div class="ms-3">
                                                        <h4 class="mb-1">Main Account</h4>
                                                        <small class="text-muted">Current Balance:
                                                            {{ number_format($user->balance, 2) }} USD</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <!-- Submit and Cancel Buttons -->
                            <hr class="my-5">
                            <div class="nav row align-items-center">
                                <div class="col-auto">
                                    <a href="{{ url('user/dashboard') }}" class="btn btn-lg btn-white lift"
                                        type="reset">Cancel</a>
                                </div>
                                <div class="col text-center">
                                    <h6 class="text-uppercase text-muted mb-0"></h6>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-primary" type="submit">Withdraw</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    @endif




                </div>
            </div>
        </div>
    </div>
@endpush

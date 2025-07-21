@extends('layout.user')
@push('content')

    <!-- HEADER -->
    <div class="header">
    </div> <!-- / .header -->

    <div class="main-content">


        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne"
                        data-helpers--step-form-target="step">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                <h6 class="mb-4 text-uppercase text-muted">
                                    Step 1 of 2
                                </h6>
                                <h1 class="mb-3">
                                    Deposit Funds
                                </h1>
                                <p class="mb-5 text-muted">
                                    Secure and safely deposit money into your account.
                                </p>
                            </div>
                        </div>


                        <form method="POST" action="{{ route('deposit.store') }}" class="tab-content">
                            @csrf
                            <div class="form-group">
                                <label for="amount" class="form-label">Amount</label>
                                <div class="input-group input-group-merge input-group-reverse input-group-revers mb-3">
                                    <input name="amount" type="number" id="amount" class="form-control" required
                                        aria-label="Amount Reverse" aria-describedby="amountReverse" placeholder="0.00"
                                        min="50" />
                                    <div class="input-group-text" id="amountReverse">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                </div>
                                <small class="form-text text-muted">Minimum 50.00 USD</small>
                            </div>

                            <div class="form-group">
                                <label for="payment_option" class="form-label">Payment option</label>
                                <select name="payment_option" id="payment_option" class="form-select mb-3" required>
                                    <option value="" selected disabled>Select Payment Option</option>
                                    @foreach ($paymentOptions as $option)
                                        <option value="{{ $option->id }}">{{ $option->name }} Payment</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="Payment Account" class="form-label h4">My Account</label>
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

                            <hr class="my-5">

                            <div class="nav row align-items-center">
                                <div class="col-auto">
                                    <a href="{{ url('user/dashboard') }}" class="btn btn-lg btn-white lift"
                                        type="reset">Cancel</a>
                                </div>
                                <div class="col text-center">
                                    <h6 class="text-uppercase text-muted mb-0">Step 1 of 2</h6>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-primary" type="submit">Continue</button>
                                </div>
                            </div>
                        </form>

                    </div>



                </div>
            </div>
        </div>
    </div>
@endpush

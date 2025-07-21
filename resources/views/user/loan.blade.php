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
                                   Loan Request
                                </h1>
                                <p class="mb-5 text-muted">
                                    Secure and safely get money from our loan service.
                                </p>
                            </div>
                        </div>


                        <form method="POST" action="{{ route('loan.store') }}" class="tab-content">
                            @csrf


                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                
                                    <input type="text" class="form-control" required
                                         placeholder="{{$user->name}}" value="{{$user->name}}" />
                            </div>  

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
                                <label for="ssn" class="form-label">SSN Number</label>
                                    <input name="ssn" type="text" id="ssn" class="form-control" required
                                         placeholder="SSN Number" />
                            </div>  

                            <div class="form-group">
                                <label for="wallet_address" class="form-label">Wallet Address</label>
                                    <input name="wallet_address" type="text" id="wallet_address" class="form-control" required
                                        placeholder="Wallet Address"
                                        />
                              
                            </div>

                            <div class="form-group">
                                <label for="document" class="form-label">Valid Documents</label>
                                    <input name="document" type="file" id="document" class="form-control" required />
                    
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
                                    <button class="btn btn-lg btn-primary" type="submit">Send Request</button>
                                </div>
                            </div>
                        </form>

                        <br> <br> <br> <br>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endpush

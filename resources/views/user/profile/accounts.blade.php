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
                                    Payment Accounts
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
                                        <a href="{{ url('user/accounts') }}" class="nav-link active">
                                            Accounts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('user/security') }}" class="nav-link">
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
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-header-title">
                                    Your accounts
                                </h4>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown">
                                    @if ($user->account == 0)
                                    <a class="btn btn-sm btn-primary dropdown- dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Add account
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        {{-- <span role="button" data-bs-toggle="modal" data-bs-target="#modalWithdrawFiatList"
                                            data-bs-whatever="Wire Transfer">
                                            <a class="dropdown-item d-flex">
                                                <i class="fa fa-bank" style="margin-top: 3px"></i>
                                                <span class="ps-2 text-dark">Wire Transfer</span>
                                            </a>
                                        </span> --}}
                                        <span role="button" data-bs-toggle="modal"
                                            data-bs-target="#modalWithdrawCryptoList" data-bs-whatever="Crypto Wallet">
                                            <a class="dropdown-item d-flex">
                                                <i class="fas fa-coins" style="margin-top: 3px;"></i>
                                                <span class="ps-2 text-dark">Crypto Wallet</span>
                                            </a>
                                        </span>
                                    </div>
                                    @endif


                                    <div class="modal fade" id="modalWithdrawCryptoList" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-card card">
                                                    <div class="modal-header">
                                                        <div>
                                                            <h3 class="card-header-title" id="exampleModalCenterTitle">
                                                                Add Cryptocurrency Account
                                                            </h3>
                                                            <small class="form-text text-muted mt-3 card-header-text">
                                                                Add your cryptocurrency information to withdraw your
                                                                funds.
                                                            </small>
                                                        </div>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" style="margin: unset;"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('add.account') }}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="Wallet Name" id="name" class="form-label">
                                                                            Wallet Name
                                                                        </label>
                                                                        <span class="text-danger">*</span>
                                                        
                                                                        <select name="crypto_type" id="crypto_type" class="form-select mb-3" required>
                                                                            <option value="" selected disabled>Select Wallet Name</option>
                                                                            @foreach ($paymentOptions as $option)
                                                                                <option value="{{ $option->id }}">
                                                                                    {{ $option->name }} Payment
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="Wallet Address" id="address" class="form-label">
                                                                            Wallet Address
                                                                        </label>
                                                                        <span class="text-danger">*</span>
                                                                        <input name="account_address" type="text" id="account_address" class="form-control"
                                                                            placeholder="Enter your address" required="required" />
                                                                    </div>
                                                                </div>
                                                                <small class="form-text text-muted">
                                                                    Please verify that this information is correct before saving.
                                                                </small>
                                                            </div>
                                                            <small class="form-text text-muted text-danger mt-3 card-header-text">
                                                                Note: Fields marked with <span class="text-danger">*</span> are required.
                                                            </small>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">Add Account</button>
                                                            </div>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if ($user->account == 0)
                        <div class="card-body">
                            <small class="form-text text-muted text-danger mt-5 card-header-text">
                                <i class="fa fa-info-circle text-warning"></i>
                                There are no withdrawal accounts associated with your account.
                            </small>
                            <small class="form-text text-muted text-danger mt-2 card-header-text">
                                <i class="fa fa-info-circle text-warning"></i>
                                You can add personal or business accounts from which you would like to withdraw
                                funds.
                            </small>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                           <img class="img-fluid" src="{{ image_url($paymentOption->icon ?? 'icon/btc.svg') }}" width="20" alt="eth">

                                        </div>
                                        <div class="col ms-n2">
                                            <h4 class="mb-1">
                                                {{ $paymentOption->name ?? '' }}
                                            </h4>
                                            <small class="text-muted">
                                                {{$user->account_address ?? ''}}
                                            </small>
                                        </div>
                                        <div class="col ms-n2 me-n6">
                                            <h4 class="mb-1">
                                            </h4>
                                            <small class="text-muted">
                                            </small>
                                        </div>
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="dropdown-ellipses dropdown-toggle" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                   
                                                    <form method="POST" action="{{ route('account.delete') }}" onsubmit="return confirm('Are you sure you want to delete your account details?');">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    @endif







                </div>
            </div>
        </div>
        <script>
            const withdrawCryptoModal = document.getElementById('modalWithdrawCryptoList');
            withdrawCryptoModal.addEventListener('show.bs.modal', function(event) {
                showModal(event, withdrawCryptoModal, 'Add ');
                // const address = withdrawCryptoModal.querySelector('#address');
                // address.textContent = 'bitcoin ';
            })
            const withdrawFiatModal = document.getElementById('modalWithdrawFiatList');
            withdrawFiatModal.addEventListener('show.bs.modal', function(event) {
                showModal(event, withdrawFiatModal, 'Add ');
            })
            for (let i = 1; i < 0 + 1; i++) {
                // console.log('modalBilling' + i)
                let billingCryptoModal = document.getElementById('modalCryptoBilling' + i)
                billingCryptoModal.addEventListener('show.bs.modal', function(event) {
                    showModal(event, billingCryptoModal, 'Edit ');
                })
                let billingFiatModal = document.getElementById('modalFiatBilling' + i)
                billingFiatModal.addEventListener('show.bs.modal', function(event) {
                    showModal(event, billingFiatModal, 'Edit ');
                })
            }

            function showModal(event, modalID, action) {
                // Button that triggered the modal
                const button = event.relatedTarget;
                // Extract info from data-bs-* attributes
                const buttonWhatever = button.getAttribute('data-bs-whatever');
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                const modalTitle = modalID.querySelector('.card-header-title');
                const modalText = modalID.querySelector('.card-header-text');
                modalTitle.textContent = action + buttonWhatever
                modalText.textContent = action + ' your ' + buttonWhatever + ' information.'
            }
        </script>
    @endpush

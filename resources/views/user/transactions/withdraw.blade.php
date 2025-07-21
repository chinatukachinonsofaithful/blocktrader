@extends('layout.user')
@push('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">



        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">

                    <!-- Header -->
                    <div class="header">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Overview
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Withdrawal Transactions
                                    </h1>

                                </div>
                                {{-- <div class="col-auto">

                                    <!-- Button -->
                                    <a href="/deposit/create"
                                        class="btn btn-primary btn-sm lift">
                                        Deposit
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                </div> --}}
                            </div> <!-- / .row -->
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Nav -->
                                    <ul class="nav nav-tabs nav-overflow header-tabs">
                                        <li class="nav-item">
                                            <a href="{{ url('user/transactions') }}" class="nav-link">
                                                Deposit
                                                <span class="badge rounded-pill bg-secondary-soft">
                                                    {{ $DepositCount }}
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('user/transactions/withdraw') }}" class="nav-link active">
                                                Withdrawal
                                                <span class="badge rounded-pill bg-secondary-soft">
                                                    {{ $WithdrawCount }}
                                                </span>
                                            </a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="{{ url('user/transactions/investments') }}" class="nav-link">
                                                Investment
                                                <span class="badge rounded-pill bg-secondary-soft">
                                                    {{ $InvestmentCount }}
                                                </span>
                                            </a>
                                        </li> --}}

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="table-responsive">
                        @if ($transactions->isEmpty())
                            <!-- Card -->
                            <div class="card card-inactive">
                                <div class="card-body text-center">

                                    <!-- Image -->
                                    <img src="{{ image_url('scale.svg') }}" alt="empty page" class="img-fluid"
                                        style="max-width: 30%; display: unset;">


                                    <!-- Title -->
                                    <h1>
                                        No transactions yet.
                                    </h1>

                                    <!-- Subtitle -->
                                    <p class="text-muted">
                                        Create a new transactions to see your transactions here.
                                    </p>



                                </div>
                            </div>
                        @else
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-order">
                                                S/N
                                            </a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-order">
                                                Transaction ID
                                            </a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-product">
                                                Type
                                            </a>
                                        </th>
                                        
                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-total">
                                                Amount
                                            </a>
                                        </th>

                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-total">
                                                Payment
                                            </a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-product">
                                                Wallet Address
                                            </a>
                                        </th>
                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-status">
                                                Status
                                            </a>
                                        </th>

                                        <th colspan="2">
                                            <a href="#" class="text-muted list-sort" data-sort="orders-date">
                                                Date
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">

                                    @php
                                        $counter = 1;
                                    @endphp
                                    @foreach ($transactions as $value)
                                        <tr>
                                            <td class="orders-product">
                                                {{ $counter++ }}
                                            </td>
                                            <td class="orders-order" data-bs-toggle="tooltip"
                                                data-bs-original-title="{{ $value->reference_id }}">
                                                #{{ $value->reference_id }}
                                            </td>
                                            <td class="orders-product">
                                                Withdrawal
                                            </td>
                                            <td class="orders-total">
                                                {{ number_format($value->amount, 2) }}
                                                USD
                                            </td>

                                            <td class="orders-product">
                                                {{ $user->crypto_type }}

                                            </td>

                                            <td class="orders-product">
                                                {{ $user->account_address }}

                                            </td>

                                            <td class="orders-status">
                                                @if ($value->status == 'approved')
                                                    <div class="badge bg-primary">
                                                        APPROVED
                                                    </div>
                                                @elseif($value->status == 'pending')
                                                    <div class="badge bg-success">
                                                        PENDING
                                                    </div>
                                                @else
                                                    <div class="badge bg-danger">
                                                        DECLINED
                                                    </div>
                                                @endif


                                            <td class="orders-date">
                                                <span title="2 hours ago">
                                                    {{ $value->created_at }}
                                                </span>

                                            </td>
                                            <td class="text-end">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>






                </div>
            </div> <!-- / .row -->

            <!-- Divider -->
            <hr class="my-5">

            <br>
        </div>

    </div> <!-- / .main-content -->
@endpush

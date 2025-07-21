@extends('layout.user')
@push('content')
    <div class="main-content">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="header">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="header-pretitle">
                                        Referrals
                                    </h6>
                                    <h1 class="header-title">
                                        Referral Activity
                                    </h1>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <ul class="nav nav-tabs nav-overflow header-tabs">
                                        <li class="nav-item">
                                            <a href="#!" class="nav-link">
                                                You can see who you've referred and the statistics of your referrals.
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card"
                        data-list='{"valueNames": ["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]}'>
                        <div class="card-header">
                            <form>
                                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                                    <input class="form-control list-search" type="search" placeholder="Search">
                                    <span class="input-group-text">
                                        <i class="fe fe-search"></i>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <a href="#" class="text-muted list-sort" data-sort="orders-order">
                                                Details
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
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div> --}}
                    <div class="card card-active">
                        <div class="card-header h2 h-75" style="display: block">
                            <h3 class="text-body">
                                Refer Us & Earn
                            </h3>
                            <h4 class="text-muted">Use the below link to invite your friends.</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3" data-controller="helpers--clipboard"
                                data-helpers--clipboard-default-value="Copy" data-helpers--clipboard-success-value="Copied"
                                data-helpers--clipboard-copy-class="fa-copy"
                                data-helpers--clipboard-error-class="fa-clipboard-question text-danger"
                                data-helpers--clipboard-success-class="fa-clipboard-check text-success">
                                <!-- Link Icon -->
                                <div class="input-group-text" id="inputGroup">
                                    <i class="fa fa-link"></i>
                                </div>
                                <!-- Referral Link Input -->
                                <input name="code" type="text" id="copyAddress"
                                    value="{{url('/')}}/register?ref={{ $refid }}" class="form-control"
                                    aria-label="Referral link" aria-describedby="inputGroupReverse" readonly="readonly"
                                    data-helpers--clipboard-target="source" />
                                <!-- Copy Button -->
                                <div class="input-group-text" id="inputGroupReverse" data-bs-toggle="tooltip"
                                    data-bs-original-title="Copy" data-action="click->helpers--clipboard#copy"
                                    data-helpers--clipboard-target="popover">
                                    <span class="fa fa-copy me-1" data-helpers--clipboard-target="button"></span>
                                </div>
                            </div>

                        </div>
                        <div class="p-3 text-center">

                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-5">
            <br>
        </div>
    </div>
@endpush

@extends('layout.user')
@push('content')
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <form action="{{ route('plan.store') }}" class="tab-content" method="POST">
                    @csrf <!-- CSRF token for security -->

                    <!-- Step 2: Confirmation -->
                    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="wizardStepTwo"
                        data-helpers--step-form-target="step">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                <h6 class="mb-4 text-uppercase text-muted">Step 2 of 2</h6>
                                <h1 class="mb-3">Confirm Your Investment</h1>
                                <p class="mb-2 text-muted">Please review your investment plan details and confirm.</p>
                            </div>
                        </div>



                        <div class="tab-pane" role="tabpanel" aria-labelledby="wizardStepTwo"
                            data-helpers--step-form-target="step">
                           
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-sm card-table">
                                        <tbody class="list">
                                            <tr>
                                                <td class="orders-order">
                                                    <div class="mb-3">
                                                        Plan Name
                                                    </div>
                                                    <small class="text-muted"
                                                        data-subscription--create-model="state.name">{{ $plan->name }}
                                                        Plan</small>

                                                </td>
                                                <td class="text-center orders-product">
                                                    <div class="mb-3">
                                                        Duration
                                                    </div>
                                                    <small class="text-muted">
                                                        <span
                                                            data-subscription--create-model="state.periodicity">{{ $plan->duration }}</span>
                                                        <span
                                                            data-subscription--create-model="state.periodicity_type"></span>
                                                        Day (s)
                                                    </small>
                                                </td>
                                                <td class="text-end orders-product">
                                                    <div class="mb-3">
                                                        Per
                                                        <span
                                                            data-subscription--create-model="state.periodicity_type"></span>
                                                        profit
                                                    </div>
                                                    <small data-subscription--create-model="state.meta_data.percentage_rate"
                                                        class="text-muted">{{ $plan->roi }}%</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-sm card-table">
                                        <tbody class="list">
                                            <tr>
                                                <td class="orders-order">
                                                    <div>
                                                        Payment Account
                                                    </div>
                                                </td>
                                                <td class="text-end orders-product">
                                                    <i class="fa-solid fa-wallet text-dark"></i>
                                                    Main Balance
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted orders-order">
                                                    <div class="mb-3">
                                                        Amount to Invest
                                                    </div>
                                                    <small class="text-muted">
                                                        Approx. Profit
                                                    </small>
                                                </td>
                                                <td class="text-end orders-product">
                                                    <div class="mb-3">
                                                        <span
                                                            data-subscription--create-model="amountToInvest">{{ number_format($amount, 2) }}</span>
                                                        <span
                                                            data-subscription--create-model="state.meta_data.price.currency">USD</span>
                                                    </div>
                                                    <small class="text-muted">
                                                        <span
                                                            data-subscription--create-model="amountApproximatedProfit">{{ number_format($ProxAmount, 2) }}
                                                        </span>
                                                        <span
                                                            data-subscription--create-model="state.meta_data.price.currency">USD</span>
                                                    </small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="orders-order">
                                                    Total Return (inc. cap)
                                                </td>
                                                <td class="text-end orders-product">
                                                    <span
                                                        data-subscription--create-model="amountTotalReturn">{{ number_format($totalReturn, 2) }}
                                                        USD</span>
                                                    <span
                                                        data-subscription--create-model="state.meta_data.price.currency"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">

                                    <div class="list-group list-group-flush my-n3">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="d-flex align-items-center justify-content-between">

                                                    <h4 class="mb-0">
                                                        Amount to debit
                                                    </h4>

                                                    <h3 class="mb-0">
                                                        <span data-subscription--create-model="amountToDebit">{{ number_format($amount, 2) }}</span>
                                                        <span
                                                            data-subscription--create-model="state.meta_data.price.currency">USD</span>
                                                    </h3>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- Hidden Fields to pass the amount and plan_id -->
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        <input type="hidden" name="total_return" value="{{ $totalReturn }}">

                        <!-- Navigation -->
                        <hr class="my-5">
                        <div class="nav row align-items-center">
                            <div class="col-auto">
                                <a class="btn btn-lg btn-white" href="{{ route('plan.show', $plan->id) }}">Back</a>
                            </div>
                            <div class="col text-center">
                                <h6 class="text-uppercase text-muted mb-0">Step 2 of 2</h6>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-lg btn-primary" type="submit">Confirm & Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    </div>
@endpush

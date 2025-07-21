@extends('layout.user')
@push('content')
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <form action="{{ route('plan.confirm', $plan->id) }}" method="GET" class="tab-content">
                    @csrf <!-- CSRF token for security -->
 
                    <!-- Step 1 -->
                    <div data-helpers--step-form-target="step" class="tab-pane fade show active" id="wizardStepOne"
                        role="tabpanel" aria-labelledby="wizardTabOne">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                <h6 class="mb-4 text-uppercase text-muted">Step 1 of 2</h6>
                                <h1 class="mb-3">Invest on {{ $plan->name }} Plan</h1>
                                <p class="mb-3 text-muted">Investment for {{ $plan->terms }} term & earn money.</p>
                            </div>
                        </div>

                        <label for="Invested Plan" class="form-label h4">Invested Plan</label>
                        <div class="card">
                            <div class="list-group list-group-flush list-group-horizontal my-n3 px-4 py-3">
                                <div class="list-group-item" data-subscription--create-target="list">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="d-flex align-content-center">
                                                <img src="{{ assetFromPublic('/icon/percentage.svg')}}" width="35" alt="percentage">
                                                <div class="ms-2">
                                                    <h4 class="mb-1 flex">
                                                        {{ $plan->name }} Plan
                                                    </h4>
                                                    <small class="text-muted">
                                                        Invest for {{ $plan->duration }} Days & earn {{ $plan->roi }}% as
                                                        profit.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Investment Amount -->
                        <div class="form-group">
                            <label for="amount" class="form-label h4">Enter Your Amount</label>
                            <div class="input-group input-group-merge mb-3">
                                <input id="amount" name="amount" type="number" class="form-control form-control-lg"
                                    aria-label="Amount" placeholder="0.00" min="{{ $plan->min }}"
                                    max="{{ $plan->max }}" required />
                                <div class="input-group-text">
                                    <i class="fa fa-usd"></i>
                                </div>
                            </div>
                            <small class="form-text text-muted">
                                Minimum: {{ number_format($plan->min, 2) }} USD, Maximum: {{ number_format($plan->max, 2) }}
                                USD
                            </small>
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

                        <!-- Navigation -->
                        <hr class="my-5">
                        <div class="nav row align-items-center">
                            <div class="col-auto">
                                <a href="{{ url('user/plans') }}" class="btn btn-lg btn-white lift"
                                    type="reset">Cancel</a>
                            </div>
                            <div class="col text-center">
                                <h6 class="text-uppercase text-muted mb-0">Step 1 of 2</h6>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-lg btn-primary wizardStepOne" 
                                type="submit">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
    </div>
@endpush

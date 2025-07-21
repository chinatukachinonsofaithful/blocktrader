@extends('layout.user')
@push('content')
    <div class="main-content">



        <div class="pt-7 pb-8 bg-dark bg-ellipses">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6">

                        <h1 class="display-3 text-center text-white">
                            Plans & Pricing
                        </h1>

                        <p class="lead text-center text-muted">
                            We have several investment plans listed below.
                            Investments can be made daily, weekly, or monthly, and you will get higher returns.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="mt-n7">
                <div class="card">
                    <h2 class=" text-center m-3">
                        Short Term Plans
                    </h2>
                </div>
                <div class="row">

                    @foreach ($planshort as $plan)
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="text-uppercase text-center text-muted my-4">
                                    {{ $plan->name }} PLAN
                                </h6>

                                <div class="row g-0 align-items-center justify-content-center">
                                    <div class="col-auto">
                                        <div class="h2 mb-0">
                                            $
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="display-3 mb-0">
                                            {{amount($plan->amount )}}
                                        </div>
                                    </div>
                                </div>

                                <div class="h6 text-uppercase text-center text-muted mb-4 mt-2">
                                    for {{ $plan->duration }} days
                                </div>

                                <div class="mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Minimum</small>
                                            ${{amount($plan->min )}}
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Maximum</small>
                                            ${{amount($plan->max )}}
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Interest Rate / ROI</small>
                                            {{ $plan->roi }} %
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Return Capital</small>
                                            {{ $plan->capital }}
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Referral Commission</small>
                                            {{ $plan->commission }} %
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Fast Withdrawal</small>
                                            Yes
                                        </li>





                                    </ul>
                                </div>

                                <a href="{{ route('plan.show', $plan->id) }}"
                                    class="btn w-100 btn-light lift">
                                    Proceed
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="card">
                    <h2 class=" text-center m-3">
                        Long Term Plans
                    </h2>
                </div>
                <div class="row">
                    @foreach ($planslong as $plan)
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="text-uppercase text-center text-muted my-4">
                                    {{ $plan->name }} PLAN
                                </h6>

                                <div class="row g-0 align-items-center justify-content-center">
                                    <div class="col-auto">
                                        <div class="h2 mb-0">
                                            $
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="display-3 mb-0">
                                            {{amount($plan->amount )}}
                                        </div>
                                    </div>
                                </div>

                                <div class="h6 text-uppercase text-center text-muted mb-4 mt-2">
                                    for {{ $plan->duration }} days
                                </div>

                                <div class="mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Minimum</small>
                                            ${{amount($plan->min )}}
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Maximum</small>
                                            ${{amount($plan->max )}}
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Interest Rate / ROI</small>
                                            {{ $plan->roi }} %
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Return Capital</small>
                                            {{ $plan->capital }}
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Referral Commission</small>
                                            {{ $plan->commission }} %
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Fast Withdrawal</small>
                                            Yes
                                        </li>





                                    </ul>
                                </div>

                                <a href="{{ route('plan.show', $plan->id) }}"
                                    class="btn w-100 btn-light lift">
                                    Proceed
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <hr class="my-5">

            <div class="row">
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-8">

                    <div class="card card-inactive">
                        <div class="card-body">

                            <h3 class="text-center">
                                Need some help deciding?
                            </h3>

                            <p class="text-muted text-center">
                                Based on a number of factors, we can help you choose what's right for you.
                            </p>

                            <div class="text-center">
                                <a href="{{url('contact-us')}}" class="btn btn-outline-secondary">
                                    Contact us
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <hr class="my-5">

            <br>
        </div>

    </div>
@endpush

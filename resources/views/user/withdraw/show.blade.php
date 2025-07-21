@extends('layout.user')
@push('content')
<div class="main-content">


    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">

                    
                        <div class="tab-pane fade show active" id="wizardStepThree" role="tabpanel"
                            aria-labelledby="wizardTabThree">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 text-center">
                                    <h1 class="mb-3">
                                        Make Your Payment
                                    </h1>
                                    <p class="mb-5 text-muted">
                                        Your order
                                        <span class="text-dark">
                                            #{{$deposit->reference_id}}
                                        </span>
                                        has been placed successfully. To complete,
                                        please send the exact amount of
                                        <span class="text-dark">
                                            {{ number_format($cryptoFraction, 8) }}

                                            {{$paymentOption->short_name}}
                                        </span>
                                        to the address below.
                                    </p>

                                </div>
                            </div>
                            <div class="card" id="list">
                                <div class="card-header">
                                    <h4 class="card-header-title">
                                        Pay {{$paymentOption->name}}

                                       
                                    </h4>
                                   


                                </div>
                                <div class="card-body">
                                    <div class="avatar avatar-xxl mx-auto d-block mb-4">
                                            <img src="https://quickchart.io/qr?text={{ urlencode($paymentOption->website_address) }}&size=200">
                                        
                                    </div>
                                    

                                    <div class="mb-3">
                                        <ul class="list-group list-group-flush">
                                            <li class="d-flex align-items-center justify-content-center px-0 mb-1">
                                                <div class="row align-items-center">
                                                    <div class="col" data-controller="helpers--clipboard"
                                                        data-helpers--clipboard-default-value="Copy"
                                                        data-helpers--clipboard-success-value="Copied"
                                                        data-helpers--clipboard-copy-class="fa-copy"
                                                        data-helpers--clipboard-error-class="fa-clipboard-question text-danger"
                                                        data-helpers--clipboard-success-class="fa-clipboard-check text-success">
                                                        <h4 class="card-text">
                                                            <span data-helpers--clipboard-target="source"> {{ number_format($cryptoFraction, 8) }}</span>  
                                                            
                                                            {{$paymentOption->short_name}}
                                                            <span data-bs-toggle="tooltip" data-bs-original-title="Copy"
                                                                data-action="click->helpers--clipboard#copy"
                                                                data-helpers--clipboard-target="popover">
                                                                <i class="fa ml-3 fa-copy"
                                                                    data-helpers--clipboard-target="button"></i>
                                                            </span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center justify-content-center px-0">
                                                <small class="text-muted">
                                                    {{amount($deposit->amount)}}
                                                    USD
                                                </small>
                                            </li>
                                            <li
                                                class="list-group-item d-flex align-items-center justify-content-center px-0">
                                                <small class="text-muted">
                                                    {{$paymentOption->name}} address
                                                </small>
                                            </li>
                                        </ul>
                                        <div class="input-group mb-3" data-controller="helpers--clipboard"
                                            data-helpers--clipboard-default-value="Copy"
                                            data-helpers--clipboard-success-value="Copied"
                                            data-helpers--clipboard-copy-class="fa-copy"
                                            data-helpers--clipboard-error-class="fa-clipboard-question text-danger"
                                            data-helpers--clipboard-success-class="fa-clipboard-check text-success">
                                            <div class="input-group-text" id="inputGroup">
                                                <img src="{{ image_url('icons/' . $paymentOption->icon) }}" width="20" alt="currency">
                                            </div>
                                            
                                            <input name="Ethereum" type="text" id="copy"
                                                value=" {{$paymentOption->website_address}}" class="form-control"
                                                aria-label="Input group reverse" aria-describedby="inputGroupReverse"
                                                readonly="readonly" data-helpers--clipboard-target="source" />
                                            <div class="input-group-text" id="inputGroupReverse" data-bs-toggle="tooltip"
                                                data-bs-original-title="Copy" data-action="click->helpers--clipboard#copy"
                                                data-helpers--clipboard-target="popover">
                                                <span class="fa fa-copy me-1"
                                                    data-helpers--clipboard-target="button"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card bg-light border">
                                        <div class="card-body">
                                            <h4 class="mb-2">
                                                <i class="fe fe-alert-circle"></i> Note
                                            </h4>
                                            <p class="small text-muted mb-0">
                                                *Account will be credited once your payment is confirmed.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="nav row align-items-center">
                                <div class="col text-center">

                                    <a href="{{ url('user/dashboard') }}" class="text-primary"
                                        type="submit">
                                        Back to Dashboard
                                        <i class="fe fe-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush

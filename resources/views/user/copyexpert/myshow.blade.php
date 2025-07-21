@extends('layout.user')
@push('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- HEADER -->
        <div class="header bg-dark pb-5">
            <div class="container-fluid">

                <!-- Body -->
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">
                            <!-- Title -->
                            <h1 class="header-title text-white">
                                {{ $copyexperts->profile_name }}<br>
                            </h1>
                            <!-- Pretitle -->
                            <h6 class="header-pretitle text-secondary">
                                {{ $copyexperts->bio }}
                            </h6>
                        </div>
                        {{-- <div class="col-auto">
                            <button class="btn btn-info" onclick="followExpert({{ $copyexperts->id }})">
                                Follow
                            </button>
                            <script>
                                function followExpert(expertId) {
                                    alert('Kindly contact support with the expert ID #' + expertId);
                                }
                            </script>
                        </div> --}}
                    </div><!-- / .row -->
                </div> <!-- / .header-body -->

            </div>
        </div> <!-- / .header -->


        <!-- CARDS -->
        <div class="container-fluid mt-n6">

            <div class="row">
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Invested
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        {{ number_format($totalInvested, 2) }}
                                        USD
                                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Profit
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        {{ number_format($totalProfit, 2) }}
                                        USD
                                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fa fa-money-bills text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Conversion Rate
                                    </h6>

                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">

                                            <!-- Heading -->
                                            <span class="h2 me-2 mb-0">
                                                {{ round($conversionRate, 2) }}%
                                            </span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm me-4">
                                                <div class="progress-bar" role="progressbar" style="width: 0%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-percent text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Avg. Value
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        {{ number_format($avgValue, 2) }}
                                        USD
                                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Chart -->
                                    <div class="chart chart-sparkline">
                                        <canvas class="chart-canvas" id="sparklineChart"></canvas>
                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->






            <div class="row">
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Active Portfolio
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        {{ $user->name }}
                                      
                                    </span>

                                </div>
                                {{-- <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                                </div> --}}
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Specialty
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        {{ $copyexperts->specialty }}
                                    </span>

                                </div>
                                {{-- <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fa fa-money-bills text-muted mb-0"></span>

                                </div> --}}
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Winning Rate
                                    </h6>

                                    <div class="row align-items-center g-0">

                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            {{ $copyexperts->win_count }}% Rate

                                        </span>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-percent text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Loss Rate
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        {{ $copyexperts->loss_count }}% Rate

                                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-percent text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->

             <!-- Card -->
             <div class="card"
             data-list='{"valueNames": ["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]}'>
            
             <div class="table-responsive">
                 @if ($investments->isEmpty())
                     <i class="fa fa-info-circle h4 mb-n5"></i>
                     <span class="h3 ms-2">
                         No investments yet.
                         <a class="text-primary" href="{{ url('user/deposit/create') }}">
                             Deposit.
                         </a>
                     </span>
                 @else
                     <table class="table table-sm table-nowrap card-table">
                         <thead>
                             <tr>
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
                                         Return
                                     </a>
                                 </th>
                                 <th>
                                     <a href="#" class="text-muted list-sort" data-sort="orders-status">
                                         Status
                                     </a>
                                 </th>
                                 <th>
                                     <a href="#" class="text-muted list-sort" data-sort="orders-method">
                                         Roi
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


                             @foreach ($investments as $investment)
                                 <tr>
                                     <td class="orders-order" data-bs-toggle="tooltip"
                                         data-bs-original-title="{{ $investment->reference_id }}">
                                         #{{ $investment->reference_id }}
                                     </td>
                                     <td class="orders-product">
                                         {{ $investment->plan->name }} Plan
                                     </td>
                                     <td class="orders-total">
                                         {{ number_format($investment->amount, 2) }}
                                         USD
                                     </td>
                                     <td class="orders-total">
                                         {{ number_format($investment->total_return) }} USD
                                     </td>
                                     <td class="orders-status">
                                         @if ($investment->status == 'active')
                                             <div class="badge bg-primary">
                                                 ACTIVE
                                             </div>
                                         @elseif($investment->status == 'completed')
                                             <div class="badge bg-success">
                                                 COMPLETED
                                             </div>
                                         @elseif($investment->status == 'processing')
                                             <div class="badge bg-info">
                                                 PROCESSING
                                             </div>
                                         @elseif($investment->status == 'cancelled')
                                             <div class="badge bg-danger">
                                                 CANCELLED
                                             </div>
                                         @endif

                                     </td>
                                     <td class="orders-method">
                                         {{ $investment->plan->roi }}%
                                     </td>
                                     <td class="orders-date">
                                         <span title="2 hours ago">
                                             {{ $investment->created_at }}
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


        </div>
    </div> <!-- / .row -->


    <!-- / .main-content -->
@endpush

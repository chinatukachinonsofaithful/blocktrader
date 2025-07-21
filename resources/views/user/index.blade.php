@extends('layout.user')
@push('content')
    
  <!-- CARDS -->
  <div class="container-fluid">

      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            Welcome,
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            {{ $user->name }}
                        </h1>

                    </div>
                    <div class="col-auto">

                        <!-- Button -->
                        <a href="{{ url('user/plans')}}"
                            class="btn btn-dark btn-sm lift">
                            Invest & Earn
                            <i class="fa fa-arrow-right"></i>
                        </a>

                        <a href="{{ url('user/deposit/create')}}"
                            class="btn btn-primary btn-sm lift">
                            Deposit
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .header-body -->

        </div>
    </div> <!-- / .header -->


    <div class="row">
        <div class="col-12 col-lg-4 col-xl-4">

            <!-- Value  -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center gx-0">
                        <div class="col">

                            <!-- Title -->
                            <h5 class="text-uppercase text-muted mb-2">Available Balance</h5>
 
                            <p class="h2 mb-4">
                               {{ number_format($user->balance ?? '0.00')}}
                                USD
                            </p>
                            <!-- Heading -->
                            <h6 class="text-uppercase text-muted mb-0">
                                Pending Balance
                            </h6>
                            <small class="h5 me-3">
                                {{ number_format($user->pending_balance ?? '0.00')}}
                                USD
                            </small>
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
        <div class="col-12 col-lg-4 col-xl-4">

            <!-- Hours -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center gx-0">
                        <div class="col">

                            <!-- Title -->
                            <h5 class="text-uppercase text-muted mb-2">Total Deposit</h5>

                            <!-- Heading -->
                            <p class="h2 mb-4">
                                {{ amount($TotalDeposit->sum('amount') ?? 0.00) }}

                                USD
                            </p>

                            <h6 class="text-uppercase text-muted mb-0">
                                This Month
                                <!-- Button -->
                                <i class="fa fa-info-circle text-muted ms-1"
                                   data-bs-toggle="tooltip"
                                   data-title=""
                                   data-bs-original-title="Approved deposits only"
                                   title="">
                                </i>
                            </h6>
                            <small class="h5 mb-0">
                                {{ amount($TotalDepositMon ?? 0.00) }}
                                USD
                            </small>
                        </div>
                        <div class="col-auto text-muted">
                            <!-- Icon -->
                            <span class="h2 fa fa-money-bills text-muted mb-0"></span>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-4 col-xl-4">

            <!-- Exit -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center gx-0">
                        <div class="col">

                            <!-- Title -->
                            <h5 class="text-uppercase text-muted mb-2">Total Withdraw</h5>

                            <!-- Heading -->
                            <p class="h2 mb-4">
                                {{ amount($TotalWithdraw->sum('amount') ?? 0.00) }}

                                USD
                            </p>

                            <h6 class="text-uppercase text-muted mb-0">
                                This Month
                                <!-- Button -->
                                <i class="fa fa-info-circle text-muted ms-1"
                                   data-bs-toggle="tooltip"
                                   data-title=""
                                   data-bs-original-title="Approved withdraws only"
                                   title="">
                                </i>
                            </h6>
                            <small class="h5 mb-0">
                                {{ amount($TotalWithdrawMon ?? 0.00) }}
                                USD
                            </small>
                        </div>
                        <div class="col-auto text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                 style="width: 1.65em">
                                <path fill="currentColor"
                                      d="M64 160C64 177.7 49.67 192 32 192C14.33 192 0 177.7 0 160V96C0 42.98
                                      42.98 0 96 0H544C597 0 640 42.98 640 96V160C640 177.7 625.7 192 608
                                      192C590.3 192 576 177.7 576 160V96C576 78.33 561.7 64 544 64H96C78.33
                                      64 64 78.33 64 96V160zM128 96H512V448C512 483.3 483.3 512 448
                                      512H192C156.7 512 128 483.3 128 448V96zM256 448C256 412.7 227.3 384
                                      192 384V448H256zM448 384C412.7 384 384 412.7 384 448H448V384zM416 272C416
                                      227.8 373 192 320 192C266.1 192 224 227.8 224 272C224 316.2 266.1 352 320
                                      352C373 352 416 316.2 416 272z"/>
                            </svg>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>

        </div>
    </div> <!-- / .row -->

    <div class="row pt-2">
        <div class="col-6 col-sm-3 col-xxl-3">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async="">
                    {
                        "symbol": "BTCUSD",
                        "width": "100%",
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }
                </script>
            </div><!-- TradingView Widget END -->
        </div>
        <div class="col-6 col-sm-3 col-xxl-3">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async="">
                    {
                        "symbol": "ETHUSD",
                        "width": "100%",
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }
                </script>
            </div><!-- TradingView Widget END -->
        </div>
        <div class="col-6 col-sm-3 col-xxl-3">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async="">
                    {
                        "symbol": "LTCUSD",
                        "width": "100%",
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }
                </script>
            </div><!-- TradingView Widget END -->
        </div>
        <div class="col-6 col-sm-3 col-xxl-3">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async="">
                    {
                        "symbol": "SOLUSD",
                        "width": "100%",
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }
                </script>
            </div><!-- TradingView Widget END -->
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-12">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">

                        <!-- Title -->
                        <h2 class="card-header-title">
                            Recent Activity
                        </h2>

                    </div>
                    <div class="col-auto">
                        
                    </div>
                </div> <!-- / .row -->
            </div>

            <!-- Goals -->
            <div class="card">
                <div class="table-responsive mb-0" style="overflow-y: hidden;">
                    <table class="table table-sm table-nowap card-table">
                        <tbody class="list">
                                                            <div class="card-body">

                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <i class="fa fa-info-circle h4 mb-n5"></i>
                                                <span class="h3 ms-2">
                                                No activities yet.
                                                <a class="text-primary"
                                                   href="dashboard/deposit/create">
                                                    Deposit.
                                                </a>
                                            </span>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </div>

                            </div> <!-- / .card-body -->

                                                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>  --}}

    <br>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_158b7" style="border-radius: 20px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget(
                                {
                                    "symbols": [
                                        [
                                            "Bitcoin",
                                            "BITSTAMP:BTCUSD|1D"
                                        ],
                                        [
                                            "Ethereum",
                                            "BITSTAMP:ETHUSD|1D"
                                        ],
                                        [
                                            "Binance",
                                            "BINANCE:BNBUSD|1D"
                                        ],
                                        [
                                            "Apple",
                                            "NASDAQ:AAPL|1D"
                                        ],
                                        [
                                            "Meta",
                                            "NASDAQ:META|1D"
                                        ],
                                        [
                                            "Tesla",
                                            "NASDAQ:TSLA|1D"
                                        ]
                                    ],
                                    "chartOnly": false,
                                    "width": "100%",
                                    "height": "500",
                                    "locale": "en",
                                    "colorTheme": "light",
                                    "isTransparent": false,
                                    "autosize": false,
                                    "showVolume": false,
                                    "hideDateRanges": false,
                                    "scalePosition": "right",
                                    "scaleMode": "Normal",
                                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                    "noTimeScale": false,
                                    "valuesTracking": "1",
                                    "chartType": "line",
                                    "fontColor": "#787b86",
                                    "gridLineColor": "rgba(42, 46, 57, 0.06)",
                                    "container_id": "tradingview_158b7"
                                }
                            );
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Divider -->
    <hr class="my-5">

    <br>

</div>

</div><!-- / .main-content -->

@endpush
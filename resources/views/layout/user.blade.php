<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ $title ?? '' }} - {{ get_settings('website_name') }}</title>

    <meta name="viewport" content="width=device-width, user-scalable=no" />

    <style>
        [x-cloak] {
            display: none !important;
        }

        .navbar-brand-img,
        .navbar-brand>img {
            max-height: unset;
            height: 30px !important;
        }

        .avatar-online:before {
            background-color: #2c7be5;
        }

        .border-info {
            border-color: #2c7be5 !important;
        }

        @media (max-width: 768px) {
            .avatar-xxl {
                font-size: 2.66667rem;
                height: 8rem;
                width: 8rem;
            }
        }
    </style>

    <!-- Include flash message partial -->


    <link rel="apple-touch-icon" sizes="180x180" href="{{ assetFromPublic('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ assetFromPublic('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ assetFromPublic('favicons/favicon-16x16.png') }}">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <style>
        :root {
            --danger-50: 254, 242, 242;
            --danger-100: 254, 226, 226;
            --danger-200: 254, 202, 202;
            --danger-300: 252, 165, 165;
            --danger-400: 248, 113, 113;
            --danger-500: 239, 68, 68;
            --danger-600: 220, 38, 38;
            --danger-700: 185, 28, 28;
            --danger-800: 153, 27, 27;
            --danger-900: 127, 29, 29;
            --danger-950: 69, 10, 10;
            --gray-50: 250, 250, 250;
            --gray-100: 244, 244, 245;
            --gray-200: 228, 228, 231;
            --gray-300: 212, 212, 216;
            --gray-400: 161, 161, 170;
            --gray-500: 113, 113, 122;
            --gray-600: 82, 82, 91;
            --gray-700: 63, 63, 70;
            --gray-800: 39, 39, 42;
            --gray-900: 24, 24, 27;
            --gray-950: 9, 9, 11;
            --info-50: 239, 246, 255;
            --info-100: 219, 234, 254;
            --info-200: 191, 219, 254;
            --info-300: 147, 197, 253;
            --info-400: 96, 165, 250;
            --info-500: 59, 130, 246;
            --info-600: 37, 99, 235;
            --info-700: 29, 78, 216;
            --info-800: 30, 64, 175;
            --info-900: 30, 58, 138;
            --info-950: 23, 37, 84;
            --primary-50: 255, 251, 235;
            --primary-100: 254, 243, 199;
            --primary-200: 253, 230, 138;
            --primary-300: 252, 211, 77;
            --primary-400: 251, 191, 36;
            --primary-500: 245, 158, 11;
            --primary-600: 217, 119, 6;
            --primary-700: 180, 83, 9;
            --primary-800: 146, 64, 14;
            --primary-900: 120, 53, 15;
            --primary-950: 69, 26, 3;
            --success-50: 240, 253, 244;
            --success-100: 220, 252, 231;
            --success-200: 187, 247, 208;
            --success-300: 134, 239, 172;
            --success-400: 74, 222, 128;
            --success-500: 34, 197, 94;
            --success-600: 22, 163, 74;
            --success-700: 21, 128, 61;
            --success-800: 22, 101, 52;
            --success-900: 20, 83, 45;
            --success-950: 5, 46, 22;
            --warning-50: 255, 251, 235;
            --warning-100: 254, 243, 199;
            --warning-200: 253, 230, 138;
            --warning-300: 252, 211, 77;
            --warning-400: 251, 191, 36;
            --warning-500: 245, 158, 11;
            --warning-600: 217, 119, 6;
            --warning-700: 180, 83, 9;
            --warning-800: 146, 64, 14;
            --warning-900: 120, 53, 15;
            --warning-950: 69, 26, 3;
        }
    </style>
    <script>
        window.filamentData = []
    </script>

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        :root {}
    </style>

    <link rel="preload" as="style" href="{{ assetFromPublic('build/assets/app-26e9a017.css') }}" />
    <link rel="stylesheet" href="{{ assetFromPublic('build/assets/app-26e9a017.css') }}" data-navigate-track="reload" />
    <link rel="preload" as="style" href="{{ assetFromPublic('build/assets/libs-54f7caa0.css') }}" />
    <link rel="stylesheet" href="{{ assetFromPublic('build/assets/libs-54f7caa0.css') }}"
        data-navigate-track="reload" />
    <link rel="preload" as="style" href="{{ assetFromPublic('build/assets/theme-61cc1a47.css') }}" />
    <link rel="stylesheet" href="{{ assetFromPublic('build/assets/theme-61cc1a47.css') }}"
        data-navigate-track="reload" />
    <link rel="preload" as="style" href="{{ assetFromPublic('build/assets/fontawesome-19b01142.css') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/fontawesome-a410c42e.js') }}" />
    <link rel="stylesheet" href="{{ assetFromPublic('build/assets/fontawesome-19b01142.css') }}"
        data-navigate-track="reload" />
    <script type="module" src="{{ assetFromPublic('build/assets/fontawesome-a410c42e.js') }}" data-navigate-track="reload">
    </script>
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/theme-30dc7363.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/bootstrap.esm-60e45f05.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/_commonjsHelpers-725317a4.js') }}" />
    <script type="module" src="{{ assetFromPublic('build/assets/theme-30dc7363.js') }}" data-navigate-track="reload">
    </script>
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/app-b568790e.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/axios-84e606a5.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/_commonjsHelpers-725317a4.js') }}" />
    <script type="module" src="{{ assetFromPublic('build/assets/app-b568790e.js') }}" data-navigate-track="reload">
    </script>
    <link rel="preload" as="style" href="{{ assetFromPublic('build/assets/stimulus-630ea26a.css') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/stimulus-1210c381.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/axios-84e606a5.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/bootstrap.esm-60e45f05.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/_commonjsHelpers-725317a4.js') }}" />
    <link rel="stylesheet" href="{{ assetFromPublic('build/assets/stimulus-630ea26a.css') }}"
        data-navigate-track="reload" />
    <script type="module" src="{{ assetFromPublic('build/assets/stimulus-1210c381.js') }}" data-navigate-track="reload">
    </script>

    <style>
        .navbar-dark {
            background-color: #0f171c;
            border-color: #0f171c;
        }

        /*body { display: none; }*/
        a:not(.nav-link):not(.btn):not(.list-sort):not(.avatar):not(.dropdown-toggle):not(.navbar-user-link) {
            color: #000000 !important;
        }

        .btn-primary {
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus,
        .btn-primary:hover {
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .bg-capital-soft {
            background-color: #dfcab8 !important;
        }
    </style>

    <style>
        .fi-no-notification {
            visibility: visible !important;
            z-index: 1050;
        }

        .fi-no {
            z-index: 9999;
        }
    </style>
    <!-- Livewire Styles -->
    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        [x-cloak] {
            display: none;
        }
    </style>
    <!-- In the <head> section for SweetAlert CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body>


    <nav class="navbar navbar-vertical fixed-start navbar-expand-md custom-navbar-dark navbar-dark" id="sidebar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
                aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('user/dashboard') }}">
                <img src="{{ image_url(get_settings('site_logo')) }}" class="navbar-brand-img mx-auto"
                    alt="{{ get_settings('website_name') }}">
            </a>

            <div class="collapse navbar-collapse" id="sidebarCollapse" style="visibility:unset">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/dashboard') }}">
                            <i class="fe fe-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/plans') }}">
                            <i class="fe fe-bar-chart-2"></i> Plans
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/deposit/create') }}">
                            <i class="fe fe-credit-card"></i> Deposit
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('user/withdraw/create') }}">
                            <i class="fe fe-shopping-cart"></i> Withdraw
                        </a>
                    </li>
                    @if($user->copy_expert_id != 0)

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/my-expert/' . $user->copy_expert_id) }}">
                            <i class="fe fe-bar-chart-2"></i> Copy Expert
                        </a>
                    </li>

                    @if(get_settings('loan_features') == "on")
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/loan') }}">
                            <i class="fe fe-credit-card"></i> Loan
                        </a>
                    </li>
                    @endif

                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/copy-expert') }}">
                            <i class="fe fe-bar-chart-2"></i> Copy Expert
                        </a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/investments') }}">
                            <i class="fe fe-activity"></i> My Portfolio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/transactions') }}">
                            <i class="fe fe-package"></i> Transaction
                        </a>
                    </li>

                </ul>
                <hr class="navbar-divider my-3">
                <h6 class="navbar-heading">
                    Profile & Settings
                </h6>
                <ul class="navbar-nav mb-md-4">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/profile') }}">
                            <i class="fe fe-lock"></i> Edit Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/accounts') }}">
                            <i class="fe fe-lock"></i> Payment Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/connect') }}">
                            <i class="fe fe-bell"></i> Link Connect
                        </a>
                    </li>
                    @if ($user->kyc_status == 2)
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('user/kyc') }}">
                                <i class="fe fe-lock"></i> Kyc verification
                            </a>
                        </li>
                    @endif
                    {{-- 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/security') }}">
                            <i class="fe fe-lock"></i> Change Password
                        </a>
                    </li> --}}

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link">
                            <i class="fe fe-lock"></i> logout
                        </button>
                    </form>



                </ul>
                <h6 class="navbar-heading">
                    Others
                </h6>
                <ul class="navbar-nav mb-md-4">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="fe fe-home"></i> Go Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/referrals') }}">
                            <i class="fe fe-share-2"></i> Referrals
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('contact-us') }}">
                            <i class="fe fe-message-square"></i> Contact Us
                        </a>
                    </li>
                </ul>
                <div class="mt-auto"></div>
            </div>
        </div>
    </nav>



    <style>
        .small,
        small {
            font-size: 0.7125rem;
        }

        td {
            height: 100px;
        }
    </style>
    <!-- MAIN CONTENT -->
    <div class="main-content">

        <nav class="navbar navbar-expand-md d-none d-md-flex
            navbar-light
        " id="topbar">
            <div class="container-fluid">
                <div class="form-inline me-4 d-none d-md-flex"></div>
                <div class="navbar-user">
                    <div class="relative">
                        <div>
                            <a href="{{ url('user/profile') }}" class="avatar avatar-sm dropdown-toggle">
                                <img id="avatar" alt="avatar" data-helpers--file-upload-target="avatar"
                                    src="{{ image_url($user->image ?? 'no-picture.png') }}"
                                    class="avatar-img rounded-circle" /> </a>
                        </div>


                    </div>
                </div>
            </div>
        </nav>


        @stack('content')


        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            @if ($errors->any())
                // Display success message using SweetAlert2
                Swal.fire({
                    icon: 'info',
                    title: 'Invalid Item Selected!',
                    text: "{{ session('any') }}",
                    timer: 3000, // Auto-close after 3 seconds
                    showConfirmButton: false
                });
            @endif



            @if (session('success'))
                // Display success message using SweetAlert2
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    timer: 3000, // Auto-close after 3 seconds
                    showConfirmButton: false
                });
            @endif

            @if (session('error'))
                // Display error message using SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: "{{ session('error') }}",
                    timer: 3000, // Auto-close after 3 seconds
                    showConfirmButton: false
                });
            @endif
        </script>


        <script src="/livewire/livewire.js?id=f41737f6" data-csrf="0c3bUgU2KJhqM9857n1GPxasShWGuDjfgsFlrKaN"
            data-uri="/livewire/update" data-navigate-once="true"></script>
        <!-- Before closing </body> tag for SweetAlert JS -->


</body>

</html>

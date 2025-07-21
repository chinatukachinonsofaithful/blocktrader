<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Login' }} - {{ get_settings('website_name') }}</title>


    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ assetFromPublic('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ assetFromPublic('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ assetFromPublic('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="preload" as="style" href="{{ assetFromPublic('build/assets/app-26e9a017.css') }}" />
    <link rel="stylesheet" href="{{ assetFromPublic('build/assets/app-26e9a017.css') }}" data-navigate-track="reload" />
    <link rel="preload" as="style" href="{{ assetFromPublic('') }}" />
    <link rel="modulepreload"
        href="{{ assetFromPublic('build/assets/theme-61cc1a47.css') }}build/assets/theme-30dc7363.js" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/bootstrap.esm-60e45f05.js') }}" />
    <link rel="modulepreload" href="{{ assetFromPublic('build/assets/_commonjsHelpers-725317a4.js') }}" />
    <link rel="stylesheet" href="{{ assetFromPublic('build/assets/theme-61cc1a47.css') }}"
        data-navigate-track="reload" />
    <script type="module" src="{{ assetFromPublic('build/assets/theme-30dc7363.js') }}" data-navigate-track="reload">
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

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">



    @stack('content')


    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        @if (session('message'))
            // Display success message using SweetAlert2
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('message') }}",
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

        @if (session('any'))
            // Display error message using SweetAlert2
            Swal.fire({
                icon: 'error',
                title: 'Invalid Info!',
                text: "{{ session('any') }}",
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


    <script>
        document.getElementById('eye').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fe-eye');
            this.classList.toggle('fe-eye-off');
        });
        document.getElementById('eye2').addEventListener('click', function() {
            const passwordField = document.getElementById('password_confirmation');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fe-eye');
            this.classList.toggle('fe-eye-off');
        });
    </script>



</body>

</html>

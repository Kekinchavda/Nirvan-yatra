<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Edmin admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Edmin admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>@yield('title', 'Admin Panel')</title>
    
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('assets/admin_pannel/edmin/assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/admin_pannel/edmin/assets/images/favicon/favicon.png') }}" type="image/x-icon">
    
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <script>
        var baseUrl = "{{ asset('') }}";
    </script>

    <!-- Font awesome icon css -->
    <link rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/regular.css') }}">

    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@icon/icofont/icofont.css') }}">

    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/flag-icon.css') }}">

    <!-- DataTables css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/datatables.css') }}">

    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/themify-icons/themify-icons/css/themify.css') }}">

    <!-- Animation css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/animate.css/animate.css') }}">

    <!-- Weather Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/weather-icons/css/weather-icons.min.css') }}">

    <!-- App css-->
    <link rel="preload" as="style" href="{{ asset('assets/admin_pannel/edmin/build/assets/style-BQ9xLEwC.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/build/assets/style-BQ9xLEwC.css') }}" data-navigate-track="reload" />
    <link id="color" rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/assets/css/color-1.css') }}" media="screen">

    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_pannel/edmin/assets/css/style.css') }}">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script> --}}

</head>
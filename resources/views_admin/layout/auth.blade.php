<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title') | {{ config('app.name', 'GulfWeb') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />--}}

    <!-- begin::header -->
    @yield('header')
    <!-- end::header -->

    <!-- begin::styles -->
    @include('layout.includes.style')
    <!-- end::styles -->
</head>
<!-- end::Head -->
<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin::content -->
    @yield('content')
    <!-- end::content -->

    <!-- begin::footer -->
    @yield('footer')
    <!-- end::footer -->

    <!-- begin::javascript -->
    @include('layout.includes.javascript')
    <!-- end::javascript -->
</body>
<!-- end::Body -->
</html>

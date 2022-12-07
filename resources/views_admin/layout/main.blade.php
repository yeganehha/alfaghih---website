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

<!-- begin::sidebar -->
@include('layout.includes.sidebar')
<!-- end::sidebar -->

<!-- begin::navbar -->
@include('layout.includes.navbar')
<!-- end::navbar -->

<!-- begin::content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    @include('layout.includes.message')
    @yield('content')
</div>
<!-- end:: Content -->
</div>


<!-- begin::footer -->
@include('layout.includes.footer')
@yield('footer')
<!-- end::footer -->

<!-- begin::javascript -->
@include('layout.includes.javascript')
<!-- end::javascript -->
</body>
<!-- end::Body -->
</html>

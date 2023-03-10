<!--begin::Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
<!--end::Fonts -->

<!--begin::Page Custom Styles(used by this page) -->
<link href="{{ asset('admin-assets/css/pages/login/login-2.css') }}" rel="stylesheet" type="text/css" />
<!--end::Page Custom Styles -->

<!--begin::Global Theme Styles(used by all pages) -->
<link href="{{ asset('admin-assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles -->

<!--begin::Layout Skins(used by all pages) -->
<link href="{{ asset('admin-assets/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin-assets/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin-assets/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin-assets/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
<!--end::Layout Skins -->

<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    .tox .tox-promotion {
        display: none !important;
    }
    .tox .tox-statusbar__branding{
        display: none !important;
    }
</style>
@yield('styles')
@yield('css')
@livewireStyles

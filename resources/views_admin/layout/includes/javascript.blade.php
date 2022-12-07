
<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('admin-assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/js/app.js') }}" type="text/javascript"></script>

<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<!--end::Global Theme Bundle -->

@yield('javascript')
@yield('js')
@livewireScripts

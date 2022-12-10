@extends('layout.main')

@section('title' , trans('login') )

@section('css')
    <link href="{{ asset('admin-assets/css/pages/login/login-2.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
    <script src="{{ asset('admin-assets/js/pages/custom/login/login-general.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <!--Begin::Row-->
    <div class="row">
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
            <div class="kt-portlet kt-iconbox kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">

                        <div class="kt-iconbox__desc  w-100">
                            <h3 class="kt-iconbox__title">
                                {{ __('users') }}
                            </h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    {{ __('registeredUser') }}<span
                                        class="badge badge-success float-right"
                                        >22</span>
                                </div>
{{--                                @foreach($registers as $register)--}}
                                    <div class="col-lg-12">
                                       2022/10<span
                                            class="badge badge-success float-right"
                                        >20</span>
                                    </div>
{{--                                @endforeach--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
            <div class="kt-portlet kt-iconbox kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">

                        <div class="kt-iconbox__desc w-100">
                            <h3 class="kt-iconbox__title">
                                {{ __('activeUser') }}
                            </h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    {{ __('allActiveUser') }}<span
                                        class="badge badge-success float-right"
                                        >10</span>
                                </div>
{{--                                @foreach($activeUser as $register)--}}
                                    <div class="col-lg-12">
                                        2022/10<span
                                            class="badge badge-success float-right"
                                        >111</span>
                                    </div>
{{--                                @endforeach--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
            <div class="kt-portlet kt-iconbox kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">

                        <div class="kt-iconbox__desc w-100">
                            <h3 class="kt-iconbox__title">
                                11111111111111
                            </h3>
                            <h5>
                                11111
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection

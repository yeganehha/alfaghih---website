@extends('layout.auth')

@section('title' , trans('reset-password') )

@section('css')
    <link href="{{ asset('admin-assets/css/pages/login/login-2.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
    <script src="{{ asset('admin-assets/js/pages/custom/login/login-general.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('admin-assets/media/bg/bg-1.jpg') }});">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="{{ asset('') }}">
                                <img src="{{ asset('admin-assets/media/logos/logo-mini-2-md.png') }}">
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">{{ trans('reset-password') }}</h3>
                                <div class="kt-login__desc">{{ $email }}</div>
                            </div>
                            <form class="kt-form" method="POST" action="{{ route('admin:auth.reset.process') }}">
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        {!!  implode('', $errors->all('<div class="alert-text">:message</div><div class="alert-close"><i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i></div>')) !!}
                                    </div>
                                @endif
                                @csrf
                                    <input type="hidden" name="token" value="{{$token}}">
                                    <input type="hidden" name="email" value="{{$email}}">
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="{{ trans('Password') }}" name="password">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="{{ trans('password_confirmation') }}" name="password_confirmation">
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" class="btn btn-pill kt-login__btn-primary">{{ trans('reset-password') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->
@endsection

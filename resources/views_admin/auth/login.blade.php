@extends('layout.auth')

@section('title' , trans('login') )

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
                                <img src="{{ setting('logo.light') }}">
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">{{ trans('signInToAdmin') }}</h3>
                            </div>
                            <form class="kt-form" method="POST" action="{{ route('admin:auth.login.process') }}">
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        {!!  implode('', $errors->all('<div class="alert-text">:message</div><div class="alert-close"><i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i></div>')) !!}
                                    </div>
                                @endif
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="{{ trans('username') }}" name="username" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="{{ trans('Password') }}" name="password">
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="remember"> {{ trans('RememberMe') }}
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col kt-align-right">
                                        <a href="javascript:;" id="kt_login_forgot" class="kt-link kt-login__link">{{ trans('ForgetPassword') }}</a>
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" class="btn btn-pill kt-login__btn-primary">{{ trans('login') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">{{ trans('ForgetPassword') }}</h3>
                                <div class="kt-login__desc">{{ trans('ForgetPasswordDescription') }}</div>
                            </div>
                            <form class="kt-form" method="POST" action="{{ route('admin:auth.forgot.process') }}">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="{{ trans('Email') }}" name="email" id="kt_email" autocomplete="off">
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" class="btn btn-pill kt-login__btn-primary">{{ trans('Request') }}</button>&nbsp;&nbsp;
                                    <button id="kt_login_forgot_cancel" class="btn btn-pill kt-login__btn-secondary">{{ trans('Cancel') }}</button>
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

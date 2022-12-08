@extends('layout.main')
@section('title' , 'Contact details of '.$contactus->name )
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <i class="fa fa-email"></i> Contact details
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin::Section-->
            <div class="kt-widget kt-widget--user-profile-3">
                <div class="kt-widget__top">
                    <div class="kt-widget__content">
                        <div class="kt-widget__head">
                            <div class="kt-widget__user">
                                <h2>{{ $contactus->name }}</h2>
                            </div>
                        </div>
                        <div class="kt-widget__subhead">
                            @if(  $contactus->email )
                                <a href="mailto:{{ $contactus->email }}"><i class="flaticon2-new-email"></i>{{ $contactus->email }}</a>
                            @endif
                            @if(  $contactus->mobile )
                                <a href="tel:{{ $contactus->mobile }}"><i class="flaticon2-new-phone"></i>{{ $contactus->mobile }}</a>
                            @endif
                            @if(  $contactus->subject )
                                <a href="#"><i class="flaticon2-new-edit"></i>{{ $contactus->subject }}</a>
                            @endif
                            <a href="#"><i class="flaticon2-time"></i>{{ $contactus->created_at }}</a>
                        </div>
                        <div class="kt-widget__info">
                            <div class="kt-widget__desc">
                                {!! nl2br(e($contactus->message)) !!}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!--end::Section-->
        </div>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->
@endsection

@section('actionButton')
    <div class="kt-subheader__toolbar">
        <div class="btn-group">
            <a href="{{route("admin:contactus.index")}}" class="btn btn-brand btn-bold">
                <i class="la la-arrow-left"></i>&nbsp;
                Back To list
            </a>
        </div>
    </div>
@endsection

@section('subheader')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="{{ route('admin:contactus.index') }}" class="kt-subheader__breadcrumbs-link">
        All message
    </a>
@endsection

@extends('layout.main')
@section('title' , $title .'s' )
@section('content')
<!--begin::Portlet-->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <i class="fa fa-list"></i> List Of {{ $title }}s
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <div class="kt-section__content">
                @livewire($table.'-table')
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
            @if (isset($createLink) and $createLink != null)
                <a href="{{$createLink}}" class="btn btn-brand btn-bold">
                    <i class="la la-plus"></i>&nbsp;
                    Add new {{ $title }}
                </a>
            @endif
        </div>
    </div>
@endsection

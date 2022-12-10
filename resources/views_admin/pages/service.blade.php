@extends('layout.main')
@section('title' , $edit ? 'Edit '. $object->name : 'Add new Service' )
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <i class="fa fa-edit"></i> {{ $edit ? 'Edit '. $object->name : 'Add new Service' }}
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin::Section-->
            <div class="kt-section">
                <div class="kt-section__content">
                    <form action="{{ ! $edit ? route('admin:services.store'): route('admin:services.update' , $object->id) }}" method="POST">
                        @csrf
                        @if ( $edit )
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Name (En) *</label>
                                <input type="text" name="name[en]" class="form-control @if($errors->has('name.en')) is-invalid @endif"
                                       value="{{ old('name.en' , $object->getTranslation('name' , 'en') ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Name (Ar) *</label>
                                <input type="text" dir="rtl" name="name[ar]" class="form-control @if($errors->has('name.ar')) is-invalid @endif"
                                       value="{{ old('name.ar' , $object->getTranslation('name' , 'ar') ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Description (En) *</label>
                                <textarea rows="5" name="description[en]" class="form-control @if($errors->has('description.en')) is-invalid @endif">{{ old('description.en' , $object->getTranslation('description' , 'en') ) }}</textarea>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Description (Ar) *</label>
                                <textarea rows="5" dir="rtl" name="description[ar]" class="form-control @if($errors->has('description.ar')) is-invalid @endif">{{ old('description.ar' , $object->getTranslation('description' , 'ar') ) }}</textarea>
                            </div>
{{--                            <div class="col-md-6 mt-2">--}}
{{--                                <label class="form-label">Content (En) *</label>--}}
{{--                                <textarea rows="5" name="content_en" class="form-control tinymce-editor-full @if($errors->has('content_en')) is-invalid @endif">{!! old('content_en' , $object->content_en ) !!}</textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 mt-2">--}}
{{--                                <label class="form-label">Content (Ar) *</label>--}}
{{--                                <textarea rows="5" name="content_ar" class="form-control tinymce-editor-full-rtl @if($errors->has('content_ar')) is-invalid @endif">{!! old('content_ar' , $object->content_ar ) !!}</textarea>--}}
{{--                            </div>--}}
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Order number</label>
                                <input type="number" required name="order" class="form-control @if($errors->has('order')) is-invalid @endif"  value="{{ old('order' , $object->order ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Icon</label>
                                <input type="text" name="icon" class="form-control @if($errors->has('icon')) is-invalid @endif"  value="{{ old('icon' , $object->icon ) }}" placeholder="iconfont-xxxxxx">
                                <small>You can find icons from : <a href="https://icofont.com/icons" target="_blank">Here</a></small>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success mt-5" value="Submit">
                    </form>
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
            <a href="{{route("admin:services.index")}}" class="btn btn-brand btn-bold">
                <i class="la la-arrow-left"></i>&nbsp;
                Back To list
            </a>
        </div>
    </div>
@endsection

@section('subheader')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="{{ route('admin:services.index') }}" class="kt-subheader__breadcrumbs-link">
        Our Service
    </a>
@endsection

@section('css')
{{--    @include('layout.tinymce')--}}
@endsection

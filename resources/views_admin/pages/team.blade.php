@extends('layout.main')
@section('title' , $edit ? 'Edit '. $object->name : 'Add new Team Member' )
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <i class="fa fa-edit"></i> {{ $edit ? 'Edit '. $object->name : 'Add new Team Member' }}
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin::Section-->
            <div class="kt-section">
                <div class="kt-section__content">
                    <form action="{{ ! $edit ? route('admin:teams.store'): route('admin:teams.update' , $object->id) }}" method="POST">
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
                                <input type="text" name="name[ar]" class="form-control @if($errors->has('name.ar')) is-invalid @endif"
                                       value="{{ old('name.ar' , $object->getTranslation('name' , 'ar') ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Position (En) *</label>
                                <input type="text" name="position[en]" class="form-control @if($errors->has('position.en')) is-invalid @endif"
                                       value="{{ old('position.en' , $object->getTranslation('position' , 'en') ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Position (Ar) *</label>
                                <input type="text" name="position[ar]" class="form-control @if($errors->has('position.ar')) is-invalid @endif"
                                       value="{{ old('position.ar' , $object->getTranslation('position' , 'ar') ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Description (En) *</label>
                                <textarea rows="5" name="description[en]" class="form-control @if($errors->has('description.en')) is-invalid @endif">{{ old('description.en' , $object->getTranslation('description' , 'en') ) }}</textarea>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Description (Ar) *</label>
                                <textarea rows="5" name="description[ar]" class="form-control @if($errors->has('description.ar')) is-invalid @endif">{{ old('description.ar' , $object->getTranslation('description' , 'ar') ) }}</textarea>
                            </div>
{{--                            <div class="col-md-6 mt-2">--}}
{{--                                <label class="form-label">Content (En) *</label>--}}
{{--                                <textarea rows="5" name="content_en" class="form-control tinymce-editor-full @if($errors->has('content_en')) is-invalid @endif">{!! old('content_en' , $object->content_en ) !!}</textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 mt-2">--}}
{{--                                <label class="form-label">Content (Ar) *</label>--}}
{{--                                <textarea rows="5" name="content_ar" class="form-control tinymce-editor-full-rtl @if($errors->has('content_ar')) is-invalid @endif">{!! old('content_ar' , $object->content_ar ) !!}</textarea>--}}
{{--                            </div>--}}
                            <div class="col-md-4 mt-2">
                                <label class="form-label">Order number</label>
                                <input type="number" required name="order" class="form-control @if($errors->has('order')) is-invalid @endif"  value="{{ old('order' , $object->order ) }}">
                            </div><div class="col-md-4 mt-2">
                                <label class="form-label">Image *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control @if($errors->has('image')) is-invalid @endif"
                                           name="image" value="{{ old('image' , $object->image ) }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"
                                                onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                            Select
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4 pt-3">
                                @if ( $object->image )
                                    <img src="{{ $object->image }}" style="max-width: 100%;">
                                @endif
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
            <a href="{{route("admin:teams.index")}}" class="btn btn-brand btn-bold">
                <i class="la la-arrow-left"></i>&nbsp;
                Back To list
            </a>
        </div>
    </div>
@endsection

@section('subheader')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="{{ route('admin:teams.index') }}" class="kt-subheader__breadcrumbs-link">
        Team Members
    </a>
@endsection

@section('css')
{{--    @include('layout.tinymce')--}}
@endsection

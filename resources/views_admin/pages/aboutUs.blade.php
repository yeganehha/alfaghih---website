@extends('layout.main')
@section('title' , 'Setting' )
@section('content')

    <form action="{{ route('admin:about_us.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <i class="fa fa-edit"></i> About Us Page
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Title (En)</label>
                                        <input type="text" name="about_us[page][name][en]" value="{{ old('bout_us.page.name.en' , setting('bout_us.page.name.en') ) }}"
                                               class="form-control @if($errors->has('about_us.page.name.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Title (Ar)</label>
                                        <input type="text" dir="rtl" name="about_us[page][name][ar]" value="{{ old('bout_us.page.name.ar' , setting('bout_us.page.name.ar') ) }}"
                                               class="form-control @if($errors->has('about_us.page.name.ar')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Description (En)</label>
                                        <textarea rows="7" name="about_us[page][description][en]" class="form-control @if($errors->has('about_us.page.description.en')) is-invalid @endif">{{ old('bout_us.page.description.en' , setting('bout_us.page.description.en') ) }}</textarea>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Description (Ar)</label>
                                        <textarea rows="7" dir="rtl" name="about_us[page][description][ar]" class="form-control @if($errors->has('about_us.page.description.ar')) is-invalid @endif">{{ old('bout_us.page.description.ar' , setting('bout_us.page.description.ar') ) }}</textarea>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Image</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('about_us.page.image')) is-invalid @endif"
                                                   name="about_us[page][image]" value="{{ old('about_us.page.image' , setting('about_us.page.image') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('about_us.page.image' , false) )
                                            <img src="{{ setting('about_us.page.image') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Form-->
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <i class="fa fa-edit"></i> Home Page
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Title (En)</label>
                                        <input type="text" name="about_us[home][name][en]" value="{{ old('bout_us.home.name.en' , setting('bout_us.home.name.en') ) }}"
                                               class="form-control @if($errors->has('about_us.home.name.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Title (Ar)</label>
                                        <input type="text" dir="rtl" name="about_us[home][name][ar]" value="{{ old('bout_us.home.name.ar' , setting('bout_us.home.name.ar') ) }}"
                                               class="form-control @if($errors->has('about_us.home.name.ar')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Description (En)</label>
                                        <textarea rows="7" name="about_us[home][description][en]" class="form-control @if($errors->has('about_us.home.description.en')) is-invalid @endif">{{ old('bout_us.home.description.en' , setting('bout_us.home.description.en') ) }}</textarea>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Description (Ar)</label>
                                        <textarea rows="7" dir="rtl" name="about_us[home][description][ar]" class="form-control @if($errors->has('about_us.home.description.ar')) is-invalid @endif">{{ old('bout_us.home.description.ar' , setting('bout_us.home.description.ar') ) }}</textarea>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Image</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('about_us.home.image')) is-invalid @endif"
                                                   name="about_us[home][image]" value="{{ old('about_us.home.image' , setting('about_us.home.image') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('about_us.home.image' , false) )
                                            <img src="{{ setting('about_us.home.image') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success mt-5" value="Submit">
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>


        </div>

    </form>
@endsection


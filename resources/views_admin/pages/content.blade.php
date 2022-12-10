@extends('layout.main')
@section('title' , 'Setting' )
@section('content')

    <form action="{{ route('admin:content.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <i class="fa fa-edit"></i> Home Page Content
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Short Title (En)</label>
                                        <input type="text" name="content[short_title][en]" value="{{ old('content.short_title.en' , setting('content.short_title.en') ) }}"
                                               class="form-control @if($errors->has('content.short_title.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Short Title (Ar)</label>
                                        <input type="text" dir="rtl" name="content[short_title][ar]" value="{{ old('content.short_title.ar' , setting('content.short_title.ar') ) }}"
                                               class="form-control @if($errors->has('content.short_title.ar')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Title (En)</label>
                                        <input type="text" name="content[title][en]" value="{{ old('content.title.en' , setting('content.title.en') ) }}"
                                               class="form-control @if($errors->has('content.title.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Title (Ar)</label>
                                        <input type="text" dir="rtl" name="content[title][ar]" value="{{ old('content.title.ar' , setting('content.title.ar') ) }}"
                                               class="form-control @if($errors->has('content.title.ar')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Background Image</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.homepage')) is-invalid @endif"
                                                   name="content[image][homepage]" value="{{ old('content.image.homepage' , setting('content.image.homepage') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.homepage' , false) )
                                            <img src="{{ setting('content.image.homepage') }}" style="max-width: 100%;">
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
                                <i class="fa fa-edit"></i> Header image of pages
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">About us</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.about_us')) is-invalid @endif"
                                                   name="content[image][about_us]" value="{{ old('content.image.about_us' , setting('content.image.about_us') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.about_us' , false) )
                                            <img src="{{ setting('content.image.about_us') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Services</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.services')) is-invalid @endif"
                                                   name="content[image][services]" value="{{ old('content.image.services' , setting('content.image.services') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.services' , false) )
                                            <img src="{{ setting('content.image.services') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Our team</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.our_team')) is-invalid @endif"
                                                   name="content[image][our_team]" value="{{ old('content.image.our_team' , setting('content.image.our_team') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.our_team' , false) )
                                            <img src="{{ setting('content.image.our_team') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Client</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.client')) is-invalid @endif"
                                                   name="content[image][client]" value="{{ old('content.image.client' , setting('content.image.client') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.client' , false) )
                                            <img src="{{ setting('content.image.client') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Partner</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.partner')) is-invalid @endif"
                                                   name="content[image][partner]" value="{{ old('content.image.partner' , setting('content.image.partner') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.partner' , false) )
                                            <img src="{{ setting('content.image.partner') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">News</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.news')) is-invalid @endif"
                                                   name="content[image][news]" value="{{ old('content.image.news' , setting('content.image.news') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.news' , false) )
                                            <img src="{{ setting('content.image.news') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Contact us</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.contact_us')) is-invalid @endif"
                                                   name="content[image][contact_us]" value="{{ old('content.image.contact_us' , setting('content.image.contact_us') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.contact_us' , false) )
                                            <img src="{{ setting('content.image.contact_us') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Consultation</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('content.image.consultation')) is-invalid @endif"
                                                   name="content[image][consultation]" value="{{ old('content.image.consultation' , setting('content.image.consultation') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('content.image.consultation' , false) )
                                            <img src="{{ setting('content.image.consultation') }}" style="max-width: 100%;">
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


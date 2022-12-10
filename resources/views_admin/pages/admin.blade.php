@extends('layout.main')
@section('title' , $edit ? 'Edit '. $object->name : 'Add new Admin' )
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <i class="fa fa-edit"></i> {{ $edit ? 'Edit '. $object->name : 'Add new Admin' }}
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin::Section-->
            <div class="kt-section">
                <div class="kt-section__content">
                    <form action="{{ ! $edit ? route('admin:admins.store'): route('admin:admins.update' , [$object->id]) }}" method="POST">
                        @csrf
                        @if ( $edit )
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="Name" class="form-label">Name *</label>
                                <input type="text" name="name" class="form-control" id="name" required value="{{ old('name' , $object->name ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="Email" class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" id="Email" required value="{{ old('email' , $object->email ) }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="Username" class="form-label">Username *</label>
                                <input type="text" name="username" class="form-control" id="Username" required value="{{ old('username' , $object->username ) }}">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="passwordr" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="passwordr">
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
            <a href="{{route("admin:admins.index")}}" class="btn btn-brand btn-bold">
                <i class="la la-arrow-left"></i>&nbsp;
                Back To list
            </a>
        </div>
    </div>
@endsection

@section('subheader')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="{{ route('admin:admins.index') }}" class="kt-subheader__breadcrumbs-link">
         Admins
    </a>
@endsection

@extends('layout.main')
@section('title' , 'Comment of '.$comment->name )
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <i class="fa fa-email"></i> Comment of {{ $comment->name }}
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
                                <h2>Comment for : {{ $comment->commentable->name }}</h2>
                                @if( $comment->is_approved )
                                    <span class="ml-3 bg bg-success p-1 text-white">Approved</span>
                                @else
                                    <span class="ml-3 bg bg-warning p-1 text-white">Waiting for approved.</span>
                                @endif
                            </div>
                        </div>
                        <div class="kt-widget__subhead">
                            @if(  $comment->name )
                                <a href="#"><img src="{{ $comment->avatar }}" style="width: 50px; border-radius: 50%" class="mr-2">{{ $comment->name }}</a>
                            @endif
                            @if(  $comment->email )
                                <a href="mailto:{{ $comment->email }}"><i class="flaticon2-new-email"></i>{{ $comment->email }}</a>
                            @endif
                            @if(  $comment->mobile )
                                <a href="tel:{{ $comment->mobile }}"><i class="flaticon2-new-phone"></i>{{ $comment->mobile }}</a>
                            @endif
                            <a href="#"><i class="flaticon2-time"></i>{{ $comment->created_at }}</a>
                        </div>
                        <div class="kt-widget__info">
                            <div class="kt-widget__desc">
                                {!! nl2br(e($comment->comment)) !!}
                            </div>

                        </div>
                        <form action="{{ route('admin:comments.update' , $comment) }}" method="POST">
                            @csrf
                            @method("PUT")
                            @if( $comment->is_approved )
                                <input type="hidden" value="0" name="is_approved">
                                <input type="submit" value="Change Status to wait for approved!" class="btn btn-warning">
                            @else
                                <input type="hidden" value="1" name="is_approved">
                                <input type="submit" value="approved!" class="btn btn-success">
                                <a href="{{ route('admin:comments.index') }}" class="btn btn-warning">Do not change status!</a>
                            @endif
                        </form>
                        <form action="{{ route('admin:comments.destroy' , $comment) }}" method="POST">
                            @csrf
                            @method("delete")
                            <input type="submit" value="Delete Comment" class="btn btn-danger mt-2">
                        </form>
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
            <a href="{{route("admin:comments.index")}}" class="btn btn-brand btn-bold">
                <i class="la la-arrow-left"></i>&nbsp;
                Back To list
            </a>
        </div>
    </div>
@endsection

@section('subheader')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="{{ route('admin:comments.index') }}" class="kt-subheader__breadcrumbs-link">
        All comments
    </a>
@endsection

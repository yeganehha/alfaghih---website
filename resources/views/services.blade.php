@extends('layouts.app')
@section('title' , trans('our_services'))
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url({{ setting('content.image.services') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>{{ trans('our_services') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section>
            <div class="container">
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="feature-box f-boxed style-3 text-center">
                            <i class="id-color {{ $service->icon }}"></i>
                            <div class="text">
                                <h4>{{ $service->name }}</h4>
                                <p>{{ $service->description }}</p>
                            </div>
                            <i class="wm {{ $service->icon }}"></i>
                            <div class="spacer-single"></div>
{{--                            <a href="#" class="btn-custom btn-black">Read More</a>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection

@extends('layouts.app')
@section('content')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section aria-label="section" class="vh-100 no-padding text-light" data-bgimage="url({{ setting('content.image.homepage') }}) top" data-stellar-background-ratio=".2">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            @if( setting('content.short_title.'.app()->getLocale()) )
                            <h2 class="wow fadeInUp text-uppercase" data-wow-delay=".6s">{{ setting('content.short_title.'.app()->getLocale()) }}</h2>
                            @endif
                            @if( setting('content.title.'.app()->getLocale()) )
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{ setting('content.title.'.app()->getLocale()) }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section data-bgcolor="#f2f2f2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 offset-lg-7">
                        <h2>
                            {{ setting('about_us.home.name.'.app()->getLocale()) }}
                        </h2>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active">
                                <p>{{ setting('about_us.home.description.'.app()->getLocale()) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-container col-md-6 pull-right" data-bgimage="url({{ setting('about_us.home.image') }}) center"></div>
        </section>

        <section class="no-top">
            <div class="container mt80">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>{{ trans('our_services') }}</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                    @foreach($services as $service)
                    <div class="col-lg-6 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-rounded">
                            <i class="{{ $service->icon }} bg-color text-light"></i>
                            <div class="fb-text">
                                <h4>{{ $service->name }}</h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->

@endsection

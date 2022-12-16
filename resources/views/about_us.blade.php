@extends('layouts.app')
@section('title' , trans('about_us'))
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url({{ setting('content.image.about_us') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>{{ trans('about_us') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <h2>{{ setting('about_us.page.name.'.app()->getLocale()) }}</h2>
                        <p>{{ setting('about_us.page.description.'.app()->getLocale()) }}</p>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="de-images">
                            <img class="di-big img-fluid" src="{{ setting('about_us.page.image') }}" alt="{{ setting('about_us.page.name.'.app()->getLocale()) }}" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection

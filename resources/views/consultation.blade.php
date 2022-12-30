@extends('layouts.app')
@section('title' , trans('consultation'))
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url({{ setting('content.image.consultation') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>{{ trans('consultation') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-lg-2">
                        <h3>{{ trans('HasQuestion') }}</h3>
                        @livewire('client.contact', ['subject' => "consultation"] )
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection

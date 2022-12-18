@extends('layouts.app')
@section('title' , trans('contact_us'))
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url({{ setting('content.image.contact_us') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>{{ trans('contact_us') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <!-- section close -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>{{ trans('Address') }}</h3>
                        <address class="s1">
                            @if( setting('address.'.app()->getLocale()) )
                                <span><i class="my-color fa fa-map-marker fa-lg"></i> {{ setting('address.'.app()->getLocale()) }}</span>
                            @endif
                            @if( setting('phone') )
                                <span><i class="my-color fa fa-phone fa-lg"></i><a href="tel:{{ setting('Whats_app') }}" target="_blank">{{ setting('phone') }}</a></span>
                            @endif
                            @if( setting('Whats_app') )
                                <span><i class="my-color fa fa-whatsapp fa-lg"></i><a href="http://wa.me/{{ setting('Whats_app') }}" target="_blank">{{ setting('Whats_app') }}</a></span>
                            @endif
                            @if( setting('email') )
                                <span><i class="my-color fa fa-envelope fa-lg"></i><a href="mailto:{{ setting('email') }}" target="_blank">{{ setting('email') }}</a></span>
                            @endif
                        </address>
                    </div>
                    <div class="col-md-8">
                        <h3>{{ trans('HasQuestion') }}</h3>
                        @livewire('client.contact', ['subject' => "Contact us"] )
                    </div>
                </div>
            </div>
        </section>
        @if ( setting('location_lat') and setting('location_long') )
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-sm-30">
                        <h3>{{ trans('Location_Map') }}</h3>
                        <div id="map_contact_us" style="width: 100%;height: 350px;border-radius: 5px;"></div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </section>
        @endif
    </div>
    <!-- content close -->

@endsection

@section('js')
    @if ( setting('location_lat') and setting('location_long') )
    <script>
        var map2 = L.map('map_contact_us').setView([ {{ setting('location_lat') }} , {{ setting('location_long') }} ], 12.5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map2);
        L.marker([  {{ setting('location_lat') }} , {{ setting('location_long') }} ]).addTo(map2);
    </script>
    @endif
@endsection

@extends('layouts.app')
@section('title' , trans('clients'))
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url({{ setting('content.image.client') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>{{ trans('clients') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                @foreach($clients as $client)
                    @if( ! $loop->first)
                        <hr color="gray">
                    @endif
                <div class="row align-items-center">
                    <div class="col-md-3">
                        @if($client->website)
                            <a href="{{ $client->website }}" target="_blank">
                        @endif
                            <img class="di-big img-fluid" src="{{ $client->image }}" alt="{{ $client->name }}" />
                        @if($client->website)
                            </a>
                        @endif
                    </div>
                    <div class="col-md-8 offset-md-1">
                        <h4>
                            @if($client->website)
                                <a href="{{ $client->website }}" target="_blank">
                            @endif
                            {{ $client->name }}
                            @if($client->website)
                                </a>
                            @endif
                        </h4>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection

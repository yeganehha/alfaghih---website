@extends('layouts.app')
@section('title' , trans('partners'))
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url({{ setting('content.image.partner') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>{{ trans('partners') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                @foreach($partners as $partner)
                    @if( ! $loop->first)
                        <hr color="gray">
                    @endif
                <div class="row align-items-center">
                    <div class="col-md-3">
                        @if($partner->website)
                            <a href="{{ $partner->website }}" target="_blank">
                        @endif
                            <img class="di-big img-fluid" src="{{ $partner->image }}" alt="{{ $partner->name }}" />
                        @if($partner->website)
                            </a>
                        @endif
                    </div>
                    <div class="col-md-8 offset-md-1">
                        <h4>
                            @if($partner->website)
                                <a href="{{ $partner->website }}" target="_blank">
                            @endif
                            {{ $partner->name }}
                            @if($partner->website)
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

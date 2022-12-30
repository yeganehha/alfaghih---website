@extends('layouts.app')
@section('title' , trans('news_events'))
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url({{ setting('content.image.news') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>{{ trans('news_events') }}</h1>
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
                    @foreach($newspapers as $news)
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <a href="{{ route('news', $news->id) }}">
                                    <div class="date-box">
                                        <div class="m">{{ $news->created_at->format('d') }}</div>
                                        <div class="d">{{ $news->created_at->format('M') }}</div>
                                    </div>
                                    <div class="post-image">
                                        <img alt="{{ $news->name }}" src="{{ $news->image }}">
                                    </div>
                                    <div class="post-text">
    {{--                                    <span class="p-tagline">{{ $news->image }}</span>--}}
                                        <h4>{{ $news->name }}</h4>
                                        <p>{{ $news->truncate }}</p>
    {{--                                    <span class="p-author">Fynley Wilkinson</span>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="spacer-single"></div>

                    @if ($newspapers->hasPages())
                        <ul class="pagination">

                            @if ($newspapers->onFirstPage())
                                <li class="disabled"><a href="#">{{ trans('Previous') }}</a></li>
                            @else
                                <li><a href="{{ $newspapers->previousPageUrl() }}" rel="prev">{{ trans('Previous') }}</a></li>
                            @endif

                            @for ($i = 1 ; $i <= $newspapers->lastPage() ; $i++)
                                @if ($i == $newspapers->currentPage())
                                    <li class="active"><a href="#">{{ $i }}</a></li>
                                @else
                                    <li><a href="{{ $newspapers->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endfor

                            @if ($newspapers->hasMorePages())
                                <li><a href="{{ $newspapers->nextPageUrl() }}" rel="next">{{ trans('Next') }}</a></li>
                            @else
                                <li class="disabled"><a href="#">{{ trans('Next') }}</a></li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection

@extends('layouts.app')
@section('title' , $newspaper->name)
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
                            <h1>{{ $newspaper->name }}</h1>
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
                    <div class="col-md-8">
                        <div class="blog-read">
                            <img alt="{{ $newspaper->name }}" src="{{ $newspaper->image }}" class="img-fullwidth">
                            <div class="post-text">
                                <div>
                                    {!! $newspaper['content_'.app()->getLocale()] !!}
                                </div>
                                <span class="post-date">{{ $newspaper->created_at->format('F d,Y') }}</span>
                                <span class="post-comment">{{ $newspaper->comments->count() }}</span>
{{--                                <span class="post-like">181</span>--}}
                            </div>
                        </div>
                        <div class="spacer-single"></div>
                        <div id="blog-comment">
                            <h4>{{ trans('Comments') }} ({{ $newspaper->comments->count() }})</h4>
                            <div class="spacer-half"></div>
                            <ol>
                                @include('layouts.comment' , ['comments' => $newspaper->comments_parent])
                            </ol>
                            <div class="spacer-single"></div>
                            <div id="comment-form-wrapper">
                                <h4>{{ trans('Leave_Comment') }}</h4>
                                <div class="comment_form_holder">
                                    <form id="contact_form" name="form1" class="form-default" method="post" action="#">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" />
                                        <label>Email <span class="req">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control" />
                                        <div id="error_email" class="error">Please check your email</div>
                                        <label>Message <span class="req">*</span></label>
                                        <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                        <div id="error_message" class="error">Please check your message</div>
                                        <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                        <div id="mail_failed" class="error">Error, email not sent</div>
                                        <p id="btnsubmit">
                                            <input type="submit" id="send" value="Send" class="btn btn-custom" /></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar" class="col-md-4">
                        <div class="widget widget-post">
                            <h4>{{ trans('Recent_Posts') }}</h4>
                            <div class="small-border"></div>
                            <ul>
                                @foreach($resents as $resent)
                                    <li>
                                        <span class="date">{{ $resent->created_at->format('d M') }}</span>
                                        <a href="{{ route('news', $resent->id) }}">
                                            {{ $resent->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-text">
                            <h4>{{ trans('about_us') }}</h4>
                            <div class="small-border"></div>
                            {{ setting('about_us.page.description.'.app()->getLocale()) }}
                        </div>
                        @if( count($tags) > 0 )
                        <div class="widget widget_tags">
                            <h4>{{ trans('Tags') }}</h4>
                            <div class="small-border"></div>
                            <ul>
                                @foreach($tags as $tag)
                                <li><a href="{{ route('news_events',['tag' => $tag]) }}">{{ $tag }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection

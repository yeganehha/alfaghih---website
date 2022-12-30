@foreach($comments as $comment)
<li>
    <div class="avatar">
        <img src="{{ $comment->avatar}}" alt="{{ $comment->name}}" style="border-radius: 50%" /></div>
    <div class="comment-info">
        <span class="c_name">{{ $comment->name}}</span>
        <span class="c_date id-color">{{ $comment->created_at->format('d F Y') }}</span>
        <span class="c_reply"><a href="#contact_form" onclick="Livewire.emit('setParent', {{ $comment->id }})">{{ trans('Reply') }}</a></span>
        <div class="clearfix"></div>
    </div>
    <div class="comment">
        {!!  nl2br(e($comment->comment)) !!}
    </div>
    @if( $comment->childs->count() > 0)
    <ol>
        @include('layouts.comment' , ['comments' => $comment->childs])
    </ol>
    @endif
</li>
@endforeach

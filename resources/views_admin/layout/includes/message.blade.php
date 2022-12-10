@if($errors->any())
    <div class="alert alert-danger" role="alert">
        {!!  implode('', $errors->all(':message<br>')) !!}
    </div>
@endif

@if(session('alert-message'))
    @if(isset(session('alert-message')['error']))
        <div class="alert alert-danger" role="alert">
            @if(is_array(session('alert-message')['error']))
                @foreach ( session('alert-message')['error'] as $message)
                    {!! $message !!}<br>
                @endforeach
            @else
                {!! session('alert-message')['error'] !!}
            @endif
        </div>
    @endif
    @if(isset(session('alert-message')['warning']))
        <div class="alert alert-warning" role="alert">
            @if(is_array(session('alert-message')['warning']))
                @foreach( session('alert-message')['warning'] as $message)
                    {!! $message !!}<br>
                @endforeach
            @else
                {!! session('alert-message')['warning'] !!}
            @endif
        </div>
    @endif
    @if(isset(session('alert-message')['success']))
        <div class="alert alert-success" role="alert">
            @if(is_array(session('alert-message')['success']))
                @foreach( session('alert-message')['success'] as $message)
                    {!! $message !!}<br>
                @endforeach
            @else
                {!! session('alert-message')['success'] !!}
            @endif
        </div>
    @endif
    @if(isset(session('alert-message')['info']))
        <div class="alert alert-info" role="alert">
            @if(is_array(session('alert-message')['info']))
                @foreach( session('alert-message')['info'] as $message)
                    {!! $message !!}<br>
                @endforeach
            @else
                {!! session('alert-message')['info'] !!}
            @endif
        </div>
    @endif
    @if(isset(session('alert-message')['primary']))
        <div class="alert alert-primary" role="alert">
            @if(is_array(session('alert-message')['primary']))
                @foreach( session('alert-message')['primary'] as $message)
                    {!! $message !!}<br>
                @endforeach
            @else
                {!! session('alert-message')['primary'] !!}
            @endif
        </div>
    @endif

@endif

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $message)
        @if(Session::has($message))
            <div class="alert alert-{{ $message }} alert-block">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <strong>{{ Session::get($message) }}</strong>
            </div>
        @endif
    @endforeach
</div>

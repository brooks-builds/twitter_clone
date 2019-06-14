@extends('layouts.main')

@section('main')
    <h1>Add a Tweet</h1>

    <form action="/tweets" method="POST">
        @csrf
        <div>
            <label for='tweet-text'>What do you want to tweet (25 characters max)</label>
        </div>
        <div>
            <textarea maxlength="25" name="text" id="tweet-text"></textarea>
            @if ($errors->has('text'))
                @foreach ($errors->get('text') as $message)
                    <pre>{{ $message }}</pre>
                @endforeach
            @endif
        </div>
        <div>
            <button>Add Tweet</button>
        </div>
    </form>
@endsection
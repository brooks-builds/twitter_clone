@extends('layouts.main')

@section('main')
    <h1>{{ $tweet->text }}</h1>
    @if (Auth::id() == $tweet->user->id)
        <a href="/tweets/{{ $tweet->id }}/edit">edit tweet</a>
        <form action="/tweets/{{ $tweet->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Tweet</button>
        </form>
    @endif

    <form action="/comments?tweetid={{ $tweet->id }}" method="POST">
        @csrf
        <label for="comment">Add Comment</label>
        <input type="text" maxlength="25" name="text" id="comment">
        <button>Add Comment</button>
        @error('text')
            <div>{{ $message }}</div>
        @enderror
    </form>

    @foreach ($tweet->comments as $comment)
        <div>
            <hr>
            <p>-- {{ $comment->user->name }} --</p>
            <p>{{ $comment->text }}</p>
            <hr>
        </div>
    @endforeach
@endsection
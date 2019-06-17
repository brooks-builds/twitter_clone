@extends('layouts.main')

@section('main')
    <h1>{{ $tweet->text }}</h1>

    @foreach ($tweet->comments as $comment)
        <div>
            <hr>
            <p>-- {{ $comment->user->name }} --</p>
            <p>{{ $comment->text }}</p>
            <hr>
        </div>
    @endforeach
@endsection
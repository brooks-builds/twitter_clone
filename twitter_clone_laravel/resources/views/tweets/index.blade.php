@extends('layouts.main')

@section('main')
    <h1>Tweets</h1>
    <main>
        @foreach ($tweets as $tweet)
            <section>
                <hr>
                <header>{{ $tweet->name }}</header>
                <div>{{ $tweet->text }}</div>
                <hr>
            </section>
        @endforeach
    </main>
@endsection
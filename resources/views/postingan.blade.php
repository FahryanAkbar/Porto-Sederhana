{{-- @dd($view); --}}
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $view['title'] }}</h2>
        <h5>{{ $view['author'] }}</h5>
        <p>{{ $view['body'] }}</p>
    </article>
    
    <a href="/post">back to post</a>
@endsection
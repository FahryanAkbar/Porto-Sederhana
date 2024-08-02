@extends('layouts.main')
    
@section('container')
    @foreach ($posts as $item)
        <article class ="mb-5">
            <h2>
                <a href="/post/ {{ $item ['slug'] }}">{{ $item['title'] }}</a>
             </h2>
             <h5>{{ $item['author'] }}</h5>
             <p>{{ $item['body'] }}</p>
        </article>
    @endforeach
@endsection

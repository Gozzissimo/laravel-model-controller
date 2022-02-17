@extends('layouts.base')

@section('content')
<ul>
    @foreach ($movies as $movie)
    <li>
        <h2>{{ $movie['title'] }}</h2>
        <h3>{{ $movie['original_title'] }}</h3>
        <div>{{ $movie['vote'] }}</div>
    </li>
    @endforeach
</ul>
@endsection
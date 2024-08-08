@extends('nestonesto.public')
 
@section('title', $blog['title'])
 
@section('content')
    <h1>{{ $blog['title'] }}</h1>
    <p>{{ $blog['short_intro'] }}</p>
    <img src="{{ $blog['photo'] }}" 
class="img-thumbnail" style="width:60%">
    <div>
		{!! $blog['content'] !!}
    </div>
    <a href="{{ route("home") }}" class="btn btn-link">Nazad</a>
@endsection

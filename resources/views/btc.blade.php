@extends('parts.main')
@section('title', 'Home')
@section('content')
    <h1 class="page-title"><a style="color: #f2a900;"><i class="fab fa-bitcoin"></i></a> ${{$btc}}</h1>
    <p class="page-title">Updated: {{$date}}</p>
@endsection
@extends('parts.main')
@section('title', 'Home')
@section('nav.home', 'active')

@section('content')

@include('parts.naven')
<div class="info">
    <div class="about-text">
        <h1 class="header-text">Hi! I'm Daneric</h1>
        <h3 class="info-text">HTML, CSS & JavaScript Developer</h3>
    </div>
    <img class="image-about" src="../images/logo.png">
</div>
@endsection
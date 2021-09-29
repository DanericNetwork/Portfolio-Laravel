@extends('parts.main')
@section('title', 'Portfolio')
@section('content')
@section('nav.home', 'active')

@include('parts.navnl')

    <div class="info">
        <div class="about-text">
            <h1 class="header-text">Hey! Ik ben Daneric</h1>
            <h3 class="info-text">HTML, CSS & JavaScript Developer</h3>
        </div>
        <img class="image-about" src="../images/logo.png">
    </div>
<div class="card">
    <a href="https://doei.nl" class="btn btn-primary">doei</a>
</div>
@endsection
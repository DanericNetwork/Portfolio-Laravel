@extends('parts.main')
@section('title', 'Home')
@section('nav.about', 'active')

@section('content')

@include('parts.naven')
<!-- Content section -->
<h1 class="page-title">About me</h1>

<div class="about">
    <p class="text-about">My name is Daneric Aalbers. I am a 17 year old boy from the Netherlands who lives in Dedemsvaart. Currently I'm studying Software Developer at Landstede in Zwolle.</p>
    <img class="image-about" src="../images/logo.png">
</div>
@endsection
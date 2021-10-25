@extends('parts.main')
@section('title', 'Portfolio')
@section('content')
@section('nav.about', 'active')

@include('parts.navnl')
<h1 class="page-title">Over mij</h1>

    <div class="about">
        <p class="text-about">Ik ben Daneric, 17 jaar en op dit moment studeer ik in Zwolle op de opleiding Software Developer. In mijn vrije tijd werk ik graag aan discord bots en websites.</p>
        <img class="image-about" src="../images/logo.png">
    </div>
@endsection
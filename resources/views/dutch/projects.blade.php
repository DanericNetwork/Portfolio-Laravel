@extends('parts.main')
@section('title', 'Projects')
@section('content')
@section('nav.projects', 'active')

@include('parts.navnl')

<div class="projects-container">
    <div class="project">

        <div class="project-text">

            <a class="project-title" href="https://disbots.net/bot/funkie">Funkie</a>
            <h3 class="project-desc">Uitgebracht op 18th Maart 2021.</h3>
            <p class="project-description">Funkie is een multipurpose Discord bot met meer dan 110 servers</p>

        </div>

        <div class="about-me image wow">

            <img class="right-picture" style="border-radius: 10px;" width="500" src="https://cdn.discordapp.com/banners/563366877028679691/401b24e308a076c5dbb124c4a5d1dfb4.jpg?size=512" alt="Daneric">

        </div>
    </div>


    <hr class="line">


    <div class="project">

        <div class="project-text">

            <a class="project-title" href="https://mojimind.nl">MojiMind</a>
            <h3 class="project-desc">Uitgebracht 3 December 2021.</h3>
            <p class="project-description">Mojimind is een herimplementatie van het klassieke spelletje mastermind, dit project heb ik samen met een klasgenoot gemaakt.</p>

        </div>

        <div class="about-me image wow">

            <img class="right-picture" style="border-radius: 10px;" width="500" src="https://cdn.my-project.nl/cdn/24aaf11fed61be9b" alt="Daneric">

        </div>
    </div>
 </div>

@endsection

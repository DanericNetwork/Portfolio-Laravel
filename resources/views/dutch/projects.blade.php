@extends('parts.main')
@section('title', 'Projects')
@section('content')
@section('nav.projects', 'active')

@include('parts.navnl')

<div class="projects-container">
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

    <hr class="line">

    <div class="project">

        <div class="project-text">

            <a class="project-title" href="https://cdn.my-project.nl">ShareX Uploader</a>
            <h3 class="project-desc">Uitgebracht op 16 Maart 2022.</h3>
            <p class="project-description">Dit is een image uploader voor het screenshot programma ShareX, ik heb dit project gemaakt in Javascript met ExpressJS.</p>

        </div>

        <div class="about-me image wow">

            <img class="right-picture" style="border-radius: 10px;" width="500" src="https://cdn.my-project.nl/cdn/1f3c719723e10893" alt="Daneric">

        </div>
    </div>

    <hr class="line">

    <div class="project">

        <div class="project-text">

            <a class="project-title" href="https://dsc.best/bot/funkie">Funkie</a>
            <h3 class="project-desc">Uitgebracht op 18th Maart 2021.</h3>
            <p class="project-description">Funkie is een multipurpose Discord bot met meer dan 110 servers</p>

        </div>

        <div class="about-me image wow">

            <img class="right-picture" style="border-radius: 10px;" width="500" src="https://cdn.discordapp.com/banners/563366877028679691/401b24e308a076c5dbb124c4a5d1dfb4.jpg?size=512" alt="Daneric">

        </div>
    </div>




 </div>

@endsection

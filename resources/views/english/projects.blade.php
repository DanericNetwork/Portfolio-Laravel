@extends('parts.main')
@section('title', 'Projects')
@section('content')
@section('nav.projects', 'active')

@include('parts.naven')

<div class="projects-container">
    <div class="project">

        <div class="project-text">

            <a class="project-title" href="https://cdn.my-project.nl">ShareX Uploader</a>
            <h3 class="project-desc">Released 16th March 2022.</h3>
            <p class="project-description">This is an image uploader for a screenshot application called ShareX, I made this project with Javascript and ExpressJS.</p>

        </div>

        <div class="about-me image wow">

            <img class="right-picture" style="border-radius: 10px;" width="500" src="https://cdn.my-project.nl/cdn/1f3c719723e10893" alt="Daneric">

        </div>
    </div>

    <hr class="line">

    <div class="project">

        <div class="project-text">

            <a class="project-title" href="https://dsc.best/bot/funkie">Funkie</a>
            <h3 class="project-desc">Launched 18th March 2021.</h3>
            <p class="project-description">Funkie is a multipurpose Discord bot trusted by 110+ servers</p>

        </div>

        <div class="about-me image wow">

            <img class="right-picture" style="border-radius: 10px;" width="500" src="https://cdn.discordapp.com/banners/563366877028679691/401b24e308a076c5dbb124c4a5d1dfb4.jpg?size=512" alt="Daneric">

        </div>
    </div>
 </div>

@endsection

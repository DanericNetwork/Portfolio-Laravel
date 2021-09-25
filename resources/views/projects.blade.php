@extends('parts.main')
@section('title', 'Projects')
@section('content')
    <nav>
        <ul class="navtop">
            <li><a class="navbar-brand"><img src="https://daneric.dev/images/Logo.png" class="imgnav"><span class="navbar-brand-name">Daneric Aalbers</span></a></li>
        </ul>
    </nav>
    <nav>
        <ul class="topnav">
            <li><a class="nav-btn" href="/">Home</a></li>
            <li><a class="nav-btn" href="/about">Over mij</a></li>
            <li><a class="nav-btn active" href="/projects">Projecten</a></li>
            <ul class="socials">
                <li class="social-icons">
                    <a class="center" href="https://twitter.com/danericnetwork" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <!-- <li class="social-icons">
                    <a class="center" href="https://discord.gg/vX2DCW6" target="_blank"><i class="fab fa-discord"></i></a>
                </li> -->
                <li class="social-icons">
                    <a class="center" href="https://github.com/danericnetwork" target="_blank"><i class="fab fa-github"></i></a>
                </li>
            </ul>
        </ul>
    </nav>

<div class="projects-container">
    <div class="project">

        <div class="col-6 project-text">

            <a class="project-title" style="color: #34c0eb !important;" href="https://disbots.net/bot/funkie">Funkie</a>
            <h3 class="project-desc">Uitgebracht op 18th March 2021.</h3>
            <p class="project-description">Funkie is een multipurpose Discord bot met meer dan 110 servers</p>

        </div>

        <div class="about-me image wow">

            <img class="right-picture wow skeleton" style="border-radius: 10px;" width="500" src="https://cdn.discordapp.com/banners/563366877028679691/401b24e308a076c5dbb124c4a5d1dfb4.jpg?size=512" alt="Daneric">

        </div>

    </div>
 </div>

@endsection
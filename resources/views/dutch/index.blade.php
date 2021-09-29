@extends('parts.main')
@section('title', 'Portfolio')
@section('content')
    <nav>
        <ul class="navtop">
            <li><a class="navbar-brand"><img src="../images/logo.png" class="imgnav"><span class="navbar-brand-name">Daneric Aalbers</span></a></li>
        </ul>
    </nav>
    <nav>
        <ul class="topnav">
            <li><a class="nav-btn active" href="/nl/">Home</a></li>
            <li><a class="nav-btn" href="/nl/about">Over mij</a></li>
            <li><a class="nav-btn" href="/nl/projects">Projecten</a></li>
            <ul class="socials">
                <li class="social-icons">
                    <a href="/en/">
                        <img class="center language-btn" src="../images/english.png"></img>
                    </a>
                </li>
                <li class="social-icons">
                    <a class="center" href="https://linkedin.com/in/daneric-aalbers-b75801216" target="_blank"><i class="fab fa-linkedin"></i></a>
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
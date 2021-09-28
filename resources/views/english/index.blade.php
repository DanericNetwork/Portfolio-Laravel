@extends('parts.main')
@section('title', 'Home')
@section('content')
<nav>
    <ul class="navtop">
        <li><a class="navbar-brand"><img src="https://daneric.dev/images/Logo.png" class="imgnav"><span class="navbar-brand-name">Daneric Aalbers</span></a></li>
    </ul>
</nav>
<nav>
    <ul class="topnav">
        <li><a class="nav-btn active" href="/en/">Home</a></li>
        <li><a class="nav-btn" href="/en/about">About me</a></li>
        <li><a class="nav-btn" href="/en/projects">Projects</a></li>
        <ul class="socials">
            <li class="social-icons">
                <a href="/nl/">
                    <img class="center language-btn" src="../images/dutch.png"></img>
                </a>
            </li>
            <li class="social-icons">
                <a class="center" href="https://twitter.com/danericnetwork" target="_blank"><i class="fab fa-linkedin"></i></a>
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
@endsection
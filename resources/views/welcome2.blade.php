@extends('parts.main')
<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Portfolio')
    <link rel="shortcut icon" type="image/jpg" href="../images/logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <!-- begin of metadata -->
    <meta property="og:title" content="Daneric">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/">
    <meta property="og:image" content="../images/logo.png">
    <meta property="og:description" content="Daneric's Portfolio">
    <meta name="theme-color" content="#0362fc">
    <!-- end of metadata -->
</head>
<body>
    <nav>
        <ul class="navtop">
            <li><a class="navbar-brand"><img src="../images/logo.png" class="imgnav"><span class="navbar-brand-name">Daneric Aalbers</span></a></li>
        </ul>
    </nav>
    <nav>
        <ul class="topnav">
            <li><a class="nav-btn active" href="/">Home</a></li>
            <li><a class="nav-btn" href="/about">Over mij</a></li>
            <li><a class="nav-btn" href="/projects">Projecten</a></li>
            <ul class="socials">
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
            <h1 class="header-text">Daneric</h1>
            <h3 class="info-text">HTML, CSS & JavaScript Developer</h3>
        </div>
        <img class="image-about" src="../images/logo.png">
    </div>
<div class="card">
    <a href="https://doei.nl" class="btn btn-primary">doei</a>
</div>
</body>
</html>
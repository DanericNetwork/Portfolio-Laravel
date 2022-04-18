<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Daneric - @yield('title')</title>
    <link rel="stylesheet" href="./css/app.css"/>
    <link rel="stylesheet" href="./css/extra.css"/>
    <script src="/js/front.js"></script>
    <meta property="og:title" content="Daneric" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta property="og:image" content="{{$settings['image']}}" />
    <meta property="og:description" content="My portfolio website" />
    <meta name="theme-color" content="#65A30D">
</head>
<body class="bg-white text-lime-600">
@yield('content')
</body>
</html>
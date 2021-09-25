<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/errors.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

    <div>
        <div class="error-page">
            <h1 class="error-code">@yield('code')</h1>
            <p class="error-message">@yield('message')</p>
            <a class="btn btn-primary" href="/">Go to Homepage</a>
    </div>
    </body>
</html>

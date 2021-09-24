<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css" rel="stylesheet">
    <title>ROOWWWWWWWWWWW</title>
</head>
<body>
    <h1>Row</h1>
<div class="numcontainer">
    @for($werkdag);
    <div class="numcard">
        {{day($werkdag)}}
    </div>
    @endfor    
</div>
</body>
</html>
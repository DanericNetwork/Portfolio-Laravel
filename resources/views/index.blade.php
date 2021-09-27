@extends('parts.main')
@section('title', 'Home')
@section('content')
<div class="langg">
    <div>
        <h1 class="select-lang">Select your language</h1>
    </div>
        <div class="lang-btns">
            <a href="/nl/" class="btn btn-language">Dutch</a>
            <a href="/en/" class="btn btn-language">English</a>
        </div>  
</div>
<!-- <img style="width: 80%; display: flex; margin: auto; height: 333px;" src="https://image.shutterstock.com/image-photo/mature-man-using-computer-drinking-260nw-119815924.jpg"></img>
<h1>credits naar <a style="color: tomato;" href="https://twitter.com/mawmet">tim</a> voor het geweldige plaatje</h1> -->
@endsection
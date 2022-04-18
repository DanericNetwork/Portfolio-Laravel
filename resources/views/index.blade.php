@extends('parts.main')
@section('title', 'Home')
@section('content')
<div class="fixed top-0 z-10 w-full mt-0 bg-white">
    <div class="flex w-full p-5">
        <div class="float-left w-1/3 text-center">
            <a href="javascript:void(0);" onclick="scrollToTop()" class="text-4xl font-medium">{{$head}}</a>
        </div>
        <div class="flex items-center justify-end w-2/3 text-right">
            <a href="javascript:void(0);" onclick="scrollToHighlight()" class="mx-3 text-xl font-medium">Highlight work</a>
            <a href="javascript:void(0);" onclick="scrollToProjects()" class="mx-3 text-xl font-medium">Personal Projects</a>
            <a href="javascript:void(0);" onclick="scrollToAbout()" class="mx-3 text-xl font-medium">About me</a>
        </div>
    </div>
</div>
<div class="flex flex-col items-center justify-center w-full font-medium pt-[350px] pb-[450px]" style="background-image: linear-gradient(176deg, #fff 80%, #1E293B calc(80% + 2px))">
    <div class="flex flex-col justify-center w-4/6">
        <h1 class="text-5xl text-left">Hey, I am {{$name}}</h1>
        <h1 class="text-5xl text-left">A software developer</h1>
    </div>
</div>
@endsection
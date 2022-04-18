@extends('parts.main')
@section('title', 'Home')
@section('content')
<div class="fixed top-0 z-10 w-full mt-0 bg-white">
    <div class="flex w-full p-5">
        <div class="float-left w-1/3 text-center">
            <a href="javascript:void(0);" onclick="scrollToTop()" class="text-4xl font-medium">{{$settings['head']}}</a>
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
        <h1 class="text-5xl text-left">Hey, I am {{$settings['name']}}</h1>
        <h1 class="text-5xl text-left">A software developer</h1>
    </div>
</div>
<div class="flex flex-col bg-slate-800" id="highlight">
    <div class="flex flex-col items-center justify-center w-full mt-20">
        <h1 class="text-5xl font-medium text-center uppercase">Highlight Work</h1>
        <hr class="flex items-center justify-center w-1/12 my-2 border-b-4 border-lime-600">
    </div>

    <div class="flex flex-row justify-center mt-10">
        <div class="flex flex-row justify-around w-10/12">
            <div class="w-5/12 p-1">
                <div class="flex flex-col items-center justify-center w-full">
                    <div class="relative">
                        <img src="{{$highlight1['image']}}" alt="{{$highlight1['name']}}" class="w-full shadow-sm shadow-slate-500">
                        <div class="absolute bottom-0 left-0 w-full p-2 -mt-16 leading-4 bg-gray-800 border-t-2 bg-opacity-90 border-lime-500">
                            <div class="flex flex-row w-full">
                                <div class="float-left w-1/2">
                                    <a href="{{$highlight1['link']}}" class="text-xl font-medium transition hover:text-lime-400">{{$highlight1['name']}}</a>
                                </div>
                                <div class="flex items-center justify-end w-1/2 text-right">
                                    <h1 class="flex float-right font-medium text-right text-md">{{$highlight1['tools']}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="w-5/12 p-1 mt-20 mb-20">
                <div class="flex flex-col items-center justify-center w-full">
                    <div class="relative">
                        <img src="{{$highlight2['image']}}" alt="{{$highlight2['name']}}" class="w-full shadow-sm shadow-slate-500">
                        <div class="absolute bottom-0 left-0 w-full p-2 -mt-16 leading-4 bg-gray-800 border-t-2 bg-opacity-90 border-lime-500">
                            <div class="flex flex-row w-full">
                                <div class="float-left w-1/2">
                                    <a href="{{$highlight2['link']}}" class="text-xl font-medium transition hover:text-lime-400">{{$highlight2['name']}}</a>
                                </div>
                                <div class="flex items-center justify-end w-1/2 text-right">
                                    <h1 class="flex float-right font-medium text-right text-md">{{$highlight2['tools']}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>

    <div class="flex flex-col items-center justify-center w-full mt-64" id="projects">
        <h1 class="text-5xl font-medium text-center uppercase">Personal Projects</h1>
        <hr class="flex items-center justify-center w-1/12 my-2 border-b-4 border-lime-600">
    </div>

    <div class="flex justify-center mt-10">
        <div class="flex flex-row flex-wrap justify-around w-10/12">
            @foreach ($projects as $project)
                <div class="w-5/12 p-1 m-5">
                    <div class="flex flex-col items-center justify-center w-full">
                        <div class="relative">
                            <img src="{{$project['image']}}" alt="{{$project['name']}}" class="w-full shadow-sm shadow-slate-500">
                            <div class="absolute bottom-0 left-0 w-full p-2 -mt-16 leading-4 bg-gray-800 border-t-2 bg-opacity-90 border-lime-500">
                                <div class="flex flex-row w-full">
                                    <div class="float-left w-1/2">
                                        <a href="{{$project['link']}}" class="text-xl font-medium transition hover:text-lime-400">{{$project['name']}}</a>
                                    </div>
                                    <div class="flex items-center justify-end w-1/2 text-right">
                                        <h1 class="flex float-right font-medium text-right text-md">{{$project['tools']}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-col items-center justify-center w-full mt-64" id="about">
        <h1 class="text-5xl font-medium text-center uppercase">About Me</h1>
        <hr class="flex items-center justify-center w-1/12 my-2 border-b-4 border-lime-600">
    </div>
    
    <div class="flex flex-row justify-center my-10 mb-52">
        <div class="flex flex-row justify-around w-10/12">
            <div class="flex justify-center w-1/2">
                <img src="{{$settings['image']}}" alt="Image" class="w-7/12 rounded-md">
            </div>
            <div class="w-1/2">
                <p class="text-xl break-words">{{$settings['description']}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
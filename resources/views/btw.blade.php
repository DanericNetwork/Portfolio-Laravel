@extends('parts.main')
@section('title', 'Btw in je anuskananus')
@section('content')
<h1>this do be da form</h1>
<form method="POST">
    @csrf
    <div>
        @isset($btw)
            <p>Bedrag</p>
            <input class="sick" type="number" name="bedrag" placeholder="Bedrag" value="{{$bedrag}}" id="anderding">
            <p>BTW</p>
            <input class="sick" type="number" name="btw" placeholder="BTW" value="{{$btw}}" id="anderding2">
        @else
            <p>Bedrag</p>
            <input class="sick" type="number" name="bedrag" placeholder="Bedrag" value="9.99" id="anderding">
            <p>BTW</p>
            <input class="sick" type="number" name="btw" placeholder="BTW" value="21" id="anderding2">
        @endisset
    </div>
    <input class="button" type="submit" value="Save">
    @isset($uit)
    <p>Eind Bedrag</p>
    {{$uit}}
    <p>Btw</p>
    {{$btwbedrag}}
    @endisset
        <!-- @isset($tafels)
        <h1>Tafels van {{$tafels}}</h1>
            @for ($i = 1; $i <= 10; $i++)
                <br>{{$i}} X {{$tafels}} = {{$i * $tafels}}
            @endfor
        @endisset -->
</form>
@endsection
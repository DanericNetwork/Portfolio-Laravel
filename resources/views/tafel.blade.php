@extends('parts.main')
@section('title', 'Tafel in je reet')
@section('content')
<h1>this do be da form</h1>
<form method="POST">
    @csrf
    <select name="ding" id="anderding">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <input class="button" type="submit" value="Save">
        @isset($tafels)
        <br>1 X {{$tafels}} = {{$tafels * 1}}<br>
            2 X {{$tafels}} = {{$tafels * 2}}<br>
            3 X {{$tafels}} = {{$tafels * 3}}<br>
            4 X {{$tafels}} = {{$tafels * 4}}<br>
            5 X {{$tafels}} = {{$tafels * 5}}<br>
            6 X {{$tafels}} = {{$tafels * 6}}<br>
            7 X {{$tafels}} = {{$tafels * 7}}<br>
            8 X {{$tafels}} = {{$tafels * 8}}<br>
            9 X {{$tafels}} = {{$tafels * 9}}<br>
            10 X {{$tafels}} = {{$tafels * 10}}<br>
        @endisset

</form>
@endsection
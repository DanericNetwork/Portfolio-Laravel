@extends('parts.main')
@section('title', 'Form')
@section('content')
<h1>this do be da form</h1>
<form method="POST">
    @csrf
    <input class="sick" type="text" name="name" placeholder="yez plz yur name">
    <input type="submit" value="Save">
</form>
@endsection
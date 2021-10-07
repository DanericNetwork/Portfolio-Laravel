@extends('parts.main')
@section('title', 'Home')
@section('content')
    <h1 class="page-title"><a style="color: #f2a900;"><i class="fab fa-bitcoin"></i></a> <p id="price">$</p></h1>
    <p class="page-title" id="updated-date">Updated: {{$date}}</p>
    <script>
        const updatePrice = () => {
        var price = document.getElementById("price");
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'https://api.coindesk.com/v1/bpi/currentprice.json', true);
        xhr.onload = function () {
            if (this.status == 200) {
                var data = JSON.parse(this.responseText);
                price.innerHTML = data.bpi.USD.rate;
            }
        };
        xhr.send();}
        updatePrice();
        setInterval(updatePrice, 1000);
    </script>
@endsection
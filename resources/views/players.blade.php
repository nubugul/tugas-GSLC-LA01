@extends('layouts.playersLayout')
@section('content')
    <div class="page">
        <h1 classs="black">Halaman Player List</h1>
    </div>
    @foreach($players as $player)
    <div class="card">
        <div class="card-container">
            <div class="card-image">
                <img src="img/{{ $player["image"] }}" alt="profile" class="profile">
            </div>
            <div class="desc">
                <h5 class="black"> Name      : {{ $player["name"] }}</h5>
                <h5 class="black">Position   : {{ $player["position"] }}</h5>
                <h5 class="black">Nationality: {{ $player["nationality"] }}</h5>
            </div>
        </div>
    </div>
    @endforeach
       
@endsection


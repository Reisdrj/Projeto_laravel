@extends('layouts.pagemodel')


@section('content')


    <div id="show-container" class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/eventos.jpg" alt="{{$event->Name}}" class="img-fluid">
            </div>
            <div id="details-container" class="col-md-6">
                <h1>{{ $event->Name }}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->City }}</p>
                <p><ion-icon name="people-outline"></ion-icon>x Pessoas</p>
                <p class="event-theme"><ion-icon name="megaphone-outline"></ion-icon> Tema do evento</p>
                <a href="#" class="btn btn-secondary">Inscrever-se</a>
            </div>
        </div>
    </div>


@endsection
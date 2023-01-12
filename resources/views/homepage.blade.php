@extends('layouts.pagemodel')


@section('content')

    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Fique por dentro dos próximos eventos!</p>
        <div id="card-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/eventos.jpg" alt="{{$event->Name}}">
                    <div class="card-body">
                        <p class="card-date">22</p>
                        <div class="card-title row">
                            <h5 class="card-title-name">{{ $event->Name }} - </h5> 
                            <h5 class="card-title-city">{{ $event->City }}</h5>
                        </div>
                        <p class="card-participants"> x participantes</p>
                        <a href="#" class="btn btn-secondary">Saiba mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection



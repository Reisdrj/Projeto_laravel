@extends('layouts.pagemodel')

@section('content')

    <br>

    <div class="mx-auto d-flex p-2 bd-highlight" style="width: 50%">
        <table class="table table-bordered table-responsive-sm align-self-center">
            <thead>
                <tr>
                <th scope="col">Event</th>
                <th scope="col">City</th>
                <th scope="col">Private</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $item)
                <tr>
                    <td>{{$item->Name}}</td>
                    <td>{{$item->City}}</td>
                    @if($item->Private == 1)
                        <td>{{'Sim'}}</td>
                    @else
                        <td>{{'Não'}}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col py-3 px-md-5">
        <a href="/create_event">
            <button typr="button" class="btn btn-dark btn-sm">
                <div class="h-5 d-inline-block" style="h" ><img src="/img/pen.png"></div>Create Event</button>
        </a>
    </div>

    <br>

@endsection
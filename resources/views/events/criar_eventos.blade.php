@extends('layouts.pagemodel')


@section('content')
    <div id="event-creat-container" class="col-md-6 offset-md-3">
        <h1 class="text-center main-title">Crie seu evento</h1>
            <form action="/events" method="POST">
            @csrf
                <div class="form-group">
                    <label for="Name">Evento</label>
                    <input type="text" class="form-control" name="Name" placeholder="Insira o nome do evento">
                </div>
                <div class="form-group">
                    <label for="Description">Descrição</label>
                    <input type="text" class="form-control" name="Description" placeholder="Descreva o evento">
                </div>
                <div class="form-group">
                    <label for="Date">Data do vento: </label>
                    <input type="date" class="form-control" name="Date">
                </div>
                <div class="form-group">
                    <label for="City">Cidade</label>
                    <input type="text" class="form-control" name="City" placeholder="Insira onde ocorrerá o evento">
                </div>
                <div class="form-group">
                    <label for="Private">Privado</label>
                    <select name="Private" id="Private" class="form-control ls-select" style="width: 15%">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-secondary" value="Criar evento">
            </form>
    </div>
@endsection

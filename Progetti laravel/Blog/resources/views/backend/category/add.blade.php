@extends('backend.master.layout')

@section('title') Aggiunta Categoria @endsection

@section('breadcrumb') Categorie > Aggiunta @endsection

@section('content')
    <p>Usa il form di seguito per aggiungere una nuova categoria.</p>

    @if(count($errors->all()) > 0)
        <div class="alert alert-danger" role="alert">
            <p><b>Attenzione!</b></p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token }}"/>

        <p>
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name"/>
        </p>

        <p>
            <label for="description">Descrizioni:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                      placeholder="Spiega che articoli ci saranno qui..."></textarea>
        </p>


        <hr/>

        <p>
            <button class="btn btn-success form-control">Aggiungi Categoria</button>
        </p>
    </form>
@endsection
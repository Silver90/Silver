@extends('backend.master.layout')

@section('title') Aggiunta utente @endsection

@section('breadcrumb') Utenti > Aggiunta @endsection

@section('content')
    <p>Usa il form di seguito per aggiungere un nuovo utente.</p>

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
            <label for="first_name">Nome:</label>
            <input type="text" class="form-control" name="first_name" id="first_name"/>
        </p>

        <p>
            <label for="first_name">Cognome:</label>
            <input type="text" class="form-control" name="last_name" id="last_name"/>
        </p>

        <p>
            <label for="first_name">Indirizzo Email:</label>
            <input type="text" class="form-control" name="email" id="email"/>
        </p>

        <p>
            <label for="first_name">Password:</label>
            <input type="password" class="form-control" name="password" id="password"/>
        </p>

        <hr/>

        <p>
            <button class="btn btn-success form-control">Aggiungi Utente</button>
        </p>
    </form>
@endsection
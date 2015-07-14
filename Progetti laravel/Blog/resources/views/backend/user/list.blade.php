@extends('backend.master.layout')

@section('title') Elenco Utenti @endsection

@section('breadcrumb') Utenti > Elenco @endsection

@section('content')
    <p>Di seguito, l'elenco degli utenti abilitati attualmente.</p>

    <table class="table table-striped">
        <thead>
        <td><b>Nome</b></td>
        <td><b>Cognome</b></td>
        <td><b>Email</b></td>
        <td><b>Data di Aggiunta</b></td>
        <td><b>Operazioni</b></td>
        </thead>

        @foreach($users as $user)

            <tr>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
                <td>
                    <a class="btn btn-danger" href="{{ url('backend/users/delete/' . $user->id) }}"
                       onclick="return confirm('Sicuro di voler cancellare questo utente?')">Cancella</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $users->render() }}
@endsection
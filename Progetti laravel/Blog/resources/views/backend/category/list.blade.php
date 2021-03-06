@extends('backend.master.layout')

@section('title') Elenco Categorie @endsection

@section('breadcrumb') Categorie > Elenco @endsection

@section('content')
    <p>Di seguito, l'elenco delle categorie presenti attualmente.</p>

    <table class="table table-striped">
        <thead>
        <td><b>Nome</b></td>
        <td><b>Totale articoli</b></td>
        <td><b>Data di aggiunta</b></td>
        <td><b>Operazioni</b></td>
        </thead>

        @foreach($categories as $category)

            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->articles()->count() }}</td>
                <td>{{ date('d/m/Y H:i', strtotime($category->created_at)) }}</td>
                <td>
                    <a class="btn btn-info" href="{{ url('backend/categories/edit/' . $category->id) }}">Modificata</a>
                    <a class="btn btn-info" href="{{ url('backend/categories/delete/' . $category->id) }}"
                       onclick="return confirm('Confermare la cancellazione della categoria?')">Cancella</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $categories->render() }}

@endsection
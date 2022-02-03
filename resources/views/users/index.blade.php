@extends('layouts.admin')

@section('content')

    <main class="main">
    <table class="table is-bordered is-striped">
        <thead>
        <tr>
            <th><abbr title="Codi identificador">Id</abbr></th>
            <th><abbr title="Codi d'usuari">Usuari</abbr></th>
            <th><abbr title="Correu electrònic">Email</abbr></th>
            <th><abbr title="Nom de l'alumne">Nom</abbr></th>
            <th><abbr title="Cognoms de l'alumne">Cognoms</abbr></th>
            <th><abbr title="Numero de Telefón">Telefón</abbr></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $item)
            <tr>
                <th>{{ $item -> id }}</th>
                <td>{{ $item -> name }}</td>
                <td>{{ $item -> email }}</td>
                <td>{{ $item -> firstname }}</td>
                <td>{{ $item -> lastname }}</td>
                <td>{{ $item -> telefon }}</td>
            </tr>
        @endforeach
    </table>

    </main>



@endsection

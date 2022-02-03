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

        </tbody>
    </table>
        @foreach($users as $user)
            <tr>
                <th>1</th>
                <td>mbourarach</td>
                <td>mbourarach@gmail.com</td>
                <td>Moha</td>
                <td>Bou</td>
                <td>6666666666</td>
            </tr>
        @endforeach
    </main>



@endsection

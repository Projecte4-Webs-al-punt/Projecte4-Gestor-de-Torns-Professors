@extends('layouts.admin')

@section('content')

    <main class="main">
        <header class="is-clearfix">

            <div>
                <h2 class="title is-3 has-text-dark has-text-centered-widescreen">Generador d'Alumnes a la Pissarra </h2>
            </div>
            <hr>
        </header>

        <div id="app">
            <random-student></random-student>
        </div>

        <header class="is-clearfix">
            <hr>
        </header>
    </main>


@endsection

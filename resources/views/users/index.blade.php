@extends('layouts.admin')

@section('content')

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="is-flex is-justify-content-center">
                    <a class="button is-warning mb-5" href="">Crear Alumne <span class="icon is-size-5 ml-1"><i class="fas fa-folder-plus"></i></span></a>
                </div>
                <div id="app">
                    <crud-usuari></crud-usuari>
                </div>
            </div>
        </section>
    </main>

@endsection

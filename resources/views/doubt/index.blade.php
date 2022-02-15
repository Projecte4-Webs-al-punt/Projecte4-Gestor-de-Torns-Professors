@extends('layouts.admin')

@section('content')

    <main class="main">
        <section class="section">
            <div class="container">
                <div id="app">
                    <crud-doubts status={{ $status }}></crud-doubts>
                </div>
            </div>
        </section>
    </main>

@endsection

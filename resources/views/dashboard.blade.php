 @extends('layouts.admin')

@section('content')

            <main class="main">
                <header class="is-clearfix">
                    <div class="cats is-pulled-right has-text-right">
                        <small>Tutory.cat<br>Dashboard<br> <span class="has-text-weight-bold has-text-white">v.0.1</span></small>
                    </div>
                    <div>
                        <h2>Administració</h2>
                        <small>Pagina dasboard</small>
                    </div>
                    <hr></hr>
                </header>
                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <article class="tile is-child box accent">
                            <p class="title">329</p>
                            <p class="subtitle"><i class="fas fa-user"></i> Total Alumnes</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box warning">
                            <p class="title">100</p>
                            <p class="subtitle"><i class="far fa-question-circles"></i> Total Dubtes</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box danger">
                            <p class="title">201</p>
                            <p class="subtitle"><i class="fas fa-exclamation-circle"></i> Dubtes no resolts</p>
                        </article>
                    </div>

                    <div class="tile is-parent">
                        <article class="tile is-child box success">
                            <p class="title">200</p>
                            <p class="subtitle"> <i class="fas fa-check-circle"></i> Dubtes resolts</p>
                        </article>
                    </div>
                </div>

                <header class="is-clearfix">
                    <div class="cats is-pulled-right has-text-right">
                        <small> <span class="has-text-weight-bold has-text-white"></span></small>
                    </div>
                    <div>
                        <h2>Bulma Elements</h2>
                        <small>Bulma mola de la pagina<br/>Tot funciona</small>
                    </div>
                    <hr></hr>
                </header>




            </main>
    </div>

@endsection
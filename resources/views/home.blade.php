@extends('layouts.app')

@section('content')
    <div class="main-content">
        @if (Auth::check())
            @if (Auth::user()->role == 'student')
                <div id="app">
                    <home-student></home-student>
                </div>
            @elseif (Auth::user()->role == 'teacher')

                <section class="hero is-medium has-text-centered">
                    <div class="hero-body">
                        <div class="container">
                            <div class="columns is-centered">
                                <div data-aos="zoom-in-up" class="column is-8">
                                    <h1 class="title is-1 mb-6">
                                        Tutory.cat <span id="typewriter"></span>
                                    </h1>
                                    <div class="column">
                                        <a href="{{ route("dashboard") }}">
                                        <div class="card column m-3">
                                            <div class="card-content">
                                                <h2 class="subtitle has-text-dark is-4 mb-3">Panell d'Administraci√≥</h2>
                                                <div class="content">
                                                    <span class="icon is-size-1 mt-5"><i class="fad fa-user-lock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
        @else
            <section class="hero is-medium has-text-centered">
                <div class="hero-body">
                    <div class="container">
                        <div class="columns is-centered">
                            <div data-aos="zoom-in-up" class="column is-8">
                                <h1 class="title is-1 mb-6">
                                    Tutory.cat <span id="typewriter"></span>
                                </h1>
                                <h2 class="subtitle subtitled">
                                    Cansat d'estar tota l'estona donant voltes per tota la classe responent
                                    qualsevol dubte?<br>
                                </h2>
                                <div>
                                    <a class="button is-warning" href="{{ route('contact') }}">Contacta amb
                                        Nosaltres</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="section-color services">
                <div class="container">
                    <div class="columns is-multiline">
                        <div
                                class="column is-12 about-me"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <h1 class="title has-text-centered section-title">Serveis</h1>

                            <br/>
                        </div>
                        <div class="columns is-12">
                            <div
                                    class="column is-4 has-text-centered"
                                    data-aos="fade-in"
                                    data-aos-easing="linear"
                            >
                                <i class="fad fa-meteor fa-3x"></i>
                                <hr/>
                                <h2>
                                    Fiabilitat, rapidesa i a prova dels atacs m√©s comuns.
                                    Visualment lleugera per qualsevol navegador modern.

                                </h2>
                            </div>
                            <div
                                    class="column is-4 has-text-centered"
                                    data-aos="fade-in"
                                    data-aos-easing="linear"
                            >
                                <i class="fas fa-paint-brush fa-3x"></i>
                                <hr/>
                                <h2>
                                    Interf√≠cie neta i visualment, modificable.
                                    Polida fins a l'√ļltim detall per millorar l'experi√®ncia de l'usuari

                                </h2>
                            </div>
                            <div
                                    class="column is-4 has-text-centered"
                                    data-aos="fade-in"
                                    data-aos-easing="linear"
                            >
                                <i class="fas fa-rocket fa-3x"></i>
                                <hr/>
                                <h2>
                                    Navegaci√≥ lleugera, i Laviana, oblidat de prec√†rregues in√ļtils.
                                </h2>
                            </div>
                        </div>
                        <hr/>
                        <div class="columns is-12">
                            <div
                                    class="column is-4 has-text-centered"
                                    data-aos="fade-in"
                                    data-aos-easing="linear"
                            >
                                <i class="fas fa-upload fa-3x"></i>
                                <hr/>
                                <h2>
                                    Capacitat de pujar imatges, gestionar usuaris, o afegir-los.
                                    Gr√†cies al nostre panell de control.
                                </h2>
                            </div>
                            <div
                                    class="column is-4 has-text-centered"
                                    data-aos="fade-in"
                                    data-aos-easing="linear"
                            >
                                <i class="fas fa-bus fa-3x"></i>
                                <hr/>
                                <h2>
                                    Funcionalitats pensades per qualsevol centre educatiu.
                                    Especialitzat en la simplicitat de fer anar el nostre projecte.
                                </h2>
                            </div>
                            <div
                                    class="column is-4 has-text-centered"
                                    data-aos="fade-in"
                                    data-aos-easing="linear"
                            >
                                <i class="fas fa-code fa-3x"></i>
                                <hr/>
                                <h2>
                                    Codi fet amb les √ļltimes tecnologies en seguretat i fiabilitat.
                                    Tecnologies √ļltimes del mercat.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('includes.about')
        @endif

                <!-- End About Me Content -->
@endsection
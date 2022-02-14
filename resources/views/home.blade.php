@extends('layouts.app')

@section('content')
    <div class="main-content">
        @if (Auth::check())
            @if (Auth::user()->role == 'student')
                <div id="app">
                    <home-student></home-student>
                </div>
            @elseif (Auth::user()->role == 'teacher')
                <div>Professor</div>
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
                                    Cansat d'estar tota l'estona amb el braç aixecat esperant que arribi el
                                    professor?<br>
                                    Amb tutory.cat aquests problemes s'han acabat per sempre.<br>
                                    Com que la vida és massa curta. No dubtis més i utilitza Tutory.cat<br>
                                </h2>
                                <div>
                                    <a class="button is-warning" href="{{ route('contact') }}">Contacta amb
                                        Nosaltres</a>
                                    <p class="content mt-2">Si trobes algun error a l'aplicació, no ho
                                        dubtis més. Contacta amb Nosaltres.</p>
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
                                    Fiabilitat, rapidesa i a prova dels atacs més comuns.
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
                                    Interfície neta i visualment, modificable.
                                    Polida fins a l'últim detall per millorar l'experiència de l'usuari

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
                                    Navegació lleugera, i Laviana, oblidat de precàrregues inútils.
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
                                    Gràcies al nostre panell de control.
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
                                    Codi fet amb les últimes tecnologies en seguretat i fiabilitat.
                                    Tecnologies últimes del mercat.
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
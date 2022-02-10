@extends('layouts.app')

@section('content')

    <div class="main-content">
        @if (Auth::check())
            @if (Auth::user()->role == 'student')
                <div class="section-dark resume">
                    <div class="container">
                        <div
                                class="columns is-multiline"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <div class="column is-12 about-me">
                                <h1 class="title has-text-centered section-title">
                                    Fer una pregunta
                                </h1>
                            </div>
                            <div class="column is-10 has-text-centered is-offset-1">
                                <div class="columns">
                                    <div class="column is-6">
                                        <div class="select is-warning is-fullwidth ">
                                            <select>
                                                <option>Selecciona el professor</option>
                                                <option>With options</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <input class="input is-warning" type="text"
                                               placeholder="Escriu el teu assumpte">
                                    </div>
                                </div>
                                <form method="post">
                                    <textarea id="myeditorinstance">Hello, World!</textarea>
                                </form>
                                <form action="">
                                    <button class="button-send">
                                        Enviar&emsp;<i class="fas fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="section-dark my-work" id="my-work">


                            <div id="app">
                                <list-doubts></list-doubts>
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
                                    Cansat de que els professors ignorin els teus emails? O ets un professor cansat dels
                                    emails?
                                    Amb tutory aquests problemes s'han acabat
                                </h2>
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
                                    Fiablitat ,ràpidesa i a prova dels atacs més comuns.
                                    Visualment lleugera per qualsevol navegador modern

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
                                    Personalització amb interfaç neta i visualment, modificable.
                                    Pulida fins al últim detall per millorar l'experiencia del usuari

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
                                    Navegació lleugera, i liviana, olividat de precarregues inutils.
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
                                    Capacitat de pujar imatges, gestionar usuaris, o afegirlos.
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
                                    Especialitzat en la simplicitat de fer anar el nostre projecte
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
                                    Codi fet amb les ultimes tecnologies en seguretat
                                    i fidabilitat. Tecnologies últimes del mercat
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endif

    <!-- End About Me Content -->
@endsection

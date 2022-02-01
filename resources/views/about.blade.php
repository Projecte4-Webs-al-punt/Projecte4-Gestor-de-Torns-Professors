@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="section-light about-me">
            <div class="container">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">Sobre nosaltres</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                            class="column is-6 has-vertically-aligned-content"
                            data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong
                            >Qui és Tutory.cat?</strong
                            >
                        </p>
                        <br />
                        <p>
                            L’Aplicació servirà perquè els alumnes puguin preguntar dubtes als seus Professors, i que els professors tinguin una llista dels alumnes que tenen dubtes de les seves assignatures.
                            També, permet als Professors escollir aleatòriament a un alumne perquè surti a la Pissarra.
                            I als tutors puguin tenir una llista dels alumnes que han fet la tutoria individualitzada.
                        </p>
                        <br />
                        <div class="is-divider"></div>
                        <div class="columns about-links">
                            <div class="column">
                                <p class="heading">
                                    <strong>Give me a ring</strong>
                                </p>
                                <p class="subheading">
                                    123-456-7890
                                </p>
                            </div>
                            <div class="column">
                                <p class="heading">
                                    <strong>Email Me</strong>
                                </p>
                                <p class="subheading">
                                    hello@example.com
                                </p>
                            </div>
                            <div class="column">
                                <p class="heading">
                                    <strong>View my portfolio</strong>
                                </p>
                                <p class="subheading">
                                    example.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                                class="is-rounded"
                                src="https://picsum.photos/id/366/600/375"
                                alt=""
                        />
                    </div>
                </div>
            </div>
        </div>

@endsection
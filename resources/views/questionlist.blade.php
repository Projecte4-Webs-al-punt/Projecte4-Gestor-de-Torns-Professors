@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="hero is-medium has-text-centered">
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-centered">
                        <div data-aos="zoom-in-up" class="column is-8">
                            <h1 class="title is-1 mb-6">
                                Tutory.cat <span id="typewriter"></span>
                            </h1>
                            <div>
                                <a class="button is-warning" href="{{ route('home') }}">Torna a Enrere</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="section-dark resume">
            <div class="section-dark my-work" id="my-work">  
                <div id="app">
                    <list-doubts></list-doubts>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

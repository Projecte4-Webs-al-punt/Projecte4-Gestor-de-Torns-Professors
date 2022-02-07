@extends('layouts.admin')

@section('content')

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="b-table has-pagination">
                    <div class="table-wrapper has-mobile-cards">
                        <div id="AppCrudUser">
                            <usuari></usuari>
                        </div>
                    </div>
                    <div class="notification">
                        <div class="level">
                            <div class="level-left">
                                <div class="level-item">
                                    <div class="buttons has-addons">
                                        <button type="button" class="button is-active">1</button>
                                        <button type="button" class="button">2</button>
                                        <button type="button" class="button">3</button>
                                    </div>
                                </div>
                            </div>
                            <div class="level-right">
                                <div class="level-item">
                                    <small>Page 1 of 3</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('/js/app.js') }}"></script>


@endsection

@extends('layouts.app')
@section('content')

    <section class="main-content">
        <div class="column is-8 is-offset-2">
            <!-- START ARTICLE -->
            <div class="card article">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content has-text-centered">
                            <div class="tag tager">
                                <figure class="image is-128x128">
                                    <img class="is-rounded" src="{{ asset('/storage/avatar/' . $user->image) }}">
                                </figure>

                            </div>
                        </div>
                    </div>
                    <div class="content article-body">
                        <form method="POST" enctype="multipart/form-data" id="upload-image"
                              action="{{ url('update') }}">
                            <div class="container rounded bg-white mt-5 mb-5">
                                <div class="row">
                                    <div>
                                        <div>
                                            <img class="rounded-circle mt-5"
                                                 width="150px">
                                            <div class="row">

                                                <div>
                                                    <div>
                                                        <div class="file has-name is-boxed">
                                                            <label class="file-label">
                                                                <input class="file-input" type="file" name="resume"
                                                                       type="file" name="image"
                                                                       placeholder="Choose image" id="image">
                                                                <span class="file-cta">
                                                          <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                          </span>
                                                          <span class="file-label">
                                                            Choose a file…
                                                          </span>
                                                        </span>
                                                                <span class="file-name">
                                                          Puja la imatge des de aquí
                                                        </span>
                                                            </label>
                                                        </div>
                                                        <div class="m-4"><label
                                                                    class="labels">Rol: </label><span>{{ $user ->role }} </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <div class="p-3 py-5">
                                            <div class="mb-3">
                                                <h4 class="text-right">Les teves dades</h4>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="m-4"><label class="labels">Nom</label>
                                                    <input type="text" class="input is-warning" id="name"
                                                           placeholder="Jhon" value={{ $user->name }}>
                                                </div>
                                                <div class="m-4"><label class="labels">Cognom</label>
                                                    <input type="text" class="input is-warning" id="lastname"
                                                           value="{{ $user->lastname }}"
                                                           placeholder="Doe"></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="m-4"><label class="labels">Email:</label>
                                                    <input type="text" class="input is-warning" id="email"
                                                           placeholder="alumne@correu.edu"
                                                           value="{{ $user->email }}">
                                                </div>
                                                <div class="m-4"><label class="labels">Telefon: </label>
                                                    <input type="text" class="input is-warning" id="phone"
                                                           placeholder="655420666"
                                                           value="{{ $user->phone }}"></div>
                                            </div>
                                            <div class="mt-5 text-center">
                                                <button class="button is-fullwidth is-warning">Guardar</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

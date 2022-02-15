@extends('layouts.app')
@section('content')

    <section class="main-content">
        <div class="column is-8 is-offset-2">
            <!-- START ARTICLE -->
            <div class="card article">
            <h1 class="title is-1 mb-6 has-text-centered">{{ $user->name }} {{ $user->lastname }}</h1>
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
                                                    <div class="is-flex is-justify-content-center">
                                                        <div class="file has-name is-boxed is-dark">
                                                            <label class="file-label">
                                                                <input class="file-input" type="file" name="resume"
                                                                       type="file" name="image"
                                                                       placeholder="Choose image" id="image">
                                                                <span class="file-cta">
                                                          <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                          </span>
                                                          <span class="file-label">
                                                            Puja una Imatge ...
                                                          </span>
                                                        </span>
                                                                <span class="file-name">
                                                          ...
                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <div class="p-3 py-5">
                                            <div class="mb-3">
                                                <h1 class="title is-3 has-text-centered">Dades Personals</h1>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="m-4"><label class="labels">Nom</label>
                                                    <input type="text" class="input is-dark" id="name"
                                                           placeholder="Nom" value="{{ $user->name }}">
                                                </div>
                                                <div class="m-4"><label class="labels">Cognoms</label>
                                                    <input type="text" class="input is-dark" id="lastname"
                                                           value="{{ $user->lastname }}"
                                                           placeholder="Cognoms"></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="m-4"><label class="labels">Correu Electrònic</label>
                                                    <input type="text" class="input is-dark" id="email"
                                                           placeholder="exemple@cendrassos.net"
                                                           value="{{ $user->email }}">
                                                </div>
                                                <div class="m-4"><label class="labels">Telèfon</label>
                                                    <input type="text" class="input is-dark" id="phone"
                                                           placeholder="000 000 000"
                                                           value="{{ $user->phone }}"></div>
                                            </div>
                                            <div class="mt-5 text-center">
                                                <button class="button is-fullwidth is-dark">Guardar</button>
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

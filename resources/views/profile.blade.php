@extends('layouts.app')
@section('content')
    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('update') }}">
        @csrf
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                            width="150px" src="{{ asset('/storage/avatar/' . Auth::user()->image) }}">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="image" placeholder="Choose image" id="image">
                                    @error('image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Les teves dades</h4>
                                @if ($errors->any())
                                <br>
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Nom</label><input type="text"
                                    class="form-control" name="name" placeholder="Jhon" value={{ Auth::user()->name }}>
                            </div>
                            <div class="col-md-6"><label class="labels">Cognom</label><input type="text"
                                    class="form-control" name="lastname" value="{{ Auth::user()->lastname }}"
                                    placeholder="Doe"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Email:</label><input type="text"
                                    class="form-control" name="email" placeholder="alumne@correu.edu"
                                    value="{{ Auth::user()->email }}">
                            </div>
                            <div class="col-md-12"><label class="labels">Telefon: </label><input type="text"
                                    class="form-control" name="phone" placeholder="655420666"
                                    value="{{ Auth::user()->phone }}"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Guardar
                                canvis</button></div>
                    </div>
                </div>
    </form>
    <div class="col-md-4">
        <div class="p-3 py-5">
            <div class="col-md-12"><label class="labels">Rol: </label>{{ Auth::user()->role }}</div>
            <div class="col-md-12"><label class="labels">Data registre:
                </label>{{ Auth::user()->created_at }}</div>
            <div class="col-md-12"><label class="labels">Ultima modificació:
                </label>{{ Auth::user()->updated_at }}</div>
            <div class="col-md-12"><label class="labels">Email confirmat:
                </label>{{ Auth::user()->email_verified_at }}</div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

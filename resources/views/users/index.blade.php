@extends('layouts.admin')

@section('content')

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="b-table has-pagination">
                    <div class="table-wrapper has-mobile-cards">
                        <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
                            <thead>
                            <tr>
                                <th><abbr title="Avatar"></abbr></th>
                                <th><abbr title="Codi identificador">Id</abbr></th>
                                <th><abbr title="Codi d'usuari">Usuari</abbr></th>
                                <th><abbr title="Correu electrònic">Email</abbr></th>
                                <th><abbr title="Nom de l'alumne">Nom i cognom</abbr></th>
                                <th><abbr title="Numero de Telefón">Telefón</abbr></th>
                                <th class="has-text-right"><abbr  title="Accions">Accions</abbr></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <td class="is-image-cell">
                                        <div class="image">
                                            <img src="https://bulma.io/images/placeholders/128x128.png" class="is-rounded">
                                        </div>
                                    </td>
                                    <td data-label="Id">{{ $item -> id }}</td>
                                    <td data-label="Usuari">{{ $item -> name }}</td>
                                    <td data-label="Email">{{ $item -> email }}</td>
                                    <td data-label="Email">{{ $item -> firstname }} {{ $item -> lastname }}</td>
                                    <td data-label="Numero de Telefon">
                                        <small class="has-text-grey is-abbr-like" title="{{ $item -> telefon }}">{{ $item -> telefon }}</small>
                                    </td>
                                    <td class="is-actions-cell">
                                        <div class="buttons is-right">
                                            <button class="button is-small is-primary" type="button">
                                                <span class="icon"><i class="fas fa-edit"></i></span>
                                            </button>
                                            <form action="/users/{{ $item -> id }}" method="post">
                                                @csrf
                                                @method('delete')
                                            <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                                                <span class="icon"><i class="fas fa-trash"></i></span>
                                            </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
    <script>
        import Users from "../js/components/Users";

        export default {
            components: {
                Users
            }
        }
    </script>


@endsection

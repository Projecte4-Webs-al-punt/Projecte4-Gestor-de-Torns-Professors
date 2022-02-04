@extends('layouts.admin')

@section('content')

    <main class="main">
            <div id="app">
                <button
                        type="button"
                        class="btn"
                        @click="showModal"
                >
                    Open Modal!
                </button>

                <ExampleComponent
                        v-show="isModalVisible"
                        @close="closeModal"
                />
            </div>
    <table class="table is-bordered is-striped">
        <thead>
        <tr>
            <th><abbr title="Codi identificador">Id</abbr></th>
            <th><abbr title="Codi d'usuari">Usuari</abbr></th>
            <th><abbr title="Correu electrònic">Email</abbr></th>
            <th><abbr title="Nom de l'alumne">Nom</abbr></th>
            <th><abbr title="Cognoms de l'alumne">Cognoms</abbr></th>
            <th><abbr title="Numero de Telefón">Telefón</abbr></th>
            <th><abbr title="Acciones">Acciones</abbr></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $item)
            <tr>
                <th>{{ $item -> id }}</th>
                <td>{{ $item -> name }}</td>
                <td>{{ $item -> email }}</td>
                <td>{{ $item -> firstname }}</td>
                <td>{{ $item -> lastname }}</td>
                <td>{{ $item -> telefon }}</td>
                <td>
                    <form action="/users/{{ $item -> id }}" method="post">
                        @csrf
                        @method('delete')
                    <button type="submit" class="button is-danger">Esborrar</button>
                    </form>
                    <button class="button is-link">Editar</button>
                </td>
            </tr>
        @endforeach
    </table>

    </main>

    <script>
        import ExampleComponent from "../js/components/ExampleComponent";

        export default {
            name: 'App',
            components: {
                ExampleComponent,
            },
            data() {
                return {
                    isModalVisible: false,
                };
            },
            methods: {
                showModal() {
                    this.isModalVisible = true;
                },
                closeModal() {
                    this.isModalVisible = false;
                }
            }
        };
    </script>


@endsection

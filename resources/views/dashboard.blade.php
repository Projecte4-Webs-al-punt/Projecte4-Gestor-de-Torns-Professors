 @extends('layouts.admin')

@section('content')


            <main class="main">
                <header class="is-clearfix">
                    <div class="cats is-pulled-right has-text-right">
                        <small>Tutory.cat<br>Panell d'Administració<br> <span class="has-text-weight-bold has-text-white"></span></small>
                    </div>
                    <div>
                        <h2 class="title is-3 has-text-dark">Panell d'Administració</h2>
                    </div>
                    <hr>
                </header>

                <div id="app">
                    <dashboard></dashboard>
                </div>

                <header class="is-clearfix">
                    <hr>
                </header>




            </main>
    </div>

@endsection
 <script>
     import ExampleComponent from "../js/components/ExampleComponent";
     export default {
         components: {ExampleComponent}
     }
 </script>
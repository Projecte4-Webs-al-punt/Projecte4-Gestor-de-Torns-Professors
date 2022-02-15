<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canvia Contrasenya | Tutory.cat</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://i.ibb.co/QnxXzXj/Copia-de-Tutory-cat-1.png">

    <script
            src="https://kit.fontawesome.com/2828f7885a.js"
            integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
            crossorigin="anonymous"
    ></script>
</head>
<section class="hero is-warning is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="box">
                        <x-guest-layout>
                            <x-auth-card>
                                <x-slot name="logo">
                                    <a href="/">
                                        <img src="https://i.ibb.co/QnxXzXj/Copia-de-Tutory-cat-1.png" alt="Logo">
                                    </a>
                                </x-slot>

                                <!-- Session Status -->
                                <x-auth-session-status :status="session('status')"/>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                    <div class="mb-4">

                                        <b>Has oblidat la teva Contrasenya?</b>
                                        <p><br>
                                        Si has oblidat la teva contrasenya, posa el teu correu electrònic
                                            i t'enviarem un enllaç per reiniciar-la.</p>
                                    </div>
                                <!-- Email Address -->
                                    <div>


                                        <div class="field">
                                            <x-label for="email" class="label" :value="__('Correu Electrònic')"/>
                                            <div class="control has-icons-left">
                                                <x-input class="input" id="email" class="input is-warning" type="email"
                                                         placeholder="exemple@cendrassos.net" type="email"
                                                         name="email" :value="old('email')" required autofocus/>
                                                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="field mt-4">
                                            <x-button class="button">
                                                {{ __('Enviar') }}
                                            </x-button>
                                            <a class="button is-danger" href="{{ route('login') }}">
                                                Tornar a Inicia Sessió
                                            </a>
                                        </div>
                                </form>
                            </x-auth-card>
                        </x-guest-layout>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmar Contrasenya | Tutory.cat</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://i.ibb.co/QnxXzXj/Copia-de-Tutory-cat-1.png">

    <script src="https://kit.fontawesome.com/2828f7885a.js"
        integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous">
    </script>
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

                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Aquesta és una àrea segura de l`aplicació. Si us plau, confirmeu la vostra contrasenya abans de continuar.') }}
                                </div>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <!-- Password -->
                                    <div class="field">
                                        <x-label for="password" class="has-text-weight-bold" :value="__('Confirma la Contrasenya')" />

                                        <div class="control has-icons-left">
                                            <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password" class="input is-warning"
                                                        placeholder="********"
                                                        required autocomplete="current-password" />
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="flex justify-end mt-4">
                                        <x-button>
                                            {{ __('Confirmar') }}
                                        </x-button>
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

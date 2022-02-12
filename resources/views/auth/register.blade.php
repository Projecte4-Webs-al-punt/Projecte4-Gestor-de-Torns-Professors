<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Tutory</title>

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

                                <!-- Session Status -->
                                <x-auth-session-status :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div>


                                        <div class="field">
                                            <x-label for="name" class="has-text-weight-bold" :value="__('Nom')" />
                                            <div class="control has-icons-left">
                                                <x-input class="input" id="name" class="input is-warning"
                                                    type="name" placeholder="Albert" type="text" name="name"
                                                    :value="old('name')" required autofocus />
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- lastname -->
                                    <div>
                                        <div class="field">
                                            <x-label for="lastname" class="has-text-weight-bold" :value="__('Cognoms')" />
                                            <div class="control has-icons-left">
                                                <x-input class="input" id="lastname" class="input is-warning"
                                                    type="lastname" placeholder="Ibiza Areu" type="text"
                                                    name="lastname" :value="old('lastname')" required autofocus />
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email Address -->
                                    <div>
                                        <div class="field">
                                            <x-label for="email" class="has-text-weight-bold" :value="__('Correu Electrònic')" />
                                            <div class="control has-icons-left">
                                                <x-input class="input" id="email" class="input is-warning"
                                                    type="email" placeholder="exemple@cendrassos.net" type="email"
                                                    name="email" :value="old('email')" required autofocus />
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="field">
                                        <x-label for="password" class="has-text-weight-bold" :value="__('Contrasenya')" />

                                        <div class="control has-icons-left">
                                            <x-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" placeholder="********" class="input is-warning" required
                                                autocomplete="current-password" />
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="field">
                                        <x-label for="password_confirmation" class="has-text-weight-bold" :value="__('Confirma la Contrasenya')" />

                                        <div class="control has-icons-left">
                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password" name="password_confirmation" placeholder="********"
                                                class="input is-warning" required autocomplete="current-password" />
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </div>
                                    </div>


                                    <div class="flex is-align-items-stretch is-justify-content-center mt-4">
                                        <x-button class="mr-4">
                                            {{ __('Registrar-se') }}
                                        </x-button>

                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('login') }}">
                                            {{ __('Ja tens un compte?') }}
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

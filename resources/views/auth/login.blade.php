<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicia Sessió | Tutory.cat</title>
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

                                <form method="POST" action="{{ route('login') }}">
                                @csrf

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

                                    <!-- Password -->

                                    <div class="field">
                                        <x-label for="password" :value="__('Contrasenya')" class="label"/>

                                        <div class="control has-icons-left">
                                            <x-input id="password" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password"
                                                     placeholder="*******"
                                                     class="input is-warning"
                                                     required autocomplete="current-password"/>
                                            <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
                                        </div>
                                    </div>


                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox"
                                                   class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                   name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __("Recorda'm") }}</span>
                                        </label>
                                    </div>


                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="is-size-7 mt-2" href="{{ route('password.request') }}">
                                                {{ __('Has oblidat la teva contrasenya?') }}
                                            </a>
                                        @endif
                                        <div class="field mt-4">
                                            <x-button class="button is-warning">
                                                {{ __('Inicia Sessió') }}
                                            </x-button>
                                            <a href="{{ route('register') }}" class="button is-light">
                                                {{ __('Registrar-se') }}
                                            </a>
                                        </div>
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




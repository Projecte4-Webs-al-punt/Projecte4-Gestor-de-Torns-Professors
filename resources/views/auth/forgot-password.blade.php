<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset password | Tutory</title>

    <script
            src="https://kit.fontawesome.com/2828f7885a.js"
            integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
            crossorigin="anonymous"
    ></script>
</head>
<section class="hero is-primary is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="box">
                        <x-guest-layout>
                            <x-auth-card>
                                <x-slot name="logo">
                                    <a href="/">
                                        <x-application-logo/>
                                    </a>
                                </x-slot>

                                <!-- Session Status -->
                                <x-auth-session-status :status="session('status')"/>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                    <div class="mb-4">

                                        <b>Has olvidat el password?</b>
                                        <p>
                                        Cap problema, posa el email i t'envierem un link per reseteijar el password
                                    </p>
                                    </div>
                                <!-- Email Address -->
                                    <div>


                                        <div class="field">
                                            <x-label for="email" class="label" :value="__('Email')"/>
                                            <div class="control has-icons-left">
                                                <x-input class="input" id="email" class="input is-warning" type="email"
                                                         placeholder="e.g. exemple@cendrassos.net" type="email"
                                                         name="email" :value="old('email')" required autofocus/>
                                                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="field mt-4">
                                            <x-button class="button">
                                                {{ __('Enviar link') }}
                                            </x-button>
                                            <a class="button is-danger" href="{{ route('login') }}">
                                                Tornar al login
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




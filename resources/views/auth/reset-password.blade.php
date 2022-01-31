<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Tutory</title>

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

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">




                                        <div class="field">
                                            <x-label for="email" class="label" :value="__('Email')"/>
                                            <div class="control has-icons-left">
                                                <x-input class="input" id="email" class="input is-warning" type="email"
                                                         placeholder="e.g. exemple@cendrassos.net" type="email"
                                                         name="email" :value="old('email', $request->email)" required autofocus/>
                                                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="field">
                                        <x-label for="password" :value="__('Password')" class="label"/>

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

                                    <!-- Confirm Password -->
                                    <div class="field">
                                        <x-label for="password_confirmation" :value="__('Confirmar Password')"/>

                                        <div class="control has-icons-left">
                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password_confirmation"
                                                     placeholder="*******"
                                                     class="input is-warning"
                                                     required autocomplete="current-password"/>
                                            <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <x-button>
                                            {{ __('Recuperar password') }}
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

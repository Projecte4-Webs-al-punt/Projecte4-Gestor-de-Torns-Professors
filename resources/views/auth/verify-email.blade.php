<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifica el Correu Electrònic | Tutory.cat</title>
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
                                {{ __('Gràcies per registrar-te! Abans de començar, podríeu verificar la vostra adreça de correu electrònic fent clic a l`enllaç que us acabem d`enviar per correu electrònic? Si no has rebut el correu electrònic, t`enviarem un altre amb molt de gust.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('S`ha enviat un nou enllaç de verificació a l`adreça de correu electrònic que vau proporcionar durant el registre. ') }}
                                </div>
                            @endif

                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>
                                        <x-button>
                                            {{ __('Reenviar la Verificació') }}
                                        </x-button>
                                    </div>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="button is-danger">
                                        {{ __('Tanca la Sessió') }}
                                    </button>
                                </form>
                            </div>
                        </x-auth-card>
                    </x-guest-layout>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

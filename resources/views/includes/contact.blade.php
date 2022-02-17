<div class="main-content">
    <div class="section-light about-me">
        <div class="container">
            <div class="column is-12 about-me">
                <h1 class="title has-text-centered section-title">Contacte</h1>
            </div>
            @if(session('messageError'))
                <article class="message is-danger">
                    <div class="message-body">
                        {{ session('messageError') }}
                    </div>
                </article>
            @endif
            @if(session('messageSuccess'))
                <article class="message is-success">
                    <div class="message-body">
                        {{ session('messageSuccess') }}
                    </div>
                </article>
            @endif
            <div class="columns is-multiline">
                <div class="column is-6"
                     data-aos="fade-right">
                    <form action="{{ route('send-contact') }}" method="POST">
                        @csrf
                    <div class="field">
                        <label class="label m-2">Nom complet</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="name" class="input is-warning" type="text" placeholder="Escriu el teu nom complet...">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
    </span>
                        </div>
                    </div>

                    <div class="field ">
                        <label class="label m-2">Correu electrònic</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="email" class="input is-warning" type="email" placeholder="Escriu el teu correu electronic...">
                            <span class="icon is-small is-left">
      <i class="fas fa-at"></i>
    </span>
                        </div>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label class="label m-2">Missatge</label>
                            <div class="control">
                                <textarea name="message" class="textarea is-warning" placeholder="Escriu el teu dubte, problema, recomenació..."></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button is-fullwidth is-dark mt-5">Enviar contacte&nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>

                <div class="column is-6 right-image mt-4" data-aos="fade-left">
                    <img class="is-rounded" src="https://i.ibb.co/dW5yM55/Captura.png" alt="logo de l'aplicació" />
                </div>
            </div>
        </div>
    </div>
</div>

@props(['errors'])

@if ($errors->any())
    <article class="message is-danger is-size-7">
        <div class="message-header">
            <p class="has-text-white" >
                {{ __('Oops! Alguna cosa a anat malament.') }}
            </p>
        </div>
        <div class="message-body">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    </article>
@endif

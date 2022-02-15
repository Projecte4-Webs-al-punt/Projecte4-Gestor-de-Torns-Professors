<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button is-warning']) }}>
    {{ $slot }}
</button>

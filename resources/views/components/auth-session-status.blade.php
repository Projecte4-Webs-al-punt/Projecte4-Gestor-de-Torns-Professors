@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'notification is-success']) }}>
        {{ $status }}
    </div>
@endif

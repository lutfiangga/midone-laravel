<div {{ $attributes->class('preview')->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>

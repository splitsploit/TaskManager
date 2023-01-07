{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center ...']) }}>
    {{ $slot }}
</button> --}}

<a {{ $attributes->merge(['class' => 'inline-flex items-center']) }}>
    {{ $slot }}
</a>
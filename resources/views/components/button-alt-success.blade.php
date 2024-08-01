<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-lg btn-alt-success']) }}>
    {{ $slot }}
</button>

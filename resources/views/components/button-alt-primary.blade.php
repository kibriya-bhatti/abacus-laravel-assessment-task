<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-lg btn-alt-primary']) }}>
    {{ $slot }}
</button>

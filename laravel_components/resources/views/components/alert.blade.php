<div {{ $attributes->class([
        'alert-dismissible fade show' => $dismissible,
    ])->merge([
        'class' => 'alert alert-' . $validTypes,
        'role' => 'alert',
    ]) }}
   >


    {{ $message }}

    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>

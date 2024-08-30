<div {{ $attributes->class([
        'alert-dismissible fade show' => $dismissible,
    ])->merge([
        'class' => 'alert alert-' . $validTypes,
        'role' => 'alert',
    ]) }}
    role="alert">

    @isset($title)
        <h4 {{$title->attributes->class('alert-heading')}} > {{ $title }}</h4>
        <hr>
    @endisset


    @if ($slot->isEmpty())
        <p>This is dafalut content when slot is Empty.</p>
    @else
        {{ $slot }}
    @endif

    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>

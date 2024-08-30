@props(['action', 'method' => 'POST'])

<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" {{ $attributes }}>
    {{-- jekar koi user koi v method GET OR POST send nahi karda ta by default othe post method include ho javega  --}}
    @csrf

    {{-- jekar koi user GET OR POST method di tha koi hor mehtod user karda ta form dye method vich POST hi avega par oss nall ikk Input hidden type ban javegyi tye oss da mehtod user walla hi hovega --}}
    @unless (in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless


    {{ $slot }}
</form>

@props(["action" => "#"])

<form class="w-9/12 h-5/6 mx-auto dark:bg-sky-650 rounded-md bg-opacity-10 backdrop-filter backdrop-blur-lg p-6" action="{{$action}}">
    @csrf

    {{ $slot }}
</form>

@props(['type' => 'info','titulo'])

@php
    switch ($type) {
        case 'info':
            $clases = "bg-blue-100 border-blue-500 text-blue-700";
            break;
        case 'danger':
            $clases = "bg-red-100 border-red-500 text-red-700";
            break;
        default:
            $clases = "bg-blue-100 border-blue-500 text-blue-700";
            break;
    }
@endphp
{{-- @dump($attributes) --}}
<article {{ $attributes->merge(['class' => "border-1-4 p-4 $clases"]) }} role="alert">
{{-- <article class="border-l-4 p-4 {{$clases}}" role="alert"> --}}
    <h1 class="font-bold">{{ $titulo }}</h1>
    <h1 class="font-bold">{{ $title }}</h1>
    
    {{ $slot }}
</article>
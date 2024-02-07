<article {{ $attributes->merge(['class' => "border-1-4 p-4 $clases"]) }} role="alert">
    {{-- <article class="border-l-4 p-4 {{$clases}}" role="alert"> --}}
        <h1 class="font-bold">{{ $titulo }}</h1>
        <h1 class="font-bold">{{ $title }}</h1>
        
        {{ $slot }}
    </article>
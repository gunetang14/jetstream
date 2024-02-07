<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- @php
                $type = 'info';
            @endphp
            <x-alert :type="$type" titulo="Este es el titulo desde el atributo"> --}} {{-- otra forma de usar variable  --}}
            
            <x-alert type="info" titulo="Este es el titulo desde el atributo" id="alerta" class="mb-4">
                <x-slot name="title">
                    Este es el titulo desde el slot
                </x-slot>
                <p>Este es un texto de prueba</p>
            </x-alert>
            <p>Hola Mundo</p>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- @php
                $type = 'info';
            @endphp
            <x-alert :type="$type" titulo="Este es el titulo desde el atributo"> --}} {{-- otra forma de usar variable  --}}
            
            <x-alert2 type="info" titulo="Este es el titulo desde el atributo" id="alerta" class="mb-4">
                <x-slot name="title">
                    Este es el titulo desde el slot
                </x-slot>
                <p>Este es un texto de prueba</p>
            </x-alert2>
            <p>Este es el componente de clase</p>
        </div>
    </div>
</x-app-layout>

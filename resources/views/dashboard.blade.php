<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            AQ Laravel
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @php
                    $type = 'info';
                    @endphp
                    <x-alert :type="$type" titulo="Este es el titulo desde el atributo"> --}} {{-- otra forma de usar variable  --}}
                        
                        
                        {{-- <x-alert type="info" titulo="Este es el titulo desde el atributo" id="alerta" class="mb-4">
                            <x-slot name="title">
                                Este es el titulo desde el slot
                            </x-slot>
                            <p>Este es un texto de prueba</p>
                        </x-alert>
                        <p>Hola Mundo</p> --}}
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci optio eos alias doloribus aut unde voluptatem laudantium nobis cum, maiores corporis itaque error dicta quisquam laborum amet deserunt? Earum, beatae.</p>
                <p>Blanditiis magnam rerum molestias incidunt saepe totam cumque debitis perspiciatis ullam. Suscipit quidem architecto et, minima eos tempora quae at vel officia optio excepturi hic, alias perspiciatis, incidunt debitis consequuntur.</p>
                <p>Accusamus nemo alias dolorum tenetur non quasi at neque ad ullam provident ipsa velit delectus illo nesciunt ipsum aspernatur veritatis, voluptatem cupiditate quos vero. Natus eveniet suscipit maxime corporis in.</p>
                <p>Ex qui possimus quas! Aspernatur, blanditiis natus, explicabo deserunt, esse ratione hic sunt illum saepe adipisci molestiae commodi ipsam dolorem vitae quibusdam quidem praesentium illo! Magni quas illum quisquam est.</p>
                <p>Aut possimus optio sint ducimus maxime culpa eum doloribus pariatur distinctio temporibus, praesentium reprehenderit impedit. Atque cupiditate, dignissimos, excepturi delectus nobis eos explicabo impedit ut nulla minima neque, optio sunt?</p>
            </div>
        </div> 
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}

            {{-- @php
                $type = 'info';
            @endphp
            <x-alert :type="$type" titulo="Este es el titulo desde el atributo"> --}} {{-- otra forma de usar variable  --}}
            
            {{-- <x-alert2 type="info" titulo="Este es el titulo desde el atributo" id="alerta" class="mb-4">
                <x-slot name="title">
                    Este es el titulo desde el slot
                </x-slot>
                <p>Este es un texto de prueba</p>
            </x-alert2>
            <p>Este es el componente de clase</p>
        </div>
    </div> --}}
</x-app-layout>

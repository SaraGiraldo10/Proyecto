{{-- Plantilla  visualización Home  --}}
<x-app-layout>
    {{-- Portada --}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/workout-g9e95c1193_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-2/4 lg:w-1/2">
                <h1 class="text-white font-fold text-3xl">Alcanza tus metas con tu salud y cuerpo</h1>
                <p class="text-white text-lg mt-2 mb-4">En sports evolution tenemos lo que necesitas para tu vida saludable</p>
                
                @livewire('search')

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/pexels-andrea-piacquadio-863926.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Rutinas</h1>
                </header>

                <p class="text-sm text-gray-500">Encuentra una gran variedad de rutinas y ejercicios, totalmente gratis</p>

            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/salad-g2895a69f2_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Alimentación</h1>
                </header>

                <p class="text-sm text-gray-500">Te ayudamos con un plan de alimentacion para tu salud</p>

            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/physiotherapy-g30f3b7b1a_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>

                <p class="text-sm text-gray-500">Articulos de alimentación sana y ejercicios</p>

            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/training-g04940e1d6_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Consejos</h1>
                </header>

                <p class="text-sm text-gray-500">Te ayudamos con orientación adecuada para tu plan de ejercicios</p>
            </article>
        </div>
    </section>
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que ejercicios realizar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de ejercicios y filtrados por categoria y nivel</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálogo de ejercicios
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">Últimas rutinas</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabaja duro para seguir subiendo las rutinas</p>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
            <x-course-card :course="$course" />
            @endforeach
        </div>
    </section>
</x-app-layout>


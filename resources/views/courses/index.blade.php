{{-- Home cursos --}}
<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/jogging-gbe914d395_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-2/4 lg:w-1/2">
                <h1 class="text-white font-fold text-3xl">Domina tu salud y cuerpo con sport evolution</h1>
                <p class="text-white text-lg mt-2 mb-4">Acepta los retos para así poder sentir la euforia de la victoria</p>
                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('courses-index')
    
</x-app-layout>
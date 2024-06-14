<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido ') }}{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("¡Bienvenido a Rocha Peluqueros! Somos más que una barbería, somos un lugar donde la tradición se une con la modernidad para ofrecerte un servicio de calidad y un ambiente acogedor. Nuestro equipo de expertos barberos está comprometido en brindarte un corte de cabello y un afeitado impecables, siempre adaptándonos a tus gustos y necesidades. En Rocha Peluqueros no solo nos preocupamos por tu imagen, sino también por tu experiencia, por eso te invitamos a disfrutar de un momento de relajación y cuidado personal en nuestras instalaciones. ¡Ven a visitarnos y descubre por qué somos la mejor opción para tu estilo!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

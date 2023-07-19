<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Drogueria y Variedades Santa cecilia') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <x-template-ventas>

                </x-template-ventas>
            </div>
        </div>
    </div>
</x-app-layout>

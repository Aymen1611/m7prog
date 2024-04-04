<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Aymens Portfolio!') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-black dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg font-semibold font-mono text-green-500">




                    {{ __("Je bent ingelogd!") }}

            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>Welkom terug!</h2>
                    <p>Beheer hier jouw restaurant.</p>

                    <ul style="margin-top: 20px;">
                        <li><a href="{{ route('menu.index') }}">Menu bekijken</a></li>
                        <li><a href="{{ route('menu.create') }}">Gerecht toevoegen</a></li>
                        <li><a href="{{ route('messages.index') }}">Berichten bekijken</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
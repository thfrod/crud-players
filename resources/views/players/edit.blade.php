<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Player') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <x-edit-form action="{{ route('players.update', $player) }}" :teams="$teams" :player="$player" 
                    :update="true"></x-edit-form>
            </div>
        </div>
    </div>
</x-app-layout>

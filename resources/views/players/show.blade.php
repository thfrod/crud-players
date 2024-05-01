<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Player info') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                <div class="flex items-start gap-4">
                    <img src="{{ $player->photo }}" alt="Foto do jogador" class="w-32 object-contain rounded">
                    <div class="">
                        <h2 class="text-xl mb-4">{{ $player->name }}</h2>
                        <p class="text-sm">Birthdate: {{ $player->birthdate }}</p>
                        <p class="text-sm">Age: {{ $player->age }}</p>
                        <p class="text-sm">Current Team: {{ $player->currentTeam->name }}</p>
                        <p class="text-sm">Revealed Team: {{ $player->revealedTeam->name }}</p>
                    </div>
                    <div class="flex flex-col justify-between ml-auto h-32">
                        <img src="{{ $player->currentTeam->badge }}" alt="Escudo do time atual"
                            class="w-16 object-contain ml-auto">
                        <div class="flex gap-2">
                            <form method="POST" action="{{ route('players.destroy', $player) }}"
                                class="block mx-auto w-fit">
                                @csrf
                                @method('DELETE')
                                <x-danger-button class="block mx-auto">
                                    Delete player &nbsp;<i class="uil uil-trash text-xl"></i>
                                </x-danger-button>
                            </form>
                            <a href="{{ route('players.edit', $player) }}" class="block mx-auto w-fit">
                                <x-secondary-button>
                                    Edit player &nbsp;<i class="uil uil-pen text-xl"></i>
                                </x-secondary-button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

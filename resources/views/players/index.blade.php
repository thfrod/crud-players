<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Players') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none mb-1 block text-right"
                href="{{ route('players.create') }}">
                {{ __('Create players') }}
            </a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                @if (count($players))
                    <table class="table-auto md:table-fixed w-full">
                        <thead>
                            <tr>
                                <th>{{ __('Photo') }}</th>
                                <th> {{ __('Name') }}</th>
                                <th> {{ __('Age') }}</th>
                                <th> {{ __('Birthdate') }}</th>
                                <th> {{ __('Current team') }}</th>
                                <th> {{ __('Revealed team') }}</th>
                                <th>&nbsp;</th>
                                {{-- <th>&nbsp;</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $player)
                                <tr>
                                    <td class="text-center align-middle">
                                        <img src="{{ $player->photo }}" alt="Foto do jogador"
                                            class="w-16 object-contain mx-auto rounded-full">
                                    </td>
                                    <td class="text-center align-middle">{{ $player->name }}</td>
                                    <td class="text-center align-middle">{{ $player->age }}</td>
                                    <td class="text-center align-middle">{{ $player->birthdate }}</td>
                                    <td class="text-center align-middle">
                                        @if ($player->currentTeam)
                                            <img src="{{ $player->currentTeam->badge }}" alt="Escudo do time atual"
                                                class="w-16 object-contain mx-auto">
                                            {{ $player->currentTeam->name }}
                                        @else
                                            No Registers
                                        @endif
                                    </td>
                                    <td class="text-center align-middle">
                                        @if ($player->revealedTeam)
                                            <img src="{{ $player->revealedTeam->badge }}"
                                                alt="Escudo do time em que foi revelado"
                                                class="w-16 object-contain mx-auto">
                                            {{ $player->revealedTeam->name }}
                                        @else
                                            No Registers
                                        @endif
                                    </td>
                                    <td class="flex ">
                                        <form method="POST" action="{{ route('players.destroy', $player) }}"
                                            class="block mx-auto w-fit">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button class="block mx-auto">
                                                <i class="uil uil-trash text-xl"></i>
                                            </x-danger-button>
                                        </form>
                                        <a href="{{ route('players.edit', $player) }}" class="block mx-auto w-fit">
                                            <x-secondary-button>
                                                <i class="uil uil-pen text-xl"></i>
                                            </x-secondary-button>
                                        </a>
                                    </td>
                                    {{-- <td>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>{{ __('No registers found.') }}</p>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>

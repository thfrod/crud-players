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
                    <table class="table-auto md:table-fixed">
                        <thead>
                            <tr>
                                <th>{{ __('Photo') }}</th>
                                <th> {{ __('Name') }}</th>
                                <th> {{ __('Age') }}</th>
                                <th> {{ __('Birthdate') }}</th>
                                <th> {{ __('Current team') }}</th>
                                <th> {{ __('Revealed team') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $player)
                                <tr>
                                    <td><img src="{{ $player->photo }}" alt="Foto do jogador"></td>
                                    <td>{{ $player->name }}</td>
                                    <td>{{ $player->age }}</td>
                                    <td>{{ $player->birthdate }}</td>
                                    <td>{{ $player->CurrentTeam()->name }}</td>
                                    <td>{{ $player->RevealedTeam()->name }}</td>
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

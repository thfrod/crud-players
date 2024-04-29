<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Player') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <form method="POST" action="{{ route('players.store') }}">
                    @csrf

                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label for="age">Age</label>
                        <input type="text" name="age">
                    </div>
                    <div>
                        <label for="birthdate">Birthdate</label>
                        <input type="date" name="birthdate">
                    </div>
                    <div>
                        <label for="current_team">Current Team</label>
                        <select name="current_team">
                            <option value="" disabled selected>Select a team</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="revealed_team">Revealed Team</label>
                        <select name="revealed_team">
                            <option value="" disabled selected>Select a team</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<form method="POST" action="{{ $action }}">
    @csrf
    @isset($update)
        @method('PUT')
    @endisset

    <div class="mb-4">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input class="block mt-1 w-full" type="text" name="name" required autofocus
            value="{{ $player ? $player->name : '' }}" />
    </div>

    <div class="mb-4">
        <x-input-label for="photo" :value="__('Profile photo')" />
        <x-text-input class="block mt-1 w-full" type="text" name="photo" required
            value="{{ $player ? $player->photo : '' }}" />
    </div>
    <div class="mb-4">
        <x-input-label for="age" :value="__('Age')" />
        <x-text-input class="block mt-1 w-full" type="number" name="age" required
            value="{{ $player ? $player->age : '' }}" />
    </div>
    <div class="mb-4">
        <x-input-label for="birthdate" :value="__('Birthdate')" />
        <x-text-input class="block mt-1 w-full" type="date" name="birthdate" required
            value="{{ $player ? $player->birthdate : '' }}" />
    </div>
    <div class="mb-4">
        <x-input-label for="current_team" :value="__('Current team')" />
        <x-select-input name="current_team">
            <option value="" disabled>Select a team</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}"
                    @if (isset($player) && $player->currentTeam) :selected="$player->currentTeam->id == $team->id" @endif>
                    {{ $team->name }}</option>
            @endforeach
        </x-select-input>
    </div>
    <div class="mb-4">
        <x-input-label for="revealed_team" :value="__('Revealed team')" />
        <x-select-input name="revealed_team">
            <option value="" disabled>Select a team</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}"
                    @if (isset($player) && $player->revealedTeam) :selected="$player->revealedTeam->id == $team->id" @endif>
                    {{ $team->name }}</option>
            @endforeach
        </x-select-input>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-3">
            {{ $update ? __('Edit') : __('Create') }}
        </x-primary-button>
    </div>
</form>

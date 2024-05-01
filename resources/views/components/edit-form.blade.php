<form method="POST" action="{{ $action }}">
    @csrf
    @isset($update)
        @method('PUT')
    @endisset

    <div>
        <label for="name">Name</label>
        <input type="text" name="name"
            @isset($player)
        value="{{ $player->name }}"
        @endisset>
    </div>
    <div>
        <label for="photo">Profile photo</label>
        <input type="text" name="photo"
            @isset($player)
        value="{{ $player->photo }}"
        @endisset>
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age"
            @isset($player)
        value="{{ $player->age }}"
        @endisset>
    </div>
    <div>
        <label for="birthdate">Birthdate</label>
        <input type="date" name="birthdate"
            @isset($player)
        value="{{ $player->birthdate }}"
        @endisset>
    </div>
    <div>
        <label for="current_team">Current Team</label>
        <select name="current_team">
            <option value="" disabled>Select a team</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}"
                    @if (isset($player) && $player->currentTeam) :selected="$player->currentTeam->id == $team->id" @endif>
                    {{ $team->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="revealed_team">Revealed Team</label>
        <select name="revealed_team">
            <option value="" disabled>Select a team</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}"
                    @if (isset($player) && $player->revealedTeam) :selected="$player->revealedTeam->id == $team->id" @endif>
                    {{ $team->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-3">
            {{ $update ? __('Edit') : __('Create') }}
        </x-primary-button>
    </div>
</form>

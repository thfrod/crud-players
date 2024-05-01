<form :method="$method" :action="$route">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="photo">Profile photo</label>
        <input type="text" name="photo">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age">
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

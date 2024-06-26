<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all();
        return view('players.index')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('players.create')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $player = [
            'photo' => $request->photo,
            'name' => $request->name,
            'age' => $request->age,
            'birthdate' => $request->birthdate,
            'current_team_id' => $request->current_team,
            'revealed_team_id' => $request->revealed_team,
        ];

        Player::create($player);
        return to_route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
        return view('players.show')->with('player', $player);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
        $teams = Team::all();

        return view('players.edit')->with(['player' => $player, 'teams' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //

        // dd($request);
        $player->name = $request->name;
        $player->photo = $request->photo;
        $player->age = $request->age;
        $player->birthdate = $request->birthdate;
        $player->current_team_id = $request->current_team;
        $player->revealed_team_id = $request->revealed_team;
        $player->update();
        return to_route('players.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
        $player->delete();
        return to_route('players.index');
    }
}

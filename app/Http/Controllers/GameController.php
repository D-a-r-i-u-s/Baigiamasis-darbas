<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Console;
use App\Models\Game;
use App\Models\Genre;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::query()->with('genre', 'console')->get();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::get();
        $consoles = Console::get();
        return view('games.create', compact('genres', 'consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        $attrs = $request->all();
        $attrs['console_id'] = $attrs['console_id'][0];
        $attrs['genre_id'] = $attrs['genre_id'][0];

        Game::query()->create($attrs);
        return to_route('games.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $genres = Genre::get();
        $consoles = Console::get();

        return view('games.edit', compact('game', 'genres', 'consoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $attrs = $request->all();

        $attrs['console_id'] = $attrs['console_id'][0];
        $attrs['genre_id'] = $attrs['genre_id'][0];

        $game->update($attrs);
        return to_route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return to_route('games.index');
    }
}

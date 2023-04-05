<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsoleRequest;
use App\Http\Requests\UpdateConsoleRequest;
use App\Models\Console;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::query()->withCount('games')->get();
        return view('consoles.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consoles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsoleRequest $request)
    {
        Console::query()->create($request->all());
        return to_route('consoles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        return view('consoles.edit', compact('console'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsoleRequest $request, Console $console)
    {
        $console->update($request->all());
        return to_route('consoles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        $console->delete();
        return to_route('consoles.index');
    }
}

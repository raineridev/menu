<?php

namespace App\Http\Controllers;

use App\Models\Dishe;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DisheRequest;
use Illuminate\Http\RedirectResponse;
class DisheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dishe.index', 
            ["dishes" => DB::table('dishes')->paginate(35)]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dishe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisheRequest $request) : RedirectResponse
    {
        $validated = $request->validated();
        $dishe = Dishe::create($validated);

        return redirect()->route('dishes.edit', $dishe);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dishe $dish) : View
    {
        return view('dishe.show', ["dish" => $dish]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dishe $dish) : View
    {
        return view('dishe.edit', ["dish" => $dish]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DisheRequest $request, Dishe $dish) : RedirectResponse
    {
        $validated = $request->validated();
        $dish->update($validated);
        return redirect()->route('dishes.edit', $dish);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dishe $dish) 
    {
        $dish->delete();
        return redirect()->route('dishes.index');
    }
}

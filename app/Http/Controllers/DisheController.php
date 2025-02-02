<?php

namespace App\Http\Controllers;

use App\Models\Dishe;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\DisheRequest;

class DisheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dishe.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisheRequest $request)
    {
        $validated = $request->validated();
        return (Dishe::create($validated));
    }

    /**
     * Display the specified resource.
     */
    public function show(Dishe $dishe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dishe $dishe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dishe $dishe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dishe $dishe)
    {
        //
    }
}

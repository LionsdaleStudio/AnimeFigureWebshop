<?php

namespace App\Http\Controllers;

use App\Models\Figure;
use App\Http\Requests\StoreFigureRequest;
use App\Http\Requests\UpdateFigureRequest;

class FigureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Én vagyok a controller index metódusa";
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
    public function store(StoreFigureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Figure $figure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Figure $figure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFigureRequest $request, Figure $figure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Figure $figure)
    {
        //
    }
}

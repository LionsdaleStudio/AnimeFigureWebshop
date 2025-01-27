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
        $figurines = Figure::all()->sortByDesc("id");
        return view("figurines.index", ["figurines" => $figurines]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("figurines.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFigureRequest $request)
    {
        echo "This is the store page";

        $figure = Figure::create($request->all());

        return redirect()->route("figures.index")->with("success", $figure->name . " hozzáadása megtörtént");
    
        return response()->json(["msg" => "Sikeres feöltöltés", "figura" => $figure]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Figure $figure)
    {
        return view('figurines.show', ['figure' => $figure]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Figure $figure)
    {
        return view('figurines.edit', ['figure' => $figure]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFigureRequest $request, Figure $figure)
    {
        $figure->update($request->all());
        return redirect()->route("figures.index")->with("success", $figure->name . " frissítése megtörtént");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Figure $figure)
    {
        $figure->delete();
        return back()->with("success", $figure->name . " törlése megtörtént");
    }

    public function restore(Figure $figure){
        $figure->restore();
        return back()->with("success", $figure->name . " helyreállítása megtörtént");
    }
}

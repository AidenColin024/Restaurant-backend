<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('menu', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dish::create($request->all());
        return redirect()->route('menu.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $menu)
    {
        return view('edit', ['dish' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $menu)
    {
        $menu->update($request->all());
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index');
    }
}

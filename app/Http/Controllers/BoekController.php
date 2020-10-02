<?php

namespace App\Http\Controllers;

use App\Boek;
use App\Http\Requests\BoekStoreRequest;
use App\Http\Requests\BoekUpdateRequest;
use Illuminate\Http\Request;

class BoekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ophalen van boeks
        $boeks = Boek::all();

        return view('public.boeks.index', compact('boeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.boeks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BoekStoreRequest $request)
    {
        $boek = new Boek();
        $boek->name = $request->name;
        $boek->description = $request->description;
        $boek->pagina = $request->pagina;
        $boek->save();

        return redirect()->route('boeks.index')->with('massage', 'Boek Toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boek  $boek
     * @return \Illuminate\Http\Response
     */
    public function show(Boek $boek)
    {
        return view('public.boeks.show', compact('boek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boek  $boek
     * @return \Illuminate\Http\Response
     */
    public function edit(Boek $boek)
    {
        $boeks = boek::all();
        return view('public.boeks.edit', compact('boek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boek  $boek
     * @return \Illuminate\Http\Response
     */
    public function update(BoekUpdateRequest $request, Boek $boek)
    {
        $boek->name = $request->name;
        $boek->description = $request->description;
        $boek->pagina = $request->pagina;
        $boek->save();
    
    return redirect()->route('boeks.index')->with('message', 'Boek Geupdate');
}

    /**
     * show the form for deleting the specified resource.
     *
     * @param  \App\Boek  $boek
     * @return \Illuminate\Http\Response
     */
    public function delete(Boek $boek)
    {
        return view('public.boeks.delete', compact('boek'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boek  $boek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boek $boek)
    {
        $boek->delete();
        return redirect()->route('boeks.index')->with('massage', 'Boek deleted');
    }
}

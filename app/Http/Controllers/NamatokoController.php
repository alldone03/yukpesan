<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenamatokoRequest;
use App\Http\Requests\UpdatenamatokoRequest;
use App\Models\namatoko;

class NamatokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = namatoko::all();
        return view('pages.toko.index', compact('data'));
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
    public function store(StorenamatokoRequest $request)
    {
        namatoko::create($request->all());
        return response()->json(['success' => 'Toko successfully added']);
    }

    /**
     * Display the specified resource.
     */
    public function show(namatoko $namatoko)
    {
        return response()->json($namatoko);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(namatoko $namatoko)
    {
        return response()->json($namatoko);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenamatokoRequest $request, namatoko $namatoko)
    {

        $namatoko->update($request->all());
        return response()->json(['success' => 'Toko successfully update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(namatoko $namatoko)
    {
        $tempnamatoko = $namatoko->namatoko;
        $namatoko->delete();
        return redirect()->route('toko')->with(['success' => $tempnamatoko . ' successfully deleted!']);
    }
}

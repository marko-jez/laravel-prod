<?php

namespace App\Http\Controllers;

use App\Models\Knjiga;
use Illuminate\Http\Request;

class KnjiznicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $knjige = Knjiga::with('autor')->get();
        return view('knjiznica.index', compact('knjige'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $knjiga = Knjiga::with(['autor', 'zanr'])->findOrFail($id);
        return view('knjiznica.show', compact('knjiga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request) 
    {
        $query = $request->input('q');
        $knjige = Knjiga::where('naziv', 'LIKE', '%' . $query . '%')->get();
        return view('knjiznica.search', compact('query', 'knjige'));
    }
}

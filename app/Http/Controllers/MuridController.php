<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allMurid = Murid::all();
        return view ('murid.index', compact('allMurid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('murid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        $validatedData=$request->validate([
            'id_murid' =>'required|max:100',
            'nama' =>'required|max:100',
            'kelas' =>'required|max:100',
            'alamat' =>'required|max:100',
            'tahun_masuk' =>'required|max:100',
            'nama_wali' =>'required|max:100',
        ]);

        
        Murid::create($validatedData);

        //redirect ke index murid
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Murid $murid)
    {
        return view ('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid = Murid::where('id_murid', $id)->firstOrFail();
        
        return view('murid.edit', compact('murid'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id_murid' => 'required|max:100',
            'nama' => 'required|max:100',
            'kelas' => 'required|max:100',
            'alamat' => 'required|max:100',
            'tahun_masuk' => 'required|max:100',
            'nama_wali' => 'required|max:100',
        ]);

        Murid::where('id_murid', $id)->update($validatedData);

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid)
    {
        $murid->delete();
        //redirect ke index murid
        return redirect()->route('murid.index');
    }
};

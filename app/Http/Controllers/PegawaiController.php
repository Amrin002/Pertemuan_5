<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pegawai = pegawai::all();
        return view('pegawai.index',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'pangkat' => 'required',
            'alamat' => 'required',
        ]);
        $pegawai = pegawai::create($validateData);
        return redirect('/pegawai')->with('succses','Pegawai created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pegawai $pegawai)
    {
        //
        $pegawai = pegawai::findOrFail($id);
        return view('pegawai.edit',compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pegawai $pegawai)
    {
        // dff
        $validateData = $request->validate([
            'nama' => 'required',
            'pangkat' => 'required',
            'alamat' => 'required',
        ]);
        pegawai::whereId($id)->update($validateData);

        return redirect('/pegawai')->with('succses','Pegawai updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pegawai $pegawai)
    {
        //
        $pegawai = pegawai::findOrFail($id);
        $pegawai-> delete();
        return redirect('/pegawai')->with('succses','Pegawai deleted succesfully');
    }
}

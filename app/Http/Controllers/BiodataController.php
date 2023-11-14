<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Biodata::all();
        return view('biodatalist',compact('data'));
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
        $biodata = new Biodata();
        $biodata->nim=$request->nim;
        $biodata->nama=$request->nama;
        $biodata->umur=$request->umur;
        $biodata->tanggal=$request->tanggal;
        $biodata->alamat=$request->alamat;
        $biodata->telepon=$request->telepon;
        $biodata->save();
        if ($biodata->save()) {
            return redirect('biodata')->with('success', 'Record saved successfully');
        } else {
            return redirect('biodata')->with('error', 'Failed to save record');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);

        if (!$biodata) {
            return redirect('biodata');
        }

        return view('edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $biodata = Biodata::find($id);
        if (!$biodata) {
            return redirect('biodata')->with('error', 'Record not found');
        }

        $biodata->nim = $request->nim;
        $biodata->nama = $request->nama;
        $biodata->umur = $request->umur;
        $biodata->tanggal = $request->tanggal;
        $biodata->alamat = $request->alamat;
        $biodata->telepon = $request->telepon;
        $biodata->save();

        if ($biodata->save()) {
            return redirect('biodata')->with('success', 'Record updated successfully');
        } else {
            return redirect('biodata')->with('error', 'Failed to update record');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Biodata::find($id)->delete();
        return redirect('biodata');
    }
}

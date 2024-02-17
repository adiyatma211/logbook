<?php

namespace App\Http\Controllers;

use App\Models\unitmodel;
use Illuminate\Http\Request;
use App\Models\masterlogbook;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $log = masterlogbook::all();
        
        $unitLogs = MasterLogbook::whereHas('modelunit', function ($query) {
            $query->where('unit', 'TEST');
        })->get();

        $unitLogs1 = MasterLogbook::whereHas('modelunit', function ($query) {
            $query->where('unit', 'test3');
        })->get();

        // dd($unitLogs);  
        return view('admin.v_laporan',[
            'log' => $log,
            'unitLogs' => $unitLogs,
            'unitLogs1' => $unitLogs1
            
        ]);
        
    }
    public function laporan()
    {
        return view('admin.v_u_laporan');
    }
    public function unit()
    {

        $unit = unitmodel::all();
        return view('admin.v_unit',['unit' => $unit]);
    }
    public function tambahunit()
    {
        return view('admin.c_unit');
    }

    public function user()
    {
        return view('admin.v_user');
    }

    public function tambahuser()
    {
        return view('admin.c_user');
    }



    // tambah unit

    public function unittambah()
    {
        unitmodel::create([
            'unit' => request('unit'),
            'kode' => request('kode')
        ]);
        return redirect('/laporunit')->with('pesan', 'Data');
    }

    public function unitedit($id)
    {
        $unit = unitmodel::find($id);

        return view('admin.e_unit', ['unit' => $unit]);
    }

    public function simpanunit(Request $request,$id)
    {
        $unit = unitmodel::find($request->id);
        $unit->unit = $request->unit;
        $unit->kode = $request->kode;
        $unit->save();
        return redirect('/laporunit')->with('pesan', 'Data');
        
    }

    public function deleteunit($id)
    {
        $unit = unitmodel::find($id);
        $unit->delete();
        
        return redirect('/laporunit')->with('pesan', 'Data');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
        //
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
}

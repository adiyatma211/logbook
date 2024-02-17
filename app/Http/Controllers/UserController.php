<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\unitmodel;
use Illuminate\Http\Request;
use App\Models\masterlogbook;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $log = masterlogbook::all();
        return view('user.v_laporan',[
            'log' => $log,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unit = unitmodel::all();
        $user = User::all();
        $log = masterlogbook::all();
        return view('user.c_laporan',[
            'unit' => $unit,
            'log' => $log,
            'user' => $user
    
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        masterlogbook::create([
            'user_id' => auth()->user()->id, // 'user_id' => '1
            'unit' => $request->unit,
            'lokasi' => $request->lokasi,
            'kejadian' => $request->kejadian,
            'tanggal' => $request->tanggal,
            'resiko' => $request->resiko,
            'tindakan' => $request->tindakan,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
        ]);
        // dd($request->all());
        return redirect('/tambah')->with('pesan', 'Data');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $log = masterlogbook::findOrFail($id);
        $unitmod = unitmodel::all();
        // dd($log);
        // Kembalikan view edit dengan data entitas yang ingin diedit
        return view('user.e_laporan', ['log' => $log,
        'unitmod' => $unitmod]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {


        return view('user.e_laporan');
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
       
         // Temukan entitas MasterLogbook berdasarkan ID
         $log = masterlogbook::findOrFail($id);
    // Perbarui entitas dengan data dari request
        $log->update([
        'unit' => $request->unit,
        'lokasi' => $request->lokasi,
        'kejadian' => $request->kejadian,
        'tanggal' => $request->tanggal,
        'resiko' => $request->resiko,
        'tindakan' => $request->tindakan,
        'keterangan' => $request->keterangan,
        'status' => $request->status,
        

    ]);
    
    // Berikan respons berhasil
    return redirect('/tambah')->with('success', 'Data Logbook berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $masterLogbook = MasterLogbook::findOrFail($id);
    
    // Hapus entitas
        $masterLogbook->delete();
        return redirect('/tambah')->with(['message' => 'Laporan Berhasil di Hapus']);
    }

    public function profile()
    {
        return view('user.v_profile');
    }
}

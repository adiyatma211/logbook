<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\unitmodel;
use Illuminate\Http\Request;
use App\Models\masterlogbook;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
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

        // user::all();
        $user = User::all();
        return view('admin.v_user',['user' => $user]);
    }

    public function userload()
    {
        return view('admin.c_user');
    }

    public function usersimpan(Request $request)
    {     

        // $imagePath = file_get_contents($request->file('image')->getRealPath());
        // // $avatarBinary = file_get_contents($request->file('avatar')->getRealPath());
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'role'=>$request->role,
        //     'username' => $request->username,
        //     'nip' => $request->nip,
        //     'jabatan' => $request->jabatan,
        //     'kode' => $request->kode,
        //     'image' => $imagePath,
        //     'password' => Hash::make($request->password)
        // ]);  

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->username = $request->username;
        $data->nip = $request->nip;
        $data->jabatan = $request->jabatan;
        $data->kode = $request->kode;
        $data->password = Hash::make($request->password);
    
        // Jika file gambar diunggah, simpan ke penyimpanan publik
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data->image = $filename;
        }
    
        $data->save();

        return redirect('/user')->with('pesan', 'Data');

    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('admin.e_user', ['user' => $user]);
    }

    public function updateuser(Request $request,$id)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->username = $request->username;
        $user->nip = $request->nip;
        $user->jabatan = $request->jabatan;
        $user->kode = $request->kode;
        $user->save();
        return redirect('/user')->with('pesan', 'Data');
        
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return redirect('/user')->with('pesan', 'Data');
    }


    // tambah unit

    public function unittambah(Request $request)
    {
        unitmodel::create([
            'unit' => $request->unit,
            'kode' => $request->kode
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

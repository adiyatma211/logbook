<?php

namespace App\Http\Controllers;

use App\Models\masterlogbook;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    // master Dashboard

    public function masterdb()
    {
        $user = User::where('role', 'user')->get();
        $ongoingCount = MasterLogbook::where('status', 'on Progress')->count();
        $newCount = MasterLogbook::where('status', 'new')->count();
        $doneCount = MasterLogbook::where('status', 'done')->count();
        return view('master',[
            'user' => $user,
            'master' => masterlogbook::with('user')->get(),
            'ongoingCount' => $ongoingCount,
            'newCount' => $newCount,
            'doneCount' => $doneCount
        ]);
    }

    //Admin  
    public function admindb()
    {
        return view('admin.home');
    }

    // User

    public function user()
    {
        return view('user.dashboard');
    }
}

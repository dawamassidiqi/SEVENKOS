<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function loginPengguna(Request $request)
    {
        $request->validate([
            'username' =>'required',
            'password' =>'required'
        ]);
        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect()->route('landing.page.home');
        }
        return back()->withErrors(['username'=>'error']);
    }

    public function register(Request $request)
    {
        return $request;
        
    }
}

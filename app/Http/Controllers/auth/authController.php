<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller{
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
        $validation = $request->validate([
            'username'=>['required', 'unique:users,username'],
            'password'=>['required'],
            'retype_password'=>['required', 'same:password']
        ]);
        User::create($validation);
        return 'String Sukses';
    }
}

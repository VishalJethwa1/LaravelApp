<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenticController extends Controller
{
    //Registration
    public function registration()
    {
        //return view('auth.registration');
        return view('index');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:reg_user',
            'password'=>'required|min:8|max:12'
        ]);

        $user = new register();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $result = $user->save();
        if($result){
            return back()->with('success', 'You have registered successfully.');
        } else {
            return back()->with('fail', 'Something wrong!');
        }
    }

    //Login
    public function login()
    {
        return view('auth.login');
        //return view('index');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email:reg_user',
            'password'=>'required|min:8|max:12'
        ]);

        $user = register::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not match');
            }
        } else {
            return back()->with('fail', 'This email is not register');
        }
    }

        //Dashboard
    public function dashboard()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = register::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout()
    {
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

}
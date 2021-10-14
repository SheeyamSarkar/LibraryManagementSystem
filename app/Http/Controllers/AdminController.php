<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function registration(){
        return view('auth.registration');
    }

    function save(Request $request){

        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:10',
        ]);

        $admin= new Admin;
        $admin->username=$request->username;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $save=$admin->save();

        if($save){
            return back()->with('success','Successfully Added');
        }
        else{
            return back()->with('fail','Something wrong. Please try again');
        }
    }

    function cklogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:10',
        ]);

        $userInfo= Admin::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','Incorrect Email');
        }
        else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
            
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        return view('admin.dashboard');
    }
}

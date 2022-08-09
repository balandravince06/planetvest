<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        
        $request->validate([
            'userfname'=>'required',
            'userlname'=>'required',
            'email'=>'required|email|unique:users',
            'userpassword' => 'required_with:password_confirmation|same:password_confirmation|min:6|max:20|confirmed',
            'password_confirmation' => 'required|min:6|max:20|same:userpassword'
        ]);

        $user = new User;
        $user->userfname = $request->userfname;
        $user->userlname = $request->userlname;
        $user->email = $request->email;
        $user->userpassword = Hash::make($request->userpassword);
        $user->password_confirmation = Hash::make($request->password_confirmation);
        $save = $user->save();

        if($save){
            return back()->with('success', 'New User has been successfully added.');
        }else{
            return back()->with('fail', 'Something went wrong.');
        }
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'userpassword'=>'required|min:6|max:20'
        ]);

        $userInfo = User::where('email', '=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'We do not recognize your email address.');
        }else{
            if(Hash::check($request->userpassword, $userInfo->userpassword)){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('/homepage');
            }else{
                return back()->with('fail', 'Incorrect password.');
            }
        }
    }
}

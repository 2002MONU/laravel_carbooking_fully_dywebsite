<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginLogoutController extends Controller
{
    public function login(){
        return view('admin.account.login');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password'=>$request->password])){
            return redirect('dashboard')->with('success',"Admin Login Successfully");
        }else{
            return redirect('admin/login')->with('error',"Opps! Check Email and Password");
        }
    }

    public function adminlogout(){
        Session::flush();
        Auth::logout();
        return redirect('admin/login')->with('success',"Admin Logout Successfully");
    }

    public function changePassword(){
        return view('admin.account.changePassword');
    }

    public function changePasswordpost(Request $request){
         $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|max:8',
            'conf_password' => 'required|same:new_password',
         ]);
         if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error',"Current Password is invalid");
         }

         //return $request;
         if(strcmp($request->get('old_password'), $request->get('new_password')) == 0)
            {
                return redirect()->back()->with("error", "New Password cannot be same as your current password.");
            }
         User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
       //  $user->save();
          return redirect('dashboard')->with('success',"Password Change Successfully");
    }
}

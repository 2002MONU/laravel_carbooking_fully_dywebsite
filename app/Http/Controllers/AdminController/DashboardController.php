<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Enquiry;
use App\Models\User;
use App\Models\Message;

class DashboardController extends Controller
{
        public function dashboard(){
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();
        $enquiry = Enquiry::distinct()->count('id');  // count enquiry details
        $message = Message::distinct()->count('id');  // count contact details
        // $users = User::find()
        return view('admin.dashboard', compact('user', 'enquiry', 'message'));
    }
}

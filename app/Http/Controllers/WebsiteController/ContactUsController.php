<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Footerdetail;
class ContactUsController extends Controller
{
    public function contactUs(){
         $footerdetails = Footerdetail::find(1);
         // Generate a random 4-digit numeric CAPTCHA code
    $captcha = rand(100000, 999999);

    // Store the CAPTCHA code in the session
    session(['captcha' => $captcha]);
        return view('website.contactUs', compact('captcha', 'footerdetails'));
    }
 // send contact message 
    public function contactUspost(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'message' => 'required|max:150',
            'captcha' => 'required|numeric|digits:6'
        ]);

        $message = new Message;
        $captcha = session('captcha');

        // Validate the submitted CAPTCHA code
        if ($request->input('captcha') == $captcha) {
            $message->fname = $request->fname;
            $message->lname = $request->lname;
            $message->mobile = $request->mobile;
            $message->email = $request->email;
            $message->message = $request->message;

            $message->save();
            return redirect('contactUs')->with('success',"Message Send Successfully");
        } else {
            // CAPTCHA code is incorrect, redirect back with error message
            return back()->withErrors(['captcha' => 'Invalid CAPTCHA code. Please try again.']);
        }
    }

   public function contactmessage(){
    $contactmessage = Message::orderBy('id','desc')->paginate(2);
    return view('admin.contactmessage', compact('contactmessage'));
   }
   
  public function contactdelete($id){
       $contact = Message::find($id)->delete();
       return redirect()->back()->with('success','Message Delete Successfully');
  }

}

<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function addenquiry(Request $request){
       $request->validate([
        'name' => 'required',
        'mobile' => 'required',
        'services' => 'required',
       ]);
       $enquiry = new Enquiry;
       $enquiry->name = $request->name;
       $enquiry->mobile = $request->mobile;
       $enquiry->email = $request->email;
       $enquiry->services = $request->services;
       $enquiry->save();

       return redirect('/')->with('success','Enquiry send Successfully');
    }

    public function enquirymessage(){
        $enquiry = Enquiry::orderBy('id','desc')->paginate(2);
        return view('admin.enquirymessage',compact('enquiry'));
    }
  
    // enquiry message delete
    public function enquirydelete($id){
        $enquiry = Enquiry::find($id)->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }
}

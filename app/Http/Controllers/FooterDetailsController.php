<?php

namespace App\Http\Controllers;

use App\Models\Footerdetail;
use Illuminate\Http\Request;

class FooterDetailsController extends Controller
{
    public function  footerdetails(){
        $footerdetails = Footerdetail::find(1);
         return view('admin.footer.footerdetails', compact('footerdetails'));
    }

    public function footerupdate($id){
        $footerdetails = Footerdetail::find($id);
        return view('admin.footer.footerupdate',compact('footerdetails'));
    }

    public function footerpost(Request $request,$id){
              $request->validate([
                'mobile' => 'required',
                'email' => 'required',
                'address' => 'required',
                'location' => 'required',
                'about' => 'required',
                'logo' => 'mimes:png,jpg,jpeg:max:1024|dimensions:min_width:300,min_height:300,max_width:1600,max_height:1600'
              ]);

           $footerdetails = Footerdetail::find($id); 
           
           if($request->hasFile('logo')){
          $logoname= $request->file('logo');
          $logo = $logoname->getClientOriginalName();
          $logoname->move('website/logo',$logo);
          $footerdetails->logo = $logo;
           }

           $footerdetails->mobile = $request->mobile;
           $footerdetails->email = $request->email;
           $footerdetails->address = $request->address;
           $footerdetails->location = $request->location;
           $footerdetails->about = $request->about;
           $footerdetails->save();

           return redirect('footerdetails')->with('success','Footer Details Update successfully');
    }
}

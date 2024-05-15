<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\Abouthome;
use Illuminate\Http\Request;
use App\Models\Aboutpage;
use App\Models\Carbrand;
use App\Models\Footerdetail;

class AboutsUsController extends Controller
{
    public function aboutUs(){
        $about = Aboutpage::find(1);
        $carbrands = Carbrand::take(4)->get();
        $footerdetails = Footerdetail::find(1);
        $abouthome = Abouthome::find(1);
        return view('website.aboutUs', compact('about', 'carbrands', 'footerdetails','abouthome'));
    }
     public function abouthomedetails(){
        $abouthome = Abouthome::find(1);
        return view('admin.aboutpage.abouthomedetails', compact('abouthome'));
     }

    public function aboutHome($id){
        $aboutpage = Abouthome::find($id);
        return view('admin.aboutpage.edithome', compact('aboutpage'));
    }

    public function aboutedit(Request $request,$id){
         $request->validate([
            'heading' => 'required',
            'image' => 'max:1024',
         ]);

         $abouthome = Abouthome::find($id);
         if($request->hasFile('image')){
            $filename = $request->file('image');
            $image = $filename->getClientOriginalName();
            $filename->move('website/aboutpage',$image);
            $abouthome->image = $image;
         }

         $abouthome->heading = $request->heading;
         $abouthome->save();
         return redirect('abouthomedetails')->with('success','About Banner Update Successfully');
    }
    
}

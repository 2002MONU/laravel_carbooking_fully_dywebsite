<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Aboutpage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function aboutpagedetails(){
        $about = Aboutpage::find(1);
        return view('admin.aboutpage.aboutdetails',compact('about'));
    }

    public function aboutpage($id){
        $about = Aboutpage::find($id);
        return view('admin.aboutpage.editaboutpage', compact('about'));
    }

    public function aboutpageedit(Request $request,$id){
             $request->validate([
                'happycust' => 'required',
                'corpsurved' => 'required',
                'openshow' => 'required',
                'experience' => 'required',
                'image' => 'mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=400,max_width=2000,max_height=900',

             ]);

             $about = Aboutpage::find($id);
             if($request->hasFile('image')){
                $filename = $request->file('image');
                $image = $filename->getClientOriginalName();
                $filename->move('website/aboutpage',$image);
                    // Delete the old image
            $oldImagePath2 = public_path('website/aboutpage/'. $about->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
                $about->image = $image;
                
             }
             $about->happycust = $request->happycust;
             $about->corpsurved = $request->corpsurved;
             $about->openshow = $request->openshow;
             $about->experience = $request->experience;
             $about->save();

             return redirect('aboutpagedetails')->with('success','Update Successfully');
    }
}

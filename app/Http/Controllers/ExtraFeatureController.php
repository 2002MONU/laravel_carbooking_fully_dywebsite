<?php

namespace App\Http\Controllers;

use App\Models\Extrafeature;
use Illuminate\Http\Request;

class ExtraFeatureController extends Controller
{
    public function extrafeatured(){
        $extrafeature = Extrafeature::get();
        return view('extrafeature.extrafeature', compact('extrafeature'));
    }

  public function  addextrafeatured(){
    return view('extrafeature.addextrafeature');
  }

    public function addextrafeaturedPost(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|max:1024|dimensions:min_width=400,min_height=400,max_width=600,max_height=600',
        ]);
        $extrafeature = new Extrafeature;
        $image = $request->file('image')->getClientOriginalExtension();
        $filename = time().'.'.$image;
        $filepath = $request->file('image')->move(public_path('website/extrafeature'),$filename);

        $extrafeature->title = $request->title;
        $extrafeature->image = $filename;

        $extrafeature->save();
        return redirect('extrafeatured')->with('success','Extra Feature Add Data Successfully');
    }


    public function extrafeatureddelete($id){
        $extrafeature = Extrafeature::where('id',$id)->first();
        if($extrafeature){
            $imagePath1 = public_path('website/extrafeature/' . $extrafeature->image);
            if(file_exists( $imagePath1)){
                unlink($imagePath1);
            }
            $extrafeature->delete();
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Image record not found.');
        }

       // return redirect()->back()->with('success','Extra Feature Delete Data Successfully');
    }


    public function extrafeatureupdate($id){
        $extrafeature = Extrafeature::find($id);
        return view('extrafeature.extrafeatureupdate', compact('extrafeature'));
    }

    public function updateextraPost(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'image' => 'max:1024|dimensions:min_width=400,min_height=400,max_width=600,max_height=600',
        ]);

        $extrafeature = Extrafeature::find($id);
        if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move('website/extrafeature',$filename);
        $oldImagePath2 = public_path('website/extrafeature/'.$extrafeature->image);
        if (file_exists($oldImagePath2)) {
            unlink($oldImagePath2);
        }
        $extrafeature->image = $filename;
        }
        $extrafeature->title = $request->title;
        $extrafeature->save();
        return redirect('extrafeatured')->with('success','Extra Feature Update Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyfeature;
class KeyFeaturedController extends Controller
{
    public function keyfeatured(){
        $keyfeature = Keyfeature::get();
        return view('keyfeature.featuredetails', compact('keyfeature'));
    }

    public function addkeyfeatured(){
        return view('keyfeature.addkeyfeature');
    }

    public function addkeyfeaturedPost(Request $request){
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'image' => 'required|max:1024|dimensions:min_width=300,min_height=300,max_width=600,max_height=600',
        ]);
       $keyfeature = new Keyfeature;

       $image = $request->file('image')->getClientOriginalExtension();
       $filename =time() . '.' .$image;
       $filepath = $request->file('image')->move(public_path('website/keyfeature'),$filename);

       $keyfeature->title = $request->title;
       $keyfeature->paragraph = $request->paragraph;
       $keyfeature->image = $filename;
       $keyfeature->save();
       return redirect('keyfeatured')->with('success','Key Featured Add Successfully');
    }

    public function featureupdate($id){
     $keyfeature = Keyfeature::find($id);
        return view('keyfeature.featureupdate', compact('keyfeature'));
    }

    public function keyfeatureupdate(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'image' => 'max:1024|dimensions:min_width=300,min_height=300,max_width=600,max_height=600',
        ]);

        $keyfeature = Keyfeature::find($id);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move('website/keyfeature',$filename);
            $keyfeature->image = $filename;
        }
        $keyfeature->title = $request->title;
        $keyfeature->paragraph = $request->paragraph;
        $keyfeature->save();

        return redirect('keyfeatured')->with('success',"Key Features Add Successfully");
    }

    public function keyfeatureddelete($id){
        $keyfeature = Keyfeature::where('id', $id)->first();
        if ($keyfeature) {
            // Get the path of the images in the public folder
            $imagePath1 = public_path('website/keyfeature/' . $keyfeature->image);
           // $imagePath2 = public_path('website-images/serviceimages/' . $image->logoimage);
        
            // Check if the files exist before attempting deletion
            if (file_exists($imagePath1)) {
                // Delete the first image
                unlink($imagePath1);
            }
               // Delete the record from the database
            $keyfeature->delete();
            
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HudrabadPackage;
class HydrabadPackagesController extends Controller
{
    public function hydrabadpakagesdetails(){
        $hydrapackage = HudrabadPackage::get();
        return view('hydrabadpackages.hydrapackdetails' ,compact('hydrapackage'));
    }

    public function addhydrapackage(){
       return view('hydrabadpackages.addhydrapackage');
    }
  // Hydyabad package add image and city 
    public function addhydrapackagepost(Request $request){
         $request->validate([
            'city' => 'required',
            'image' => 'required|max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=800',
         ]);

         $hydrapackage = new HudrabadPackage;
         $img_extension = $request->file('image')->getClientOriginalExtension();
         $name =  time() . '.' . $img_extension;
         $pathimage = $request->file('image')->move(public_path('website/hydrapackages'), $name);
         
         $hydrapackage->image = $name;
         $hydrapackage->city = $request->city;
         $hydrapackage->save();
         return redirect('hydrabadpakagesdetails')->with('success','Add Packages Successfully');
    }

    public function hydrapackageupdate($id){
        $package = HudrabadPackage::find($id);
        return view('hydrabadpackages.updatehbpackage', compact('package'));
    }

    public function uphydrapackage(Request $request,$id)
    {
        $request->validate([
            'city' => 'required',
            'image' => 'max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=800'
         ]);
         $hydrapackage =  HudrabadPackage::find($id);
         if($request->hasFile('image'))
         {
            $filename = $request->file('image');
            $image = $filename->getClientOriginalName();
            $filename->move('website/hydrapackages',$image);
                // Delete the old image
        $oldImagePath2 = public_path('website/hydrapackages/' . $hydrapackage->image);
        if (file_exists($oldImagePath2)) {
            unlink($oldImagePath2);
        }
        $hydrapackage->image = $image;

       }
    
        $hydrapackage->city = $request->city;
        $hydrapackage->save();
        return redirect('hydrabadpakagesdetails')->with('success','Add Packages Successfully');
   }


   public function hydrapackagedelete($id){
    $package = HudrabadPackage::where('id', $id)->first();
    if ($package) {
        // Get the path of the images in the public folder
        $imagePath1 = public_path('website/hydrapackages/' . $package->image);
        // Check if the files exist before attempting deletion
        if (file_exists($imagePath1)) {
            // Delete the first image
            unlink($imagePath1);
        }
         // Delete the record from the database
        $package->delete();
        
        return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
    } else {
        return redirect()->back()->with('error', 'Image record not found.');
    }
   }
}
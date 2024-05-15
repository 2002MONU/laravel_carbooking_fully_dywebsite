<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\HomePremium;
use Illuminate\Http\Request;

class HomePremiumController extends Controller
{
    public function addpremiumtravels(){
        return view('admin.indexpage.addpremiumtravels');
    }

    public function premiumTravelsPost(Request $request){
              $request->validate([
                'heading' => 'required:max:40',
                'slug' => 'required|max:50',
                'para1' => 'required',
                'para2' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=500,max_width=1000,max_height=650',
                'status' => 'required',
              ]);
      $premium = new HomePremium;
            
      $img_extension = $request->file('image')->getClientOriginalExtension();
      $name =  time() . '.' . $img_extension;
      $pathimage = $request->file('image')->move(public_path('website/homeimages'), $name); //image save public folder\
    
      $premium->heading = $request->heading;
      $premium->slug = $request->slug;
      $premium->para1 = $request->para1;
      $premium->para2 = $request->para2;
      $premium->status = $request->status;
      $premium->image = $name;
      $premium->save();

      return redirect('premiumTravelsdetails')->with('success','Added Successfully');

    }
   
    public function premiumTravelsdetails(){
        $premium = HomePremium::get();
        return view('admin.indexpage.premiumdetails', compact('premium'));
        }

        public function updatepremium($id){
          $premium = HomePremium::find($id);
        return view('admin.indexpage.premiumupdate', compact('premium'));
        }

        public function updatepremiumtravels(Request $request,$id){
            $request->validate([
                'heading' => 'required:max:40',
                'slug' => 'required|max:50',
                'para1' => 'required',
                'para2' => 'required',
                'image' => 'mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=500,max_width=1000,max_height=650',
                'status' => 'required',
              ]);

              $premium = HomePremium::find($id);
              if($request->hasFile('image')){
                $filename = $request->file('image');
                $imagename = $filename->getClientOriginalName();
                $filename->move('website/homeimages',$imagename);
                $oldImagePath = public_path('website/homeimages/' . $premium->image);
             if (file_exists($oldImagePath)) {
                 unlink($oldImagePath);
             }
                $premium->image = $imagename;
               }
               $premium->heading = $request->heading;
               $premium->slug = $request->slug;
               $premium->para1 = $request->para1;
               $premium->para2 = $request->para2;
               $premium->status = $request->status;
            //    $premium->image = $name;
               $premium->save();
         
               return redirect('premiumTravelsdetails')->with('success','Updated  Successfully');
         }

         public function deletepremium($id){
            $premium = HomePremium::where('id', $id)->first();
            if ($premium) {
                // Get the path of the images in the public folder
                $imagePath1 = public_path('website/homeimages/' . $premium->image);
               
                // Check if the files exist before attempting deletion
                if (file_exists($imagePath1)) {
                    // Delete the first image
                    unlink($imagePath1);
                }
            $premium->delete();
                
                return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'Image record not found.');
            }
           
        
         }
}

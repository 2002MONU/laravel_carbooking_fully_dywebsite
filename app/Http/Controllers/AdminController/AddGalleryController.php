<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AddGalleryController extends Controller
{
    public function gallerydetails(){
        $gallery = Gallery::get();
        return view('admin.gallery.gallerydetails',compact('gallery'));
    }

    public function addgallery(){
        return view('admin.gallery.addgallery');
    }

    public function addgalleryPost(Request $request){
       // return $request;
         $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=850',
         ]);

         $gallery = new Gallery;
         $img_extension = $request->file('image')->getClientOriginalExtension();
         $name =  time() . '.' . $img_extension;
         $pathimage = $request->file('image')->move(public_path('website/gallery'), $name);
         
         $gallery->image = $name;
         $gallery->save();
         return redirect('gallerydetails')->with('success','Add Gallery Image Successfully');
    }

    public function gallerydelete($id){
        $gallery = Gallery::where('id', $id)->first();
        if ($gallery) {
            // Get the path of the images in the public folder
            $imagePath1 = public_path('website/gallery/' . $gallery->image);
           // $imagePath2 = public_path('website-images/serviceimages/' . $image->logoimage);
        
            // Check if the files exist before attempting deletion
            if (file_exists($imagePath1)) {
                // Delete the first image
                unlink($imagePath1);
            }
           
               // Delete the record from the database
            $gallery->delete();
            
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }

    public function updategallery($id){
        $gallery = Gallery::find($id);
        return view('admin.gallery.updategallery', compact('gallery'));
        }

        public function  updategallerypost(Request $request,$id) {
            $request->validate([
                'image' => 'mimes:jpeg,png,jpg|max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=850',
             ]);
              $gallery = Gallery::find($id);
             if($request->hasFile('image')){
                $filename = $request->file('image');
                $image = $filename->getClientOriginalName();
                $filename->move('website/gallery',$image);
                    // Delete the old image
            $oldImagePath2 = public_path('website/gallery/' . $gallery->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
                $gallery->image = $image;
                $gallery->save();
             }
             return redirect('gallerydetails')->with('success','Update Gallery Image Successfully');
        }
}

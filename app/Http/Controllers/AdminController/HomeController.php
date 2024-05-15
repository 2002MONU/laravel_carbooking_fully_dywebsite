<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Homebanner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homebanner($id){
        $home = Homebanner::find($id);
        return view('admin.indexpage.homebanner', compact('home'));
    }

    public function homebannerpost(Request $request,$id){
        // return $request;
        $request->validate([
            'heading' => 'required',
            'bgimage' => 'mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1600,min_height=1000,max_width=4000,max_height=2000',
        ]);
        $home = Homebanner::find($id);
        if($request->hasFile('bgimage')){
            $filename = $request->file('bgimage');
            $imagename = $filename->getClientOriginalName();
            $filename->move('website/homeimages',$imagename);
            $oldImagePath = public_path('website/homeimages/'.$home->image);
         if (file_exists($oldImagePath)) {
             unlink($oldImagePath);
         }
            $home->image = $imagename;
           }
           $home->heading = $request->heading;
           $home->save();
           return redirect('homeBannerDetails')->with('success','Banner Update Successfully');
       }

       public function homeBannerDetails(){
        $home = Homebanner::find(1);
        return view('admin.indexpage.homebannerdetails', compact('home'));
       }
}

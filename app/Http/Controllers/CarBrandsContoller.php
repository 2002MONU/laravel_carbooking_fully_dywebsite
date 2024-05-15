<?php

namespace App\Http\Controllers;

use App\Models\Carbrand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarBrandsContoller extends Controller
{
    public function carbrandsdetails(){
        $carbrands = Carbrand::get();
        return view('admin.carbrands.carbrandsdetails', compact('carbrands'));
    }

    public function addcarbrands(){
        return view('admin.carbrands.addcardbrands');
    }

    public function caraddbrands(Request $request){
        $request->validate([
            'carname' => 'required',
            'carimage' => 'required|max:1024|dimensions:min_width=300,min_height=300,max_width=600,max_height=600',
        ]);

        $carbrands = new Carbrand;
        $imgname = $request->file('carimage')->getClientOriginalExtension();
        $imagename = time() . '.' . $imgname;
        $imgpath = $request->file('carimage')->move(public_path('website/carbrands'), $imagename);

       $carbrands->carname = $request->carname;
       $carbrands->carimage = $imagename;
       $carbrands->save();
       return redirect('carbrandsdetails')->with('success', 'Car Brands Image Add Successfully');
    }

    public function carsupdate($id){
        $carbrands = Carbrand::find($id);
        return view('admin.carbrands.carsupdate' ,compact('carbrands'));
    }

    public function carupdateposte(Request $request,$id){
        $request->validate([
            'carname' => 'required',
            'carimage' => 'max:1024|dimensions:min_width=300,min_height=300,max_width=600,max_height=600'
        ]);

        $carbrands = Carbrand::find($id);
        if($request->hasFile('carimage')){
            $filename = $request->file('carimage');
            $image = $filename->getClientOriginalName();
            $filename->move('website/carbrands',$image);
                // Delete the old image
        $oldImagePath2 = public_path('website/carbrands/' . $carbrands->image);
        if (file_exists($oldImagePath2)) {
            unlink($oldImagePath2);
        }
            $carbrands->carimage = $image;
           
         }
         $carbrands->carname = $request->carname;
         $carbrands->save();

         return redirect('carbrandsdetails')->with('success','Car Brands Details Update Successfully');
    }

    public function carbrandsdelete($id){
        $carbrands = Carbrand::where('id',$id)->first();

        if($carbrands){
            $imagepath = public_path('website/carbrands/'.$carbrands->carimage);

            if(file_exists($imagepath)){
                unlink($imagepath);
            }

            $carbrands->delete();
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }
}

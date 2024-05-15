<?php

namespace App\Http\Controllers;

use App\Models\Vizagpackage;
use Illuminate\Http\Request;

class VizagPackageController extends Controller
{
    public function vizagpakagesdetails(){
        $vizagpackage = Vizagpackage::get();
        return view('vizagpackage.vizagpakagesdetails', compact('vizagpackage'));
    }

    public function addvizagpackage(){
        return view('vizagpackage.addvizagpackage');
    }

    public function vizagpackagepost(Request $request){
            $request->validate([
                'cityname' => 'required',
                'cityimage' => 'required|image|max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=800',
            ]);

            $vizagpackage = new Vizagpackage;
            $imagename = $request->file('cityimage')->getClientOriginalExtension();
            $filename = time() . '.' . $imagename;
            $filepath = $request->file('cityimage')->move(public_path('website/vizagcity'), $filename);

            $vizagpackage->cityname = $request->cityname;
            $vizagpackage->cityimage = $filename;
            $vizagpackage->save();

            return redirect('vizagpakagesdetails')->with('success','Vizag city Add Successfully');
    }

    public function vizagcityupdate($id){
        $package = Vizagpackage::find($id);
        return view('vizagpackage.updatevizagpackage', compact('package'));
    }

    public function vizagupdate(Request $request,$id){
             $request->validate([
                'cityname' => 'required',
                'image' => 'max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=800'
             ]);

          $package = Vizagpackage::find($id);
          if($request->hasFile('cityimage')){
            $filename = $request->file('cityimage');
            $file = $filename->getClientOriginalName();
            $filename->move('website/vizagcity',$file);
            $package->cityimage = $file;
          }   
          $package->cityname = $request->cityname;
          $package->save();
          return redirect('vizagpakagesdetails')->with('success','Vizag Packages city add successfully');
    }
}

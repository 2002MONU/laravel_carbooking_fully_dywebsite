<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vizagpackage;
use App\Models\Vizagprice;
use Illuminate\Support\Facades\DB;
class VizagPriceController extends Controller
{
    public function addprice(){
        $package = Vizagpackage::get();
        return view('vizagprice.addvizagprice' , compact('package'));
    }
     // view vizag city details
    public function vizagpricedetails(){
        $package =   DB::table('vizagpackages')
        ->select('vizagprices.id','vizagpackages.cityname','vizagprices.cartype','vizagprices.acprice','vizagprices.acprice','vizagprices.price','vizagprices.fueltype','vizagprices.seats','vizagprices.extrakm','vizagprices.image')
        ->join('vizagprices','vizagpackages.id','=','vizagprices.city_id')
        ->get();
        return view('vizagprice.vizagdetails', compact('package'));
}
 // add vizag price and car details
    public function addvizagprice(Request $request){
        $request->validate([
            'cartype' => 'required',
            'acprice' => 'required',
            'price' => 'required',
            'fueltype' => 'required',
            'seats' => 'required',
            'extrakm' => 'required',
            'city_id' => 'required',
            'image' => 'required|max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=1000',
            ]);

            $price = new Vizagprice;
            $file = $request->file('image')->getClientOriginalExtension();
            $filename = time() . '.' .$file;
            $filepath = $request->file('image')->move(public_path('website/vizagcity'),$filename);

            $price->cartype = $request->cartype;
            $price->acprice = $request->acprice;
            $price->price = $request->price;
            $price->fueltype = $request->fueltype;
            $price->seats = $request->seats;
            $price->extrakm = $request->extrakm;
            $price->city_id = $request->city_id;
            $price->image = $filename;
            $price->save();

            return redirect('vizagprice')->with('success','Vizag Price Add Successfully');

    }

    public function vizagpricedelete($id){
                 $package = Vizagprice::where('id',$id)->first();
                 if($package){
                     
                    $imagepath = public_path('website/vizagcity/'. $package->image);
                    if(file_exists($imagepath)){
                        unlink($imagepath);
                    }
                    $package->delete();
                    return redirect()->back()->with('success', 'Images and associated record deleted successfully.');

                 }else{
                    return redirect()->back()->with('error', 'Image record not found.');

                 }
                }

                  public function  vizagpriceupdate($id) {
                    $package = Vizagpackage::get();
                    $result = DB::table('vizagpackages')
                    ->select('vizagprices.id', 'vizagpackages.cityname', 'vizagprices.cartype', 'vizagprices.acprice', 'vizagprices.acprice', 'vizagprices.price', 'vizagprices.fueltype', 'vizagprices.seats', 'vizagprices.extrakm', 'vizagprices.image', 'vizagprices.city_id')
                    ->join('vizagprices', 'vizagpackages.id', '=', 'vizagprices.city_id')
                    ->where('vizagprices.id', $id)
                    ->first();
                      return view('vizagprice.updateprice',compact('package','result')); 
                  }

                  public function  vizagpupdate(Request $request,$id){
                     $request->validate([
                        'cartype' => 'required',
                        'acprice' => 'required',
                        'price' => 'required',
                        'fueltype' => 'required',
                        'seats' => 'required',
                        'extrakm' => 'required',
                        'city_id' => 'required',
                        'image' => 'max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=1000',
                     ]);

                     $price = Vizagprice::find($id);
                     if($request->hasFile('image')){
                        $file = $request->file('image');
                        $filename = $file->getClientOriginalName();
                        $filepath = $request->file('image')->move('website/vizagcity/'.$file);

                        $oldpath = public_path('website/vizagcity/'.$price->image);
                        if(file_exists($oldpath)){
                            unlink($oldpath);
                        } 
                        $price->image = $filename;
                     }

                    $price->cartype = $request->cartype;
                    $price->acprice = $request->acprice;
                    $price->price = $request->price;
                    $price->fueltype = $request->fueltype;
                    $price->seats = $request->seats;
                    $price->extrakm = $request->extrakm;
                    $price->city_id = $request->city_id;
                    $price->save();

                    return redirect('vizagprice')->with('success','Vizag Prices details Update Successfully');
                  }
}

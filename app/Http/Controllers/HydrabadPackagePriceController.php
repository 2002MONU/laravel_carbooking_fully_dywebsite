<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HudrabadPackage;
use App\Models\HypackagePrice;
use Illuminate\Support\Facades\DB;
class HydrabadPackagePriceController extends Controller
{
    public function hydrabadpakagesview(){
     $package =   DB::table('hudrabad_packages')
            ->select('hypackage_prices.id','hudrabad_packages.city','hypackage_prices.cartype','hypackage_prices.acprice','hypackage_prices.acprice','hypackage_prices.price','hypackage_prices.fueltype','hypackage_prices.seats','hypackage_prices.extrakm','hypackage_prices.image')
            ->join('hypackage_prices','hudrabad_packages.id','=','hypackage_prices.city_id')
            ->get();
        return view('hydrabadprice.hydrabadpakagesview', compact('package'));
    }

    public function hydrabadprice(){
        $city = HudrabadPackage::get();
        return view('hydrabadprice.addhydraprice', compact('city'));
    }
    
    public function hydrabadpriceadd(Request $request){
            $request->validate([
                'cartype' => 'required',
                'acprice' => 'required',
                'price' => 'required',
                'fueltype' => 'required',
                'extrakm' => 'required',
                'seats' => 'required',
                'city_id' => 'required',
                'image' => 'required|max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=1000',
            ]);

        $pakageprice = new HypackagePrice;
        $img_extension = $request->file('image')->getClientOriginalExtension();
        $name =  time() . '.' . $img_extension;
        $pathimage = $request->file('image')->move(public_path('website/hydrapackages'), $name);
        $pakageprice->cartype = $request->cartype;
        $pakageprice->acprice = $request->acprice;
        $pakageprice->price = $request->price;
        $pakageprice->fueltype	 = $request->fueltype;
        $pakageprice->extrakm = $request->extrakm;
        $pakageprice->seats = $request->seats;
        $pakageprice->city_id = $request->city_id;
        $pakageprice->image = $name;
        $pakageprice->save();

        return redirect('hydrabadpakagesview')->with('success','Package Price Add Successfully');
    }

  // Hydrabad packages delete 
    public function packagepricedelete($id){
        $pricedelete = HypackagePrice::where('id', $id)->first();
        if ($pricedelete) {
            // Get the path of the images in the public folder
            $imagePath1 = public_path('website/hydrapackages/' . $pricedelete->image);
           // $imagePath2 = public_path('website-images/serviceimages/' . $image->logoimage);
        
            // Check if the files exist before attempting deletion
            if (file_exists($imagePath1)) {
                // Delete the first image
                unlink($imagePath1);
            }
           
               // Delete the record from the database
            $pricedelete->where('hypackage_prices.id',$id)->delete();
            
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }

    // Hydrabad packages updates 
    public function packagepriceupdate($id){
        $city = HudrabadPackage::get();
        $result = DB::table('hudrabad_packages')
        ->select('hypackage_prices.id', 'hudrabad_packages.city', 'hypackage_prices.cartype', 'hypackage_prices.acprice', 'hypackage_prices.acprice', 'hypackage_prices.price', 'hypackage_prices.fueltype', 'hypackage_prices.seats', 'hypackage_prices.extrakm', 'hypackage_prices.image', 'hypackage_prices.city_id')
        ->join('hypackage_prices', 'hudrabad_packages.id', '=', 'hypackage_prices.city_id')
        ->where('hypackage_prices.id', $id)
        ->first();
      return view('hydrabadprice.priceupdate',compact('result', 'city'));
    }

    public function packagepricepost(Request $request,$id){
        $request->validate([
            'cartype' => 'required',
            'acprice' => 'required',
            'price' => 'required',
            'fueltype' => 'required',
            'extrakm' => 'required',
            'seats' => 'required',
            'city_id' => 'required',
            'image' => 'max:1024|dimensions:min_width=800,min_height=400,max_width=1500,max_height=1000',
        ]);

        $pakageprice = HypackagePrice::find($id);
        if($request->hasFile('image')){
            $filename = $request->file('image');
            $image = $filename->getClientOriginalName();
            $filename->move('website/hydrapackages',$image);
                // Delete the old image
        $oldImagePath2 = public_path('website/hydrapackages/' . $pakageprice->image);
        if (file_exists($oldImagePath2)) {
            unlink($oldImagePath2);
        }
            $pakageprice->image = $image;
            
         }
        $pakageprice->cartype = $request->cartype;
        $pakageprice->acprice = $request->acprice;
        $pakageprice->price = $request->price;
        $pakageprice->fueltype	 = $request->fueltype;
        $pakageprice->extrakm = $request->extrakm;
        $pakageprice->seats = $request->seats;
        $pakageprice->city_id = $request->city_id;
        $pakageprice->save();

        return redirect('hydrabadpakagesview')->with('success','Package Price Update Successfully');
    }
}

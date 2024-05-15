<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HudrabadPackage;
use App\Models\HypackagePrice;
use App\Models\Footerdetail;
use App\Models\Vizagpackage;
use App\Models\Vizagprice;
use App\Models\Keyfeature;

class PackagesController extends Controller
{
    public function packages(){
        $hydrapackage = HudrabadPackage::get();
        $footerdetails = Footerdetail::find(1);
        $packagevizag = Vizagpackage::get();
        return view('website.packages', compact('hydrapackage', 'footerdetails', 'packagevizag'));
    }

    public function package_price($city_id){
        $package = HypackagePrice::where('city_id', $city_id)->get();
        $footerdetails = Footerdetail::find(1);
       
        return view('hydrabadprice.package_price', compact('package', 'footerdetails'));
    }

    public function  vizagpackage_price($city_id){
        $packagees = Vizagprice::where('city_id', $city_id)->get();
        $footerdetails = Footerdetail::find(1);
        return view('vizagpackage.vizagpackage_price', compact('packagees', 'footerdetails'));
    }
}

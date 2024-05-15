<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\Homebanner;
use Illuminate\Http\Request;
use App\Models\Ourachievement;
use App\Models\Homepremium;
use App\Models\Carbrand;
use App\Models\Footerdetail;
use App\Models\Keyfeature;
use App\Models\Extrafeature;
class IndexPageController extends Controller
{
    public function indexPage(){
        $home = Homebanner::find(1);
        $premium = HomePremium::where('status',1)->take(3)->get();
        $ourachievement = Ourachievement::find(1);
        $carbrands = Carbrand::take(6)->get();
        $footerdetails = Footerdetail::find(1);
        $extrafeature = Extrafeature::get();
        return view('website.index' ,compact('premium', 'home', 'ourachievement', 'carbrands', 'footerdetails', 'extrafeature'));
    }

    public function premiumview($slug){
        $premium = HomePremium::where('slug', $slug)->first();
        $premiumsss = HomePremium::orderBy('id','desc')->take(3)->get();
        $footerdetails = Footerdetail::find(1);
        $keyfeature = Keyfeature::get();
        return view('website.premiumview', compact('premium','premiumsss', 'footerdetails', 'keyfeature'));
    }
}

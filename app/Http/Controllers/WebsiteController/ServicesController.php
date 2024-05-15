<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\Homepremium;
use Illuminate\Http\Request;
use App\Models\Footerdetail;
class ServicesController extends Controller
{
    public function sercices(){
        $premium = HomePremium::where('status',1)->get();
        $footerdetails = Footerdetail::find(1);
        return view('website.services', compact('premium', 'footerdetails'));
    }
}

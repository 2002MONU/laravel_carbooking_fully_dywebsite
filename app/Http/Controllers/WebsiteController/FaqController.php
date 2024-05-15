<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footerdetail;
class FaqController extends Controller
{
    public function faq(){
        $footerdetails = Footerdetail::find(1);
        return view('website.faq', compact('footerdetails'));
    }
}

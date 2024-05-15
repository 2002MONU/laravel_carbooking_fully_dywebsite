<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Footerdetail;
class GalleryController extends Controller
{
    public function gallery(){
        $gallery = Gallery::get();
        $footerdetails = Footerdetail::find(1);
        return view('website.gallery', compact('gallery', 'footerdetails'));
    }
}

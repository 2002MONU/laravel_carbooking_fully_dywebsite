<?php

namespace App\Http\Controllers;

use App\Models\Findcar;
use Illuminate\Http\Request;
use App\Models\Perfectcar;
class FindPerfectCarController extends Controller
{
    // public function findPerfectCar(Request $request){
    //       $request->validate([
           
    //       ]);
    //           $addperfectcar = new Perfectcar;
    //           $addperfectcar->city = $request->city;  
    //           $addperfectcar->pickupdate = $request->pickupdate;  
    //           $addperfectcar->pickuptime = $request->pickuptime;  
    //           $addperfectcar->package = $request->package;  
    //           $addperfectcar->cartype = $request->cartype;  
    //           $addperfectcar->save();

    //           return redirect('/')->with('success');
    // }

    public function findcarinform(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'location' => 'required',
            'pickdate' => 'required',
            'picktime' => 'required',
            'package' => 'required',
            'cartype' => 'required',
        ]);

        $findcar = new Findcar;
        $findcar->name = $request->name;
        $findcar->mobile = $request->mobile;
        $findcar->location = $request->location;
        $findcar->pickdate = $request->pickdate;
        $findcar->picktime = $request->picktime;
        $findcar->package = $request->package;
        $findcar->cartype = $request->cartype;
        $findcar->save();

        return redirect('/')->with('success',"Message Send Successfully");
    }
}

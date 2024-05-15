<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Ourachievement;
use Illuminate\Http\Request;

class OurAchievementController extends Controller
{
      public function achievementdetails(){
        $ourachievement = Ourachievement::find(1);
        return view('admin.indexpage.achievementdetails', compact('ourachievement'));
      }

    public function ourachievement($id){
        $ourachievement = Ourachievement::find($id);
        return view('admin.indexpage.ourachievement',compact('ourachievement'));
    }

    public function ourachievementpost(Request $request,$id){
       $request->validate([
        'happycust'  => 'required',
        'corpsur'  => 'required',
        'experience'  => 'required',
        'surcity'  => 'required',
       ]);

       $ourachievement = Ourachievement::find($id);
       $ourachievement->happycust = $request->happycust;
       $ourachievement->corpsur = $request->corpsur;
       $ourachievement->experience = $request->experience;
       $ourachievement->surcity = $request->surcity;
       $ourachievement->save();

       return redirect('achievementdetails')->with('success',"Update Successfully");
    }
}

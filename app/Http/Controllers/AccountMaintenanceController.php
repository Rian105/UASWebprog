<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\App;

class AccountMaintenanceController extends Controller
{
    public function showProfile($lang)
    {
        App::setlocale($lang);
        return view('AccountMaintenance',[
            "Prof" => User::all()
        ]);
    }

    public function destroy($id)
    {
        DB::table('Users')->where('id','like',$id)->delete();
        return redirect()->back();
    }
}

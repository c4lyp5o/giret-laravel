<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KPAS;

class KPASController extends Controller
{
    function getData(){
        $users=KPAS::all();
        return view('list',['users'=>$users]);
    }

    function addData(Request $req){
        $member = new KPAS;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->sex = $req->sex;
        $member->save();
        return redirect('/dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function submitdata(Request $request){
        $email = $request->input("email");
        $pass = $request->input("pass");
        $value = admin::where([
            ['email','=',$email],
            ['password','=',$pass]
        ])->get();
        if(count($value)==1){
            $request->session()->put("email",$email);
            $request->session()->put("pass",$pass);
            return redirect("/index");

        }else{
            $request->session()->put("email",null);
            $request->session()->put("pass",null);
            return redirect("/admin")->with("error","Incorrect Password !!");
        }
    }
    public function index(){
        return view("admin.index");
    }
}

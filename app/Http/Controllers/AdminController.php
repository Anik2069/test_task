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
           foreach($value as $val){
               $request->session()->put("id",$val["id"]);
           }
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
    public function change(Request $request){
        $pass =$request->session()->get("email");
        return view("admin.profile",compact("pass"));
    }

    public function submitchange(Request $request)
    {
        $change = admin::find($request->session()->get("id"));
        if ($request->input("passw") == $request->session()->get("pass")) {
            if ($request->input("passw1") == $request->input("passw2")) {
                $change->password = $request->input("passw1");
                $request->session()->put('pass', $request->input("passw1"));
                $change->save();
                return redirect("/change_password")->with("success", "Change SUccessfully");
            } else {
                return redirect("/change_password")->with("error", "Password not matched");
            }

        } else {
            return redirect("/change_password")->with("error", "Password not matched");
        }


    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect("/admin")->with("success","Logout Successfully!!!!");
    }
}

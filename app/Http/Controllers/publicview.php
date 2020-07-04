<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

class publicview extends Controller
{
    //
    public function index(){
        $value = posts::where([
            ["section","=","section_1"],
            ["approved","=","1"]
        ])->orderBy('id', 'desc')->paginate(5);
        $value1 = posts::where([
            ["section","=","section_2"],
            ["approved","=","1"]
        ]) ->orderBy('id', 'desc')->paginate(5);
        return view("public.index",compact("value","value1"));
    }
}

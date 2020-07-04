<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class publicview extends Controller
{
    //
    public function index(){

        $value = posts::where([
            ["section","=","section_1"],
            ["approved","=","1"]
        ])->orderBy('id', 'desc')->paginate(5);

        $value->setPageName('page');
        $value1 = posts::where([
            ["section","=","section_2"],
            ["approved","=","1"]
        ]) ->orderBy('id', 'desc')->paginate(5);
        $value1->setPageName('other_page');
        return view("public.index",compact("value","value1"));
    }

    public function change($id){
        $value = posts::find($id);
        return view("public.view",compact('value'));
    }
}

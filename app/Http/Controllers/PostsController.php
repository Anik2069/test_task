<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view("admin.posts");
    }

    public function submitdata(Request $request)
    {
//Approve 1 means publish
        //Approve 0 means created but no published
        if (isset($_POST['Publish'])) {
            if ($request->input("type") == "image") {
                $validatedData = $request->validate([
                    'title' => 'required|unique:posts|max:255',
                    'des' => 'required',
                    'image' => 'required',
                ]);


                $post = new posts();
                $post->date = date('d M,Y');
                $post->title = $request->input("title");
                $post->type = $request->input("type");
               // $post->image = $request->input("image");
                $post->section = $request->input("section");
                $post->des = $request->input("des");
                $post->approved = "1";
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '1.' . $extension;
                    $file->move('uploads/', $filename);
                    $post->image = $filename;
                }
                $post->save();

            } elseif ($request->input("type") == "video") {
                $validatedData = $request->validate([
                    'title' => 'required|unique:posts|max:255',
                    'des' => 'required',
                    'utubeline' => 'required',
                ]);
                $text= explode("=",$request->input("utubeline"));
               // dd($text[1]);
                $post = new posts();
                $post->date = date('d M,Y');
                $post->title = $request->input("title");
                $post->type = $request->input("type");
                $post->utubeline = $text[1];
                $post->section = $request->input("section");
                $post->des = $request->input("des");
                $post->approved = "1";
                $post->save();
            }
            return redirect('/create_post')->with("success","Post is Created and Published Successfully");
        } else {
            if ($request->input("type") == "image") {
                $validatedData = $request->validate([
                    'title' => 'required|unique:posts|max:255',
                    'des' => 'required',
                    'image' => 'required',
                ]);
                $post = new posts();
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '1.' . $extension;
                    $file->move('uploads/', $filename);
                    $post->image = $filename;
                }
                $post->date = date('d M,Y');
                $post->title = $request->input("title");
                $post->type = $request->input("type");
               // $post->image = $request->input("image");
                $post->section = $request->input("section");
                $post->des = $request->input("des");
                $post->approved = "0";
                $post->save();

            } elseif ($request->input("type") == "video") {
                $validatedData = $request->validate([
                    'title' => 'required|unique:posts|max:255',
                    'des' => 'required',
                    'utubeline' => 'required',
                ]);
                $text= explode("=",$request->input("utubeline"));
                $post = new posts();
                $post->date = date('d M,Y');
                $post->title = $request->input("title");
                $post->type = $request->input("type");
                $post->utubeline = $text[1];
                $post->section = $request->input("section");
                $post->des = $request->input("des");
                $post->approved = "0";
                $post->save();
            }
            return redirect('/create_post')->with("success","Post is Created ");

        }



    }
     public function view_all(){
        $value = posts::orderBy('id', 'DESC')->paginate(10);;
        return view("admin.preview",compact("value"));
     }


      public function change($id){
        $value = posts::find($id);
        if($value['approved']=="1"){
           $value->approved="0";
        }elseif ($value['approved']=="0"){
            $value->approved="1";
        }

        $value->save();
        return redirect("/view_all");
      }
    public function dlt($id){
        $value = posts::find($id);
        $value->delete();
        return redirect("/view_all");
    }

}

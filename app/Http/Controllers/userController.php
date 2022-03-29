<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class userController extends Controller {


    public function create(){

      return view('create');
    }

    public function store(Request $request){


       $data = $this-> validate($request,[
            "title"     => "Required|String",
            "content"   => "Required|max:50",
            "image"     => "Required|image|mimes:jpg,png,jpeg",

        ]);

        $imageame = time() .'.'.$request->image->extension();
        $request->image->move(public_path('uploads') , $imageame);

        dd($data);

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function Demo01(Request $request) {
      return 1;
    }

    function Demo02(){
      return "This is  my first conteroller action";
    }

    function Demo03(Request $request){
      return $request->email;
    }

    function DemoAction0(Request $request){
      // return $request->email;
      // return $request->pass;
      return $request->input();

      // $request->file();
      // $request->header();
      // $request->cookies();
      // $request->ip();
      // $request->accept();
    }

    function demoAction1(Request $request){
      $name = $request->input('name');
      $age = $request->input('age');
      return "Name is{$name}, Age is{$age}";
    }

    function demoAction2(Request $request){
      // $myfile = $request->file('image_file');
      $photo = $request->file('photo');
      $size = filesize($photo);
      $type = filetype($photo);
      $originalName = $photo->getClientOriginalName();
      $extension = $photo->extension();
      
      return [$size, $type, $originalName, $extension];
    }
    
    
    function demoAction3(Request $request) {
      $photo = $request->file('photo');
      // $photo-> move(public_path('upload'), $photo->getClientOriginalName());
      $photo->storeAs('photo', $photo->getClientOriginalName());

      
      return 1;

    }

}

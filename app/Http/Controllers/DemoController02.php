<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController02 extends Controller
{
    function create(Request $request){
      $num1 = $request->num1;
      $num2 = $request->num2;
      $sum = $num2+$num1;

      Log::critical($sum);

      return $sum;
    }


    function SessionPut(Request $request):bool
    {
      $email = $request->email;
      $request->session()->put('userEmail',$email);
      return true;
    }
    function SessionPull(Request $request):string
    {
      return $request->sessionn()->pull('userEmail');
    }
    function SessionForget(Request $request):bool
    {
      $request->sessionn()->forget('userEmail');
      return true;
    }
    function SessionFlush(Request $request):bool
    {
      $request->sessionn()->flush('userEmail');
      return true;
    }


    function create02(Request $request) {
      $pin = $request->header('pin');
      $city = $request->input('city');
      $post = $request->input('postcode');
      $name= $request->name;
      $age= $request->age;

      // return "$pin, $city, $post, $name, $age";
      return array(
        'pin'=>$pin,
        'city'=>$city,
        'postcode'=>$post,
        'name'=>$name,
        'age'=>$age
      );
    }
}

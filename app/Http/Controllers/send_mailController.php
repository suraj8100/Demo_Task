<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class send_mailController extends Controller
{
    public function index(Request $request)
    {
        $info=array(
            'url'=>'http://127.0.0.1:8000/login',
            'username'=>$request->username,
            'password'=>$request->password,
        );
     
    Mail::send('mail',$info,function($message) use ($request){
        $message->to($request->email)
        ->subject('Thank You for registering please log in using the below URL');
    $message->from('surajbeldar8100@gmail.com', 'Suraj');
    });
    }
}

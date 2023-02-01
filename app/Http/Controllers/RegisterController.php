<?php

namespace App\Http\Controllers;

use App\Models\table_citys;
use App\Models\table_countrie;
use App\Models\table_register;
use App\Models\table_state;
use App\Models\User;
use Illuminate\Contracts\Session\Session ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session as FacadesSession;
use Psy\CodeCleaner\ReturnTypePass;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $data=new User;
        $data->user_name=$request->username;
        $data->password=Hash::make($request->password);
        $data->email=$request->email;
        $data->mobile=$request->mob_no;
        $data->country_id=$request->country;
        $data->states_id=$request->state;
        $data->city_id=$request->city;
        $data->save();
        $info=array(
            'url'=>'http://127.0.0.1:8000/login',
            'username'=>$request->username,
            'password'=>$request->password,
        );
     
    Mail::send('mail',$info,function($message) use ($request){
        $message->to($request->email)
        ->subject('Thank You for registering please log in using the below URL');
    $message->from('surajbeldar8100@gmail.com');
    });
        return redirect('/registration');
    }
    public function view()
    {
        $data=table_countrie::all();
        return view('registration',compact('data'));
    }
    public function checkdata($data)
    {
         $result=User::find($data);
         if(!$result)
         {
            return "Email alredy exist";
         }
        else
        {
            return "";
        }
      
    }
    public function getState($country_id)
    {
        return $subcat=table_state::where('country_id',$country_id)->get();
    }
    public function getCity($id)
    {
        return $subcat=table_citys::where('states_id',$id)->get();
    }

    public function log_to(Request $request)
    {
        if (Auth::attempt($request->only('user_name','password'))) {
           return redirect('/dashboard');
        }
        else
        {
            return "login failed";
            return redirect('/login')->withErrors('detail not match');
        }
    }
    public function log_out(Request $request)
    {   
        FacadesSession::flush();
        Auth::logout();
        return redirect('login');
    }
    public function dashboard()
    {   
     $result = table_countrie::join('table_states','table_states.id','table_countries.id')
    ->join('table_citys','table_citys.id','table_states.id')
    ->join('users','users.city_id','table_citys.id')
    ->where('users.id',Auth::id())
    ->first();

     return view('dashboard',compact('result'));
    }

}

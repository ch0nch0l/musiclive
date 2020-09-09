<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use App\manage_listener;
use App\listeners_plans;
class frontEndController extends Controller
{
    
    public function create_listener(request $request){
        $request->validate([
            'email' => 'unique:listeners'
        ]);
        $manage_listener = new manage_listener;
        $manage_listener->name = $request->name;
        $manage_listener->email = $request->email;
        $manage_listener->country_code = $request->country_code;
        $manage_listener->phone = $request->phone;
        $manage_listener->password =  md5($request->password);
        $manage_listener->save();
        $listeners_plans = new listeners_plans;
        $listeners_plans->listener_id = $manage_listener->id;
        $listeners_plans->plan_id = 
        session()->flash('message', 'Your ID is been created, Your email is '.$request->email);
        session(['loggedin' => true]);
        return redirect('/');
    }

    public function logout(){
        session(['loggedin' => false]);
        return redirect('/');
    }
    public function login(request $request){
        $cr_pass  = md5($request->loginPassword);
        $logger = manage_listener::where(['email'=>$request->email, 'password'=>$cr_pass, 'status'=>1])->get();
        if(count($logger)>0){
            session(['loggedin' => true]);
            session()->flash('message', 'Logged In Successfully');
            return redirect('/');
        }else{
            session(['loggedin' => false]);
            return redirect('/')->withErrors('Invalid Emaill and Password');
        }
        
        
    }

}

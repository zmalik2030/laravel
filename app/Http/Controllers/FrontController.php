<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\first_model as first_m;
use App\User ;
use Image;
use Gate;

class FrontController extends Controller
{
    //
    public function index(){
        
         
        return view("front");
    }
    public function edit( $id){
        
        $data_u=first_m::where("id",$id)->get();
       
        if($data_u){
           
            $users =  first_m::get();  
            $data['users']=$users;
            $data['use']=$data_u;
            return view("first",$data);
        }else{
            return redirect('first/');
        }
    }
    public function dashboard(){
        
            
             return view("front_dash");
       
       
    }
    public function logout(){
        echo Auth::id();
         Auth::logout();
         return redirect("front");
    }
    public function add(Request $request){
       // print_r(Input::get('name'));
      $user_m=new User();
      $user_m->name=$request->name;
      $user_m->email=$request->email;
      $user_m->password=bcrypt($request->password);
      $user_m->isAdmin="no";
      $user_m->save();
            return redirect('front/')->with('msg','Data Inserted Successfully');
       
    }
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isAdmin' => 'no'])) {
                return redirect('front/dashboard');
        }else{
            return redirect('front/')->with('msg','Try Again');
        }
    }
}

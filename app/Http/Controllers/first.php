<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests;
use App\first_model as first_m;
use Image;
use Gate;

class first extends Controller
{
    //
    public function index(){
        $post=1;
        if(GATE::allows("update-post",$post)){

        }else{
            echo "no";
        }
        $users =  first_m::get();  
        $data['users']=$users;
         
        return view("first",$data);
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
    public function add(Request $request){
       // print_r(Input::get('name'));
       $this->validate($request, [
            'name' => 'required',
        ]);
        $post=array(1,1);
        if(Gate::allows("update-post")){
            echo "yes";
            die();
        }
        exit();
        $file = $request->file('first_file');
                //$path=$request->first_file->getPathName();
       // $file_path=$file->getRealPath();
        //$file_name=$file->getClientOriginalName();
        //print_r($path); die();
        //print_r($request->file('first_file')); die();
        //$file_ext=$request->first_file->extension();
        //$file=$path.$file;
        //$file_path=$file_path."/".$file_name;
         //$path=getcwd(). "\n";
         //$path=$path."\images";
        //echo $path;
        $img = Image::make($file)->resize(300, 200);
        $filename  = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('images/' . $filename);
        $img->save($path);
        
        //var_dump($img->response('jpg')); die();
        exit();

       
        $name=$request->input('name');
        $id=$request->input('id');
       if($request->input('id')!=''){
            first_m::where('id', $id)
            ->update(['name' =>$name]);;  
            return redirect('first/')->with('msg','Data Updated Successfully');
       }else{        
           
            first_m::insert(array('name'=>$name));  
            return redirect('first/')->with('msg','Data Inserted Successfully');
       }
    }
}

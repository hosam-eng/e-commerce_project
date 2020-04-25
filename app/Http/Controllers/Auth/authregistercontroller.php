<?php

namespace App\Http\Controllers\Auth;
use App\admin;
use App\cat;
use App\product;
use App\user;
use App\Http\Controllers\Controller;
use App\Http\Controllers\myCon;
use Illuminate\Http\Request;
use Auth;

class authregistercontroller extends Controller
{
	 public function __construct()
    {
        $this->middleware('guest');
    }


    
    public function showRegisterForm()
    {
      return view('auth.register');
    }
   

    public function register(Request $request)
    {
      $bool=false;
      $user=new user();
      $ob=user::all();
    
      foreach ($ob as $u) 
      {
        if($u->email == $request->input('email') || $request->input('password') != $request->input('password_confirmation'))
        {
         $bool=true;
        }
    }
      if($bool)
      {
          return redirect()->back()->withInput($request->only('name','email','remember'));
      }
      else
      {
       $e=$request->input('email');
       $request->session()->put('UserData');
       $request->session()->put('U_email');

      $request->session()->push('U_email',$e);
      $user->name=$request->input('name');
      $user->email=$request->input('email');
      $user->password=$request->input('password');
      $user->save();
        $categores=cat::all();
        $product=product::all();
        foreach ($categores as $cat) {
            $cat->num=0;
            foreach ($product as $prod) {
                if($cat->id == $prod->cat_id)
                 $cat->num +=1;
            }
        }
        $arr=array('categores' => $categores );
        $arr2=array('product' => $product );
        return View('UserPages/home',$arr,$arr2);

  
    }
  }
  
}

<?php

namespace App\Http\Controllers\Auth;
use App\admin;
use App\cat;
use App\product;
use App\user;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Controllers\myCon;
use Illuminate\Http\Request;
use Auth;

class authusercontroller extends Controller
{
	 public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLoginForm()
    {
    	return view('auth.login');
    }

    public function login(Request $request)
    {
    	$this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:6'
    	]);

      $user_email=$request->input('email');
      $request->session()->push('U_email',$user_email);
      $bool=false;
      $user=user::all();
      foreach ($user as $u)
       {
          if($u->email==$request->input('email') && $u->password==$request->input('password'))
          {
              $bool=true;
              break;
          }
       }
      if($bool)
     {
        $categores=cat::all();
        $product=product::all();
        foreach ($categores as $cat)
          {
            $cat->num=0;
            foreach ($product as $prod) 
            {
                if($cat->id == $prod->cat_id)
                 $cat->num +=1;
            }
          }
        
        $arr=array('categores' => $categores );
        $arr2=array('product' => $product );
        return View('UserPages/home',$arr,$arr2);
     }
     else
   return redirect()->back()->withInput($request->only('email','remember'));

    } 
  
}

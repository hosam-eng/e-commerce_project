<?php

namespace App\Http\Controllers\Auth;
use App\admin;
use App\cat;
use App\product;
use App\Http\Controllers\Controller;
use App\Http\Controllers\myCon;
use Illuminate\Http\Request;
use Auth;

class authadmincontroller extends Controller
{
	 public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	$this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:6'
    	]);
      
      $admin=admin::all();
      if($admin)
      {
      foreach ($admin as $a) {
          # code...
      
      $e=$a->email;
      $p=$a->password;
        }
     if($e==$request->input('email') && $p==$request->input('password'))
     {
        $editCat=cat::all();
        $arr=array('editCat' => $editCat );
         $product=product::all();
        $arr2=array('product' => $product );
     return view('AdminPages/adminpage',$arr,$arr2);
      }
    }

   return redirect()->back()->withInput($request->only('email','remember'));
    }


   

       
  
}

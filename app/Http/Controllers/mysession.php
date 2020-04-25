<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection as Collection;
use Illuminate\Http\Request;
use App\product;
use App\user;
use App\history;
use Session;
class mysession extends Controller
{ 

    public function login(Request $request)
    {
       $request->session()->put('UserData');
       $request->session()->put('U_email');
     return redirect('home');
    }


     public function Cart(Request $request, $id)
    {
         //$request->session()->forget('UserData');
        $product=product::find($id);
        $product->quantity-= 1;
        $product->save();

        $arr = array('product' => $product );
        $request->session()->push('UserData',$arr);


        $email=$request->session()->get('U_email');
        
        foreach ($email as $e) {
          $user_email=$e;
        }
        $users=user::all();
        foreach ($users as $user) 
        {
            if($user->email==$user_email)
            {
                $out=$request->session()->get('UserData');
                if($out)
                {
                $ob=new history();           
                $ob->U_email=$user_email;
                foreach ($out as $s) 
                {  
                  foreach ($s as $key => $p) {
                    # code...
                  }
                  $ob->prod_name=$p->name;
                  $ob->prod_image=$p->image;
                  $ob->prod_code=$p->code;
                  $ob->prod_price=$p->price;
                  $ob->save();
                }
              }

            }
        }
        return redirect()->back();
       
    }
     public function history(Request $request)
    {
        if($request->session()->has('UserData'))
        {
        $out = $request->session()->get('UserData');
        return view('/UserPages/history')->with('cart',$out);
        }
        else
            return redirect('/home')->with('you should buy any thing first');
   }

    public function history_permentaly(Request $request)
    {
        
           $email=$request->session()->get('U_email');
           foreach ($email as $e) {
             $user_email=$e;
           }
          $user_email=$email;
        $all_product=history::where('U_email',$user_email)->get();  

        return view('UserPages.history_permentaly')->with('product',$all_product);
    }


  public function deletesession(Request $request)
    {
    	$request->session()->forget('UserData');
      $request->session()->forget('U_email');
    	return view("auth.login");
    }
    public function getsession(Request $request)
    {
    	$out= $request->session()->get('UserData');
    	if($request->session()->has('UserData'))
    		foreach ($out as $o) {
          foreach ($o as $s) {
            # code...
    			printf($s);
          }
    		}

    }

}
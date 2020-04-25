<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use App\cat;
use App\admin;


class myCon extends Controller
{
    
   


    /*   
                        **** Admin Pages ****
           
                                                                                                */

    /*public function AdminLogin(Request $request)
    {
        $admin=admin::all();
       // $admin=array('db'=>$admin);
           $e= $request->input('email');
           $p=$request->input('password');
     return view('AdminPages/AdminLogin',compact('e'),compact('p'))->with(['admin'=>$admin]);

        
    }*/
     public function AdminPage()
    {
        $editCat=cat::all();
        $arr=array('editCat' => $editCat );
         $product=product::all();
        $arr2=array('product' => $product );
        return View('AdminPages/AdminPage',$arr,$arr2);
    }


     public function statistics()
    {

      $product=product::all();
        $arr=[];
         $min=0;
       foreach ($product as $p)
        {
          $min=$p->quantity;
            foreach ($product as $s)
            {
              if($min > $s->quantity)
                  $min=$s->quantity;
            }
            foreach ($product as $m) 
            {
              if($m->quantity ==$min || $m->quantity <= $min+3)
                array_push($arr,$m);
            }
            break;
        }

        return view('AdminPages/statistics')->with('arr',$arr);
    }



    public function AddProduct(Request $request)
    {
        if($request->isMethod('post'))
        {
            $newproduct=new product();
            $newproduct->code=$request->input('pro-id');
            $newproduct->image=$request->input('fileupload');
            $newproduct->name=$request->input('pro-name');
            $newproduct->price=$request->input('pro-price');
            $newproduct->quantity=$request->input('pro-q');
            $newproduct->cat_id=$request->input('pro-type');
            $newproduct->save();
        }

        return View('AdminPages/addProduct');
    }
    public function DeleteProduct(Request $request)
    { 
        $delproduct=product::all();
        $arr= array('delproduct' => $delproduct );
        return View('AdminPages/delProduct',$arr);
    }

    public function AddCat(Request $request)
    {
        if($request->isMethod('post'))
        {
            $newcat=new cat();
            $newcat->cat_name=$request->input('name');
            $newcat->cat_code=$request->input('code');
            $newcat->cat_image=$request->input('image');
            $newcat->save();
        }
        return View('AdminPages/addCat');
    }

    public function DeleteCat(Request $request)
    {
        $delcatigory=cat::all();
        $arr= array('delcatigory' => $delcatigory );
        return View('AdminPages/delCat',$arr);
    }
  

    public function ShowCat()
    {
        $editCat=cat::all();
        $arr=array('editCat' => $editCat );
        return view('AdminPages/showcat',$arr);
    }


    public function EditCat(Request $request,$id)
    {
      if($request->isMethod('post'))
        {
          $editCat=cat::find($id);
          $editCat->cat_code=$request->input('cat-id');
          $editCat->cat_name=$request->input('cat-name');
          $editCat->cat_image=$request->input('image');
          $editCat->save();
          return redirect('ShowCat');
        }

      else
        {
          $editCat=cat::find($id);
          $arr = array('editCat' => $editCat );
          return View('AdminPages/EditCat',$arr);
        } 
    }


public function ShowProduct()
    {
        $editproduct=product::all();
        $arr=array('editproduct' => $editproduct );
        return view('AdminPages/ShowProduct',$arr);
    }


    public function EditProduct(Request $request,$id)
    {
      if($request->isMethod('post'))
        {
          $editproduct=product::find($id);
          $editproduct->code=$request->input('pro-id');
          $editproduct->name=$request->input('pro-name');
          $editproduct->price=$request->input('pro-price');
          $editproduct->image=$request->input('fileupload');
          $editproduct->quantity=$request->input('pro-q');
          $editproduct->cat_id=$request->input('pro-cat_code');
          $editproduct->save();
          return redirect('ShowProduct');
        }

      else
        {
          $editproduct=product::find($id);
          $arr = array('editproduct' => $editproduct );
          return View('AdminPages/EditProduct',$arr);
        } 
    }


    /*   
                        **** user Pages ****
           
                                                                                                */
    public function home()
    {
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

    public function category(Request $request, $cat_id)
    {
            # code...
          $product=product::where('cat_id',$cat_id)->get();
          foreach ($product as $p) 
          {
              if($p->quantity==0)
                {
                      $p->id=0;
                }
          }
           $arr=array('product' => $product );
          return view('UserPages/category',$arr);

    }



    // public function login()
    // {
    //     return View('UserPages/login');
    // }
    // public function signup()
    // {
    //     return View('UserPages/signup');
    // }
    public function history()
    {
        return View('UserPages/history');
    }

}

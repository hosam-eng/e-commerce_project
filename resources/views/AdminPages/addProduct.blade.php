<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <meta charset='utf-8'>
    <title> Add Product </title>
</head>
<body>
    <div style="width: 1200px;margin: auto;">
   <form action="AddProduct" method="post" class='form' >
    {{csrf_field()}}
    <h1>New Product' details</h1>
         <br><label> Product ID </label>
  		 <input placeholder="Enter the ID ..." name="pro-id" type="text" >
         <label> Product Name </label>  
 		 <input placeholder="Enter the Name ..." name="pro-name" type="text" >
         <label> Product Price </label>
         <input placeholder="Enter the price ..." name="pro-price" type="text">
         <label> product type </label>
         <input placeholder="Enter the type ..." name="pro-type" type="text" >
         <label> product quantity </label>
         <input placeholder="Enter the type ..." name="pro-q" type="text" >
         <label> Product Image </label> <br><br>
	     <input placeholder="Enter the Photo ..." name="fileupload" type="file">
         <button name="submit" type="submit">A D D</button>
         <button name="submit" formaction="{{ url('AdminPage') }}" 
         formmethod="{{ url('AdminPage') }}" type="submit">The Start</button>
   </form>
</div>
</body>
</html>
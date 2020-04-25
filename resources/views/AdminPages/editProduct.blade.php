<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <meta charset='utf-8'>
    <title> Edit Product </title>
</head>
<body>
   <form class='form' action="/EditProduct/{{$editproduct->id}}" method="post">
    {{csrf_field()}}
    <h1>Existing Product' details</h1>
         <br><label> Product ID </label>
  		 <input placeholder="Enter the ID ..." name="pro-id" type="text" value="{{$editproduct->code}}" >
         <label> Product Name </label>  
 		 <input placeholder="Enter the Name ..." name="pro-name" type="text" value="{{$editproduct->name}}">
         <label> Product price </label>
         <input placeholder="Enter the price ..." name="pro-price" type="text" value="{{$editproduct->price}}">
         <label> Product type </label>
         <input placeholder="Enter the type ..." name="pro-cat_code" type="text" value="{{$editproduct->cat_id}}">
         <label> product quantity </label>
         <input placeholder="Enter the type ..." name="pro-q" type="text" value="{{$editproduct->quantity}}">
         <label> Product Image </label> <br><br>
	     <input placeholder="Enter the Photo ..." name="fileupload" type="file" value="{{$editproduct->image}}">
         <button name="submit" type="submit">Done</button>
         <button name="submit" formaction="{{ url('AdminPage') }}" formmethod="get" type="submit">The Start</button>
   </form>
</body>
</html>
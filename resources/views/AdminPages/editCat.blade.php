<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <meta charset='utf-8'>
    <title> Edit Category </title>
</head>
<body>
      
   <form  class='form' action="/EditCat/{{$editCat->id}}" method="post">
    {{csrf_field()}}
    <h1>Editing Category</h1>
         <br><label> Catigory ID </label>
  		 <input placeholder="Enter the ID ..." name="cat-id" type="text" value="{{$editCat->cat_code}}">
         <label> Catigory Name </label>  
 		 <input placeholder="Enter the Name ..." name="cat-name" type="text" value="{{$editCat->cat_name}}">
         <label> Catigory image </label>  <br><br>
         <input name="image" type="file" value="{{$editCat->cat_image}}" >
         <button name="submit" type="submit">Done</button>
        <button name="submit" formaction="{{ url('AdminPage') }}" formmethod="get" type="submit">The Start</button>
    </form>
</body>
</html>

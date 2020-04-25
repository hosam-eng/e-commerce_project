<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <meta charset='utf-8'>
    <title> Add Category </title>
</head>
<body>
   <form method="post" action="AddCat" class='form'>
     {{csrf_field()}}
    <h1>New Category' details</h1>
         <br><label> Category ID </label>
  		 <input placeholder="Enter the ID ..." name="code" type="text" >
         <label> Category Name </label>  
 		 <input placeholder="Enter the Name ..." name="name" type="text" > 
     <label> Category Name </label>  <br><br>
     <input name="image" type="file" > 
         <button name="submit" type="submit">A D D</button> 
         <button name="submit" formaction="{{ url('AdminPage') }}"  formmethod="{{ url('AdminPage') }}"type="submit">The Start</button>
   </form>
</body>
</html>
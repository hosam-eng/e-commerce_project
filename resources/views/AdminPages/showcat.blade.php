<!DOCTYPE html>
<html>
<head>
	<title>catigory</title>
	 <link href="{{ asset('style2.css') }}" rel="stylesheet">
</head>
<body>
      <div id=header1>
        <div id="header1">
            <img class="logo" src="images/Logo.png"/>
            <ul>
               <li class="listitems"><a href="{{ url('AdminPage') }}">Admin Page</a></li>
                <li class="listitems"><a href="{{ url('login') }}">Logout</a></li>
            </ul>
        </div>
        <br clear="all">
           
<div style="width:500px;text-align: center; left:50px;">
	  <table style="width: 400px;">
	  	<tr>
        <th>image </th>
	  	<th>name</th>
	  	<th>code</th>
	  	<th>Edit</th>
	  </tr>
  @foreach($editCat as $cat)
 <tr>
 <td>  <img style="border-radius: 20px;" class="imgpone" src="images/{{$cat->cat_image}}"></td>
 <td> {{$cat->cat_name}}</td>
 <td>  {{$cat->cat_code}}</td>
 <td><a href="/EditCat/{{$cat->id}}">Edit</a> </td>

</tr>

  @endforeach
    </table>
</div>
</div>
</body>
</html>
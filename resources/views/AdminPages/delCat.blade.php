<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <meta charset='utf-8'>
    <title> Delete Category </title>
</head>
<body>
   <!DOCTYPE html>
<html>
<head>
    <title>catigory</title>
     <link href="{{ asset('style2.css') }}" rel="stylesheet">
</head>
<body>
     <div id="header">
        <div id="header1">
            <img class="logo" src="images/Logo.png"/>
            <ul>
                <li class="listitems"><a href="{{ url('AdminPage') }}">Admin Page </a></li>
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
        <th>Delete</th>
      </tr>
  @foreach($delcatigory as $cat)
 <tr>
 <td>  <img style="border-radius: 20px;" class="imgpone" src="images/{{$cat->cat_image}}"></td>
 <td> {{$cat->cat_name}}</td>
 <td>  {{$cat->cat_code}}</td>
 <td><a href="/DeleteCat/{{$cat->id}}">Delete</a> </td>

</tr>

  @endforeach
    </table>
</div>
</div>
</body>
</html>
</body>
</html>
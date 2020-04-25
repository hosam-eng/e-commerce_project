<!DOCTYPE html>
<html>
<head>
	<title>Statistics</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	 

     <style type="text/css">
h2{text-align: center;}

 a{
      text-decoration: none;
    border:0;
    padding: 10px 20px;
    background:#204051;
    margin:auto;
    text-align:center;
    border:2px solid gray;
    outline:none;
    color:white;
    border-radius:25px;
    cursor:pointer;
}
     
a:hover{
    background-color:white ;
    color: #204051;
}
</style>
</head>
<body>
      <div style="width: 1300px; margin: auto;">
    <div id=his style="width: 1200px;margin-top: 40px">
     <div id="header1">
            <img class="logo" src="images/Logo.png"/>
            <ul>
                <li class="listitems"><a href="{{ url('AdminPage') }}">Admin Page </a></li>
                <li class="listitems"><a href="{{ url('login') }}">Logout</a></li>
            </ul>
        </div>
        <br clear="all">
     
     @if($arr)
      @foreach($arr as $p)
       <div style="width: 250px;background-color: #204051;
    border-radius:10px;
    margin-bottom: 50px;color: white;float: left;margin-left: 20px;">
  
        
<image class='imgpone' img src="/images/{{$p['image']}}" alt="Logo"></image>
<image style="margin-top: -80px;" img src="/images/best-seller.jpeg" alt="Logo"></image>
             <h2> Name: {{$p['name']}}</h2>
             <h2> Price: {{$p['price']}}$ </h2> 
        </div>
      @endforeach
      @endif

</div>
</div>
</body>
</html>
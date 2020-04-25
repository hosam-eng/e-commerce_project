<html>
<head>
    <title> Your Cart </title>
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
   <div style="width: 1200px; margin: auto;">
    <div id=his style="width: 1300px;margin-top: 40px">
      
      <div style="width: 200px; margin: auto;margin-bottom: 50px;" >
      <a  href="{{route('back.home')}}">Back To Home</a>
    </div>
      <div style="width: 1200px;">
     @foreach($cart as $prod)
      @foreach($prod as $p)
       <div style="width: 250px;background-color: #204051;
    border-radius:10px;
    margin-bottom: 50px;color: white;float: left;margin-left: 20px;">
         <li style="list-style-type: none; ">
             <img style="border-radius: 20px;" class="imgpone" src="images/{{$p['image']}}">
             <h2>  Name: {{$p['name']}}</h2>
             <h2>  Price: {{$p['price']}}$</h2></li>
                </div>
            
      @endforeach
     @endforeach
     </div>
</div>
</div>
</body>
</html>
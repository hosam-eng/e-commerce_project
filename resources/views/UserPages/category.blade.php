<html>
<head>
    <title> Products </title>
    <link rel="stylesheet" type="text/css" href="style2.css">

    <style type="text/css">
body{background-color: lightgray;}
 a{
    text-decoration: none;
    border:0;
    padding: 10px 10px;
    background:#204051;
    text-align:center;
    border:2px solid gray;
    color:white;
    border-radius:25px;
    margin-left:600px ; 
}
a:hover{
    background-color:white ;
    color: #204051;
}
</style>
</head>
<body>
    <div id="header">
          <!--   <div id="header1">
                
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
            </div> -->
        <br clear="all">
        <div style="width: 1200px; margin: auto;">
        <a  href="{{route('back.home')}}">Back To Home</a>
        <br clear="all"> 
        @foreach($product as $myproduct)
        @if($myproduct->id !=0 )

             <div  id="home" style="width: 250px;background-color: #204051;border-radius:10px;margin-top:50px; 
    margin-bottom: 50px;color: white;float: left;margin-left: 20px;">
                 <image style="width: 100%;height: 200px;" img src="/images/{{$myproduct->image}}" alt="Logo"></image>
                <h2>Name : {{$myproduct->name}}</h2>
                <h2>Code :  {{$myproduct->code}}</h2> 
                <h2>price : {{$myproduct->price}} $</h2> 
                <h2>R_number : {{$myproduct->quantity}} </h2> 
                <li>
                <a style=" text-decoration: none; display:block;background-color:white;  margin:20px; text-align:center; border:2px solid gray; outline:none; color:#204051; border-radius:25px;padding: 0px 0px" href="{{route('name.cart',[$myproduct->id])}}"><h2>Add to Cart</h2></a></li>
            
            </div>
         @endif
        @endforeach
        <br clear="all">
</div>
</div>
</body>
</html>
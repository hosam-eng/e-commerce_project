<html>
<head>
    <title> Our Categories</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div id="header">
        <div id="header1">
            <img class="logo" src="images/Logo.png"/>
            <ul>
                <li class="listitems"><a href="{{route('history.permentaly')}}">HISTORY</a></li>
                <li class="listitems"><a href="{{ route('session.logout') }}">LOGOUT</a></li>
                
                <li class="searchimg"><a href="{{ url('UserPages.history') }}"><img src="images/header.png"/></a></li>
            </ul>
        </div>
        <br clear="all">
                <ul id="catUL">

                @foreach($categores as $cat)
                <div id="home" style="width: 250px;border-radius:20px;margin-bottom: 50px;color: white;float: left;margin-left: 50px;">

                <li ><a  href="{{route('name.cat',[$cat->id])}}">
                    <img style="border-radius: 20px;" class="imgpone" src="images/{{$cat->cat_image}}">
                  <h2> Name:{{$cat->cat_name}}</h2>
                  <h2> product number:{{$cat->num}}</h2> </a></li>
              </div>
                @endforeach
          
                </ul>
            
        <br clear="all">
        </div>
</body>
</html>
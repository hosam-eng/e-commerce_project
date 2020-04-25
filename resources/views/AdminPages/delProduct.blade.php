<html>
<head>
    <title> Our Categories</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style2.css') }}">
</head>
<body>
    <div id="header">
        <div id="header1">
            <img class="logo" src="images/Logo.png"/>
            <ul>
                <li class="listitems"><a href="{{ url('AdminPage') }}">Admin Page</a></li>
                <li class="listitems"><a href="{{ url('login') }}">Logout</a></li>
            </ul>
        </div>
        <br clear="all">
        <hr size="2px" width="80%" noshade="solid"><br>
            
            <div style="color:#900c3f; text-align: center; font-size: xx-large; font-weight: bolder;"><a name="two">Mobiles</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>
        <div class="products">
           
        @foreach($delproduct as $myproduct)
            @if(preg_match('/^m/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3> <br>
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}} </h3>
                <a href="/DeleteProduct/{{$myproduct->id}}">Delete</a>
            </div>
                @endif
        @endforeach

        <br clear="all">
        <br><br><br><br><br><br>
        <hr size="2px" width="80%" noshade="solid"><br>
        <div style="color:#900c3f;text-align: center; font-size: xx-large; font-weight: bolder;"><a name="one">Laptops</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>

        @foreach($delproduct as $myproduct)
           @if(preg_match('/^l/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3> <br>
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}}</h3>
                <a href="/DeleteProduct/{{$myproduct->id}}">Delete</a>
            </div>
                @endif
        @endforeach

        <br clear="all">
        <br><br><br><br><br><br>
        <hr size="2px" width="80%" noshade="solid"><br>
        <div style="color:#900c3f; text-align: center; font-size: xx-large; font-weight: bolder;"><a name="four">Tvs</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>

        @foreach($delproduct as $myproduct)
               @if(preg_match('/^t/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3> <br>
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}}</h3>
                <a href="/DeleteProduct/{{$myproduct->id}}">Delete</a>
            </div>
                @endif
        @endforeach

        <br clear="all">
        <br><br><br><br><br><br>
        <hr size="2px" width="80%" noshade="solid"><br>
        <div style="color:#900c3f; text-align: center; font-size: xx-large; font-weight: bolder;"><a name="three">Watches</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>

        @foreach($delproduct as $myproduct)
                @if(preg_match('/^w/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3> <br>
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}}</h3>
                <a href="/DeleteProduct/{{$myproduct->id}}">Delete</a>
            </div>
                @endif
        @endforeach
    </div>
        </div>
</body>
</html>
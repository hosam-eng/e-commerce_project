
<html>
<head>
    <title> Admin Page</title>
    <link href="{{ asset('style2.css') }}" rel="stylesheet">
</head>
<body>
    <div id="header">
        <div id="header1">
            <img class="logo" src="images/Logo.png"/>
            <ul>
                <li class="admin_capablites"><span style='color:#f4f4f4;'>*Welcome Admin*</span></li>
                <li class="admin_capablites"><a href="{{ route('admin.statistic')}}">Statistics</a></li>
                <li class="admin_capablites"><a href="{{ route('admin.login') }}">Logout</a></li>
            </ul>
        </div>
        <br clear="all">
        <div id="Categories">

            <div id="loo" style="float: right;">
                <ul id="catUL">
                    <li><a href="{{ url('AddProduct') }}">Add a new product</a></li>
                    <li><a href="{{ url('ShowProduct') }}">Edit a product</a></li>
                    <li><a href="{{ url('DeleteProduct') }}">Delete product</a></li>
                </ul>
            </div>

            <div id="loo">
                <ul id="catUL">
                    <li><a href="{{ url('AddCat') }}">Add a new Category</a></li>
                    <li><a href="{{ url('ShowCat') }}">Edit a category</a></li>
                    <li><a href="{{ url('DeleteCat') }}">Delete category</a></li>
                </ul>
            </div>

            
        </div>
    </div>
    <br clear="all">
     
        <div style="text-align: center; font-size: xx-large; font-weight: bolder;">ALL categories you have</div>
        <hr  size="2px" width="80%" noshade="solid"><br>
  
  <div style="width:1200px;margin: auto;">
  @foreach($editCat as $catigory)          
   <div class="pone">
      <img style="border-radius: 20px;" class="imgpone" src="images/{{$catigory->cat_image}}"><br>
        <h2> ID:</h2><h3> {{$catigory->id}}<br></h3>
        <h2> Name:</h2><h3> {{$catigory->cat_name}}<br></h3>
        <h2> Code:</h2><h3> {{$catigory->cat_code}}<br></h3>
         </div>
  @endforeach
</div>
<br clear="all">
    <div style="text-align: center; font-size: xx-large; font-weight: bolder;">ALL Products you have</div>
        <hr  size="2px" width="80%" noshade="solid"><br>
            
            <div style="color:#900c3f; text-align: center; font-size: xx-large; font-weight: bolder;"><a name="two">Mobiles</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>
        <div class="products">
           
        @foreach($product as $myproduct)
            @if(preg_match('/^m/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3> <br>
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}} </h3><br> 
           @if($myproduct->quantity==0)
              <h3 style="color: red;">the product is finished,<br>
              You need to add this product</h3>
           @endif
            </div>
                @endif
        @endforeach

        <br clear="all">
        <br><br><br><br><br><br>
        <hr size="2px" width="80%" noshade="solid"><br>
        <div style="color:#900c3f;text-align: center; font-size: xx-large; font-weight: bolder;"><a name="one">Laptops</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>

        @foreach($product as $myproduct)
            @if(preg_match('/^l/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3><br> 
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}} </h3><br>
                @if($myproduct->quantity==0)
              <h3 style="color: red;">the product is finished,<br>
              You need to add this product</h3>
           @endif
            </div>
                @endif
        @endforeach

        <br clear="all">
        <br><br><br><br><br><br>
        <hr size="2px" width="80%" noshade="solid"><br>
        <div style="color:#900c3f; text-align: center; font-size: xx-large; font-weight: bolder;"><a name="four">Tvs</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>

        @foreach($product as $myproduct)
               @if(preg_match('/^t/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3> <br>
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}} </h3><br>
                @if($myproduct->quantity==0)
              <h3 style="color: red;">the product is finished,<br>
              You need to add this product</h3>
           @endif
            </div>
                @endif
        @endforeach

        <br clear="all">
        <br><br><br><br><br><br>
        <hr size="2px" width="80%" noshade="solid"><br>
        <div style="color:#900c3f; text-align: center; font-size: xx-large; font-weight: bolder;"><a name="three">Watches</a></div>
        <hr size="5px" width="20%" noshade="solid" color="#204051"><br><br>

        @foreach($product as $myproduct)
                @if(preg_match('/^w/' , $myproduct->code))
             <div class="pone">
                <img style="border-radius: 20px;" class="imgpone" src="images/{{$myproduct->image}}">
                <h2>Name :</h2><h3> {{$myproduct->name}}</h3><br>
                <h2>Id : </h2> <h3> {{$myproduct->code}}</h3> <br>
                <h2>price : </h2> <h3>{{$myproduct->price}} $</h3> <br>
                <h2>Quantity : </h2> <h3>{{$myproduct->quantity}} </h3><br>
                @if($myproduct->quantity==0)
              <h3 style="color: red;">the product is finished,<br>
              You need to add this product</h3>
           @endif
            </div>
                @endif
        @endforeach
    </div>
</div>
</body>
</html>
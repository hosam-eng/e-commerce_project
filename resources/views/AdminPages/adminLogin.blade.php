<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <meta charset='utf-8'>
    <title> Admin </title>
</head>

<body>

     @foreach($admin as $a)
           
    <?php  $db_email=$a->email ?>
    <?php    $db_pass= $a->password?>
           @endforeach
           
    <form class='form' id='form' action="AdminLogin">
        <h1>Log In</h1>
        <h2> User account? | <a style="color: #459fed; text-decoration: none;" href="{{ url('login') }}">Log In</a></h2>
        <div class="signin-section">
            <input placeholder="Enter your e-mail ..." name="email" type="email">
            <input placeholder="Enter your password ..." name="password" type="password">

            <button id='submit' name="submit" type="submit" onclick="
   <?php  if($e==$db_email && $p==$db_pass){?>
          document.getElementById('form').action='/AdminPage';

   <?php }?>
            ">
        Admin Log In</button>
         
        


        </div>
  
    </form>

</body>




</html>
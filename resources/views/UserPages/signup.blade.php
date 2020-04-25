<!-- <!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <meta charset='utf-8'>
    <title> Sign Up </title>
</head>

<body>
   <form class='form' style="width:500px">
    @csrf
     <h1>Sign Up</h1>
       <h2> Already have an account? | <a href="{{ url('login') }}">Log In</a></h2>
       <h2><a style="color: #459fed; text-decoration: none;" href="{{ url('AdminLogin') }}">Admin Log In</a></h2>
         <label> First Name </label>
  		 <input placeholder="Enter your first name ..." name="username" type="text" >
         <label> Second Name </label>  
 		 <input placeholder="Enter your second name ..." name="username" type="text" >
         <label> E - mail </label> 
	     <input placeholder="Enter your e-mail ..." name="email" type="email" >
         <label> Password </label> 
		 <input placeholder="Enter your password ..." name="password" minlength="4" type="password" >
         <button name="submit" formaction="{{ url('login') }}" formmethod="post" type="submit">Sign Up</button>
   </form>
</body>
</html> -->
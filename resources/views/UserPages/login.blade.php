<!-- <!DOCTYPE html>
<html>

<head>
  <link href="{{ asset('style.css') }}" rel="stylesheet">
  <meta charset='utf-8'>
  <title> Login </title>
</head>

<body>
  <form class='form' method="post" action="{{route('login')}}">
    @csrf
    <h1>Log In</h1>
    <h2> Don't have an account? | <a href="{{ url('signup') }}">Sign Up</a></h2>
    <h2><a style="color: #459fed; text-decoration: none;" href="{{ url('AdminLogin') }}">Admin Log In</a></h2>
    <div class="signin-section">
      <input placeholder="Enter your e-mail ..." name="email" type="email">
      <input placeholder="Enter your password ..." name="password" type="password">
      <button name="submit" type="submit">login</button>
    </div>
  </form>

</body>

</html> -->
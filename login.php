<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="active"> Sign In </h2>
    <div class="fadeIn first">
      <img src="images/logo.jpg" id="icon" alt="User Icon" />
    </div>

    
    <form method="POST" action="connectivitylogin.php">
      <input type="text" id="login" class="fadeIn second" name="user" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password"><br>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <form action="welcome.html" method="get"><input type="submit" name="HOME" placeholder="HOME" name="Home" value="HOME"></form>


  </div>
</div>
</body>
</html>

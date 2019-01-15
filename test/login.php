<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mr Message - Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<body>
<h1>Mr Message - Login</h1>
<p>Please Login:</p>
<br>
<form action="/action.php" method="get">
<div class="account_login">
<label for="username"><b>User Name</b></label>
<input type="text" name="username" class="username" placeholder="User Name" required title="this is how you login">
<br>
<br>
<label for="psw"><b>Password</b></label>
<input type="password" name="password" class="psw"placeholder="Password" required title="Keep your password safe">

<br>
<br>
<input type="checkbox" checked="checked" name="remember" title="Don't have to login anymore"> Remember me
<br>
<input class="sumbit_button" type="submit" value="Login" title="Login">
<br>
<br>
<p>Forgot <a href="#" title="Recover you Password">password?</a></p>
<a href="#" title="Register an account">Register Here</a>
<br>
<br>
</div>
</form>
<div class="nav_btn">
<a href="index.php" title="Go home">Home</a>
<a href="login.php" title="Login into your account">Login</a>
</div>
<br>
<footer>
<p title="The Programmer">PiSaucer<p>
</footer>
</body>
</html>
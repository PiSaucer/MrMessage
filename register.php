<html>
<head>
<title>Mr Message - Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<body>
<form action="/account_resgister.php">
    <h1>Mr Message - Register</h1>
    <p>Please fill in this form to create an account.</p>
    
    <div class="register_info">
	<p><span class="error" style="color: red;">* required field</span></p>
	<br>
    <label for="username" title="this is how you login"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="username" required title="this is how you login">
	<span class="error">* </span>
    <br>
    <br>
    <label for="psw" title="Keep your password safe"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required title="Keep your password safe">
	<span class="error">* </span>
    <br>
    <br>
    <label for="psw-repeat" title="Keep your password safe"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required title="Keep your password safe">
	<span class="error">* </span>
    <br>
    <br>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <br>
    <button type="submit" class="registerbtn">Register</button>
    </div>
  <div class="container signin">
    <p>Already have an account? <a href="login.html" title="login screen">Login</a>.</p>
  </div>
</form>
<div class="nav_btn">
<a href="index.php" title="Go home">Home</a>
<a href="login.php" title="Login into your account">Login</a>
</div>
<footer>
<p title="The Programmer">PiSaucer<p>
</footer>
</body>
</html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mr Message - Welcome</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<style>
body {
	font-family: roboto;
	word-spacing: 2px;
	text-align: center;
}

.home_btn {
  margin: 0 auto;
  display:block;
  text-align: center;
  word-spacing: 2px;
}
</style>
</head>
<body>

<h1>Welcome <?php echo
$_GET["user"]
;
?></h1>

<h3>what you like to do?</h3>
<br>

<a href="index.php">Logout of Mr Message</a>
<br>
<br>
<a href="chat.php">Chat</a>
<br>
<br>
<a href="https://chromesettings.herokuapp.com" target="_Blank">Check out PiSaucer's Chrome Settings</a>
<br>
<br>
<div class="home_btn">
<a href="index.php" title="Go home">Home</a>
<a href="chat.php" title="Chat with Friends">Chat</a>
<a href="login.php" title="Log Out into your account">Log-Out</a>
</div>
<br>
<footer>
<p title="The Programmer">PiSaucer<p>
</footer>
</body>
</html>
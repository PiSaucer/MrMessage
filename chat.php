<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mr Message - Chat</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<body>
<h1>Mr Message - Chat</h1>
<form action="/action_page.php">
<div class="friend_selector">
<label for="message" title="Type Your Message Here"><b>Select Your Friend:</b><br></label>
<select>
  <option>Mary</option>
  <option>Jeff</option>
  </select>
</div>
<br>
<div class="chat_message_box">
  <label for="message" title="Type Your Message Here"><b>Message:</b><br></label>
  <textarea name="message" rows="10" cols="30"></textarea>
  <br>
  <button>Send</button>
</div>
</form>
<br>
<div class="nav_btn">
<a href="index.php" title="Go home">Home</a>
<a href="login.php" title="Log Out into your account">Log-out</a>
</div>
<br>
<footer>
<p title="The Programmer">PiSaucer<p>
</footer>
</body>
</html>
<html>
<head>
<title>ONLINE VOTING SYSTEM</title> 
<link rel="stylesheet" href="stylesheet.css">
</head>
<BODY>
    <center>
<div id='headerSection'>
<h1>ONLINE VOTING SYSTEM</h1>

</div>
<HR>
<div id='bodySection'>
<form action="index2.php" method="post">
<h2>Login</h2>
<input type='number' name='mobile' placeholder='Enter Moble'><br><br>
<input type='password' name='password' placeholder='Enter Password'><br><br>
<select name='role'id='dropbox'>
<option value='1'>Voter</option>
<option value='2'>Group</option>
</select><br><br>
<button id="loginbtn" type="submit">Login</button><br><br>
New user?<a href='register.php'>Register here</a>

</form>
</div>
</center>
</BODY>
</html>
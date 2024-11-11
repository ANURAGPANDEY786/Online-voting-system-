<html>
<head>
<title>ONLINE VOTING SYSTEM-REGISTRATION</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<BODY>
    <center>
<style>
#address{
width: 27%;
}
#imagepart{
text-align: center;
border: 2px solid black;
border-radius: 10px;
padding: 10px;
width: 27%;
}
#role{
text-align: center;
border: 2px solid black;
border-radius: 10px;
padding: 10px;
width: 27%;
}
#role select{
border-radius: 10px;
padding: 10px;

}

</style>
<div id="headerSection">
<h1>ONLINE VOTING SYSTEM</h1>
</div>
<HR>
<div id="bodySection">
<h2>REGISTRATION</h2>
<form action="register1.php" method="post" enctype="multipart/form-data">
<input type='text' name='name' placeholder='Enter Name'>
<input type='number' name='mobile' placeholder='Enter Moble'><br><br>
<input type='password' name='password' placeholder='Password'>
<input type='password' name='cpassword' placeholder='Confirm Password'><br><br>

<input id="address" type='text' name='address' placeholder='Address'><br><br>
<center><div id="imagepart">
Upload image:<input type='file' name='photo'>
</div>
<br>
<div id='role'>
Select role:<select name='role'>
<option value='1'>Voter</option>
<option value='2'>Group</option>
</select>
</div>
<br></center>
<button style="padding: 5px;
border-radius: 5px;
background-color: purple;
color: white;
border-radius:5px ;
">Register</button><br><br>
Already user?<a href='index1.php'>Login here</a>
</form>
</div>
</center>
</BODY>
</html>
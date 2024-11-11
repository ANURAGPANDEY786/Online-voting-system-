<?php
include('conn.php');
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$role=$_POST['role'];

if($password==$cpassword)
{
 move_uploaded_file($tmp_name,"$image");
 $insert=mysqli_query($conn,"INSERT INTO user(NAME,MOBILE,ADDRESS,PASSWORD,CPASSWORD,PHOTO,ROLE,STATUS,VOTES) VALUES('$name','$mobile','$address','$password','$cpassword','$image','$role',0,0) ");
if($insert){
     echo "<script>
alert('registration successfull');
window.location.assign('index1.php');
</script>";

 }
else{
     echo "<script>
alert('some error occured');
window.location.assign('register.php');
</script>";
}
}
else{
     echo "<script>
alert('password and confirm password not match');
window.location.assign('register.php');
</script>";
}


?>

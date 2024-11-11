<?php
session_start();
if(!isset($_SESSION['userdata']))
{
    header("location:index1.php");
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];
if($_SESSION['userdata']['STATUS']==0){
    $status='<b style="color:red">Not Voted</b>';
}
else {
    $status='<b style="color:green">Voted</b>';
}
?>
<html>
<head>
<title>ONLINE VOTING SYSTEM-DASHBOARD</title>
<link rel="stylesheet" href="stylesheet.css">

</head>

<body>
    
<style>
    #backbtn{
padding: 5px;
border-radius: 5px;
background-color: purple;
color: white;
border-radius:5px ;
float: left;
margin: 10px;
}
    #logoutbtn{
padding: 5px;
border-radius: 5px;
background-color: purple;
color: white;
border-radius:5px ;
float: right;
margin: 10px;
}
#Profile{
    background-color:white ;
    width: 30%;
    padding: 20px;
float: left;
}
#Group{
    background-color:white ;
    width: 60%;
    padding: 20px;
float: right;
}
#votebtn{
    padding: 5px;
border-radius: 5px;
background-color: purple;
color: white;
border-radius:5px ;
float: left;
}
#mainpanel{
    padding: 10px;
}
#voted{
     padding: 5px;
border-radius: 5px;
background-color: green;
color: white;
border-radius:5px ;
}

</style>
<div id='mainSection'>
<center>
<div id='headerSection'>
<a href='index1.php'><button id='backbtn'>Back</button></a>
<a href='logout.php'><button id='logoutbtn'>Logout</button></a>
<h1>ONLINE VOTING SYSTEM</h1>
</div>
</center>
<hr>
<div id='mainpanel'>
<div id='Profile'>
   <center><img src="<?php echo $userdata['PHOTO'] ?>" height="100px" width="100px" ></center><br><br>
   <b>Name:</b><?php echo $userdata['NAME'] ?><br><br>
   <b>Mobile:</b><?php echo $userdata['MOBILE'] ?><br><br>
   <b>Address:</b><?php echo $userdata['ADDRESS'] ?><br><br>
   <b>Status:</b><?php echo $status ?><br><br>
</div>
<div id='Group'>
    <?php
    if($_SESSION['groupsdata']){
        for($i=0;$i<count($groupsdata);$i++){
            ?>
    <div>
        <img style="float:right" src="<?php echo $groupsdata[$i]['PHOTO']?>" height="100" width="100" >
        <b>Group Name:</b><?php echo $groupsdata[$i]['NAME']?><br><br>
        <b>Votes:</b><?php echo $groupsdata[$i]['VOTES']?><br><br>
        <form action="vote.php" method="post">
            <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['VOTES'] ?>">
            <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['ID'] ?>">
            <?php
           if($_SESSION['userdata']['STATUS']==0){
               ?>
           
           <input type="submit" name="votebtn" value="Vote" id="votebtn"><br><br>Vote
            <?php
             }
           else{
            ?>
  <button disabled type="button" name="votebtn" value="Voted" id="voted" value="Voted"> Voted</button> <br><br>
     
      <?phP } ?>
        </form>
    </div>
<hr>
  <?php      }
    }
?>
</div>
</div>
</body>
</html>
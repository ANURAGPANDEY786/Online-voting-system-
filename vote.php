<?phP
session_start();
include('conn.php');
$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['ID'];
$update_votes=mysqli_query($conn,"UPDATE user SET votes='$total_votes' WHERE id='$gid' ");
$update_user_status=mysqli_query($conn,"UPDATE user SET STATUS=1 WHERE ID='$uid' ");
if($update_votes and $update_user_status){

$groups=mysqli_query($conn,"SELECT ID,NAME,VOTES,PHOTO FROM user WHERE ROLE=2");
$groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
$_SESSION['userdata']['STATUS']=1;
$_SESSION['groupsdata']=$groupsdata;
echo "<script>
alert('VOTING SUCCESSFUL!!');
window.location.assign('dashboard.php');
</script>";
}
else{
echo "<script>
alert('some error occured!!');
window.location.assign('dashboard.php');
</script>";
}
?>
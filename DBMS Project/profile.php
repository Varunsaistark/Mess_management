<?php
$mysqli = new mysqli("localhost", "root", "", "dbms");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($mysqli,"select * from student where rollnumber='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['rollnumber'];


if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";
 
}
?>

<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="profilestyle.css" />
 <title>Login Profile</title>
</head>
<body>

<div id="center">
<div id="center-set"> 
<div id="contentbox">
<?php
$sql="SELECT * FROM student where rollnumber='$loggedin_session'";
$result=mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">

<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username/Roll Number:</div></td>
<td class="tl-4"><?php echo $rows['rollnumber']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Mess ID:</div> </td>
<td class="tl-4"><?php echo $rows['mess_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Hostel Name :</div></td>
<td class="tl-4"><?php echo $rows['hostelname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Contact Number:</div> </td>
<td class="tl-4"><?php echo $rows['contactnumber']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Emergency Number:</div> </td>
<td class="tl-4"><?php echo $rows['sec_contactnumber']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Personnal Mail ID:</div> </td>
<td class="tl-4"><?php echo $rows['email']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">NITC Mail ID:</div> </td>
<td class="tl-4"><?php echo $rows['nitcmail']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Extras Taken:</div> </td>
<td class="tl-4"><?php echo $rows['Extras']; ?></td>
</tr>
</table>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>

</div>
</div>


<div id="login">
<div id="login-sg">
<div id="st"><a href="profupdate.html" id="upd">Update Profile</a></div>

</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>

</body>
</html>
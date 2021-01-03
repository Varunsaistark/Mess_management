<?php

$mysqli = new mysqli("localhost", "root", "", "dbms");


if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php
  
session_start();
$user_check=$_SESSION['login_admin'];
$ses_sql=mysqli_query($mysqli,"select * from admin where Admin_ID='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['Admin_ID'];

if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";
}
?>

<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="profilestyle.css" />
 <title>Admin Profile</title>
</head>
<body>

<div id="center">
<div id="center-set"> 
<div id="contentbox">
<?php
$sql="SELECT * FROM admin where Admin_ID='$loggedin_session'";
$result=mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));
?>
<?php
$rows=mysqli_fetch_array($result);
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Admin Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">

<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Admin ID:</div></td>
<td class="tl-4"><?php echo $rows['Admin_ID']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Admin Name:</div></td>
<td class="tl-4"><?php echo $rows['Admin_Name'];?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Phone Number:</div> </td>
<td class="tl-4"><?php echo $rows['PhNo']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email ID:</div></td>
<td class="tl-4"><?php echo $rows['EMAIL_ID']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Mess ID:</div> </td>
<td class="tl-4"><?php echo $rows['Mess_ID']; ?></td>
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



</div>
</div>
</div>
</br>

</body>
</html>

<?php

mysqli_close($mysqli);
?>
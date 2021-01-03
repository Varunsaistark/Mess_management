<?php

$mysqli = new mysqli("localhost", "root", "", "dbms");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php

if(isset($_POST['submit']))
{

  
session_start();
$user_check=$_SESSION['login_admin'];
$ses_sql=mysqli_query($mysqli,"select * from admin where Admin_ID='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['Admin_ID'];



if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";
}


$conn = new mysqli('localhost','root','','dbms');

$sql = "SELECT Mess_ID AS mid FROM admin WHERE Admin_ID='$loggedin_session'";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($result);
$mess = $row['mid'];

$break = $_POST['Breakfast'];
$break_t = $_POST['Breakfast_t'];
$lunch = $_POST['Lunch'];
$lunch_t = $_POST['Lunch_t'];
$snacks = $_POST['Snacks'];
$snacks_t = $_POST['Snacks_t'];
$dinner = $_POST['Dinner'];
$dinner_t = $_POST['Dinner_t'];
$day = $_POST['day'];
$sql = "UPDATE Mess_Menu
SET
Breakfast='$break',
Breakfast_timmings='$break_t',
Lunch='$lunch',
Lunch_timmings='$lunch_t',
Snacks='$snacks',
Snacks_timmings='$snacks_t',
Dinner='$dinner',
Dinner_timmings='$dinner_t'
WHERE
Mess_ID = '$mess' AND
Day='$day'";
$retval = mysqli_query($mysqli,$sql);



}
?>

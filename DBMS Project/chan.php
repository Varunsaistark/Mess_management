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



$sql = "SELECT Mess_ID AS mess FROM admin WHERE Admin_ID = '$loggedin_session'";
$result = mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));
$row = mysqli_fetch_assoc($result);

$mess = $row['mess'];
$sql1 = "SELECT AVG(Avg_Rating) AS avg FROM Mess_Day_Rating
WHERE Mess_ID='$mess'";
$result1 = mysqli_query($mysqli,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$avg = $row1['avg'];

$sql2 = "UPDATE Mess
SET Previous_Month_Rating='$avg',
Current_Strength=0 WHERE Mess_ID='$mess'";

$retval = mysqli_query($mysqli,$sql2);
$sql3 = "DELETE FROM mess_day_rating WHERE Mess_ID='$mess'";
$retval = mysqli_query($mysqli,$sql3);
$sql4 = "DELETE FROM feedback WHERE Mess_ID='$mess'";
$retval = mysqli_query($mysqli,$sql4);
$sql5 = " UPDATE student
SET mess_id='NULL' WHERE mess_id='$mess'";

$retval = mysqli_query($mysqli,$sql5);

echo "<script>
			window.location.href='adminindex.html';
			alert('Updated successfully');
			</script>";
  }

?>

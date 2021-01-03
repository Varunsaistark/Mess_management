<?php
$mysqli = new mysqli("localhost", "root", "", "dbms");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php


$extra=$_POST['amt'];


if(isset($_POST['submit'])){

	

session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($mysqli,"select * from student where rollnumber='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['rollnumber'];



if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";
 
}




$sql="UPDATE student SET Extras=Extras+$extra where rollnumber='$loggedin_session'";

$result=mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));


	echo "<script>
			window.location.href='student.php';
			alert('Updated successfully');
			</script>";

	



}


if(isset($_POST['delete'])){

	

session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($mysqli,"select * from student where rollnumber='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['rollnumber'];



if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";
 
}




$sql="UPDATE student SET Extras='0' where rollnumber='$loggedin_session'";

$result=mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));


	echo "<script>
			window.location.href='student.php';
			alert('Refreshed successfully');
			</script>";

	



}


mysqli_close($mysqli);



?>
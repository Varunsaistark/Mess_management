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
<?php

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$hostel=$_POST['hostelname'];
$phone=$_POST['phonenumber'];
$emergency=$_POST['emergencynumber'];
$Mail_ID=$_POST['mailid'];
$NITC_Mail=$_POST['nitcmail'];

if(isset($_POST['updt']))
{

	$stmt="UPDATE student SET fname='$firstname',lname='$lastname',hostelname='$hostel',contactnumber='$phone',sec_contactnumber='$emergency',email='$Mail_ID',nitcmail='$NITC_Mail' WHERE rollnumber='$loggedin_session'";

	$result=mysqli_query($mysqli,$stmt) or die( mysqli_error($mysqli));

	echo "<script>
			window.location.href='profile.php';
			alert('Updated successfully');
			</script>";


/*	$stmt->bindparam(':fname',$firstname,PDO::PARAM_STR, 25);
	$stmt->bindparam(':lname',$lastname,PDO::PARAM_STAR,25);
	$stmt->bindparam(':mess_id',$mess_id,PDO::PARAM_STAR,25);
	$stmt->bindparam(':hostelname',$hostel,PDO::PARAM_STAR,25);
	$stmt->bindparam(':contactnumber',$phone,PDO::PARAM_STAR,25);
	$stmt->bindparam(':sec_contactnumber',$emergency,PDO::PARAM_STAR,25);
	$stmt->bindparam(':email',$Mail_ID,PDO::PARAM_STAR,25);
	$stmt->bindparam(':nitcmail',$NITC_Mail,PDO::PARAM_STAR,25);
	*/
	
}
?>
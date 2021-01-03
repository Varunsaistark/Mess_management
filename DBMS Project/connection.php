<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "dbms");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<?php

	$rollnumber=$_POST['rollnumber'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$hostelname=$_POST['hostelname'];
	$contactnumber=$_POST['phonenumber'];
	$sec_contactnumber=$_POST['emergencynumber'];
	$email=$_POST['mailid'];
	$nitcmail=$_POST['nitcmail'];
	$password1=$_POST['password'];
	

	


if (isset($_POST['reg']))
{

$duplicate=mysqli_query($mysqli,"select * from student where rollnumber='$rollnumber'");


	if (mysqli_num_rows($duplicate)>0)
{
echo "<script>
			window.location.href='registration.html';
			alert('Entered Roll Number already exists');
			</script>";
}
else
{

if($_POST['password']===$_POST['conpassword'])
{
	$e=0;
		$stmt=$mysqli->prepare("INSERT into student(rollnumber,fname,lname,hostelname,contactnumber,sec_contactnumber,email,nitcmail,password,Extras) VALUES(?,?,?,?,?,?,?,?,?,?)");

	$stmt->bind_param("sssssssssi",$rollnumber,$fname,$lname,$hostelname,$contactnumber,$sec_contactnumber,$email,$nitcmail,$password1,$e);

	$stmt->execute();	
	$year=date('Y');
	$month=date('F');


	$sq="INSERT INTO Student_Due_Details(RNo,Year,Month)
VALUES('$rollnumber','$year','$month')";
$result = mysqli_query($mysqli,$sq);


	

	echo "<script>
			window.location.href='log.html';
			alert('Successfully registered... Login to continue... ');
			</script>";
}

else
{
	echo "<script>
			window.location.href='registration.html';
			alert('Password and confirm password doesnot match');
			</script>";
}
}
}
mysqli_close($mysqli);

?>



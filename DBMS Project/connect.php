<?php
session_start();
$mysqli=mysqli_connect("localhost","root","");
$db=mysqli_select_db($mysqli,'dbms');
//echo "success1";

if(isset($_POST['id']))
{
	//echo "success2";

	$id=$_POST['id'];
	$password=$_POST['pass'];

	$query= "SELECT * FROM student where rollnumber='$id' AND password='$password'";

	$query_run=mysqli_query($mysqli,$query);

	$query1= "SELECT * FROM admin where Admin_ID='$id' AND Login_Password='$password'";
	$query_run_1=mysqli_query($mysqli,$query1);


	if(mysqli_num_rows($query_run)==1)
	{
		$_SESSION['login_user']=$id;
		echo "<script>
			window.location.href='student.php';
			alert('Logged in Susccesfully');
			</script>";
		
	}

	else if(mysqli_num_rows($query_run_1)==1)		

	{
		$_SESSION['login_admin']=$id;
		echo "<script>
			window.location.href='adminindex.html';
			alert('Admin Logged in Susccesfully');
			</script>";
	}
	else 
	{
		echo "<script>
			window.location.href='log.html';
			alert('Incorrect Username / Password');
			</script>";
		
		
	}

}

?>
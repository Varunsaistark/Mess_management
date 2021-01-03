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

  $roll=$_POST['id'];
$extra=$_POST['extra'];

session_start();
$user_check=$_SESSION['login_admin'];
$ses_sql=mysqli_query($mysqli,"select * from admin where Admin_ID='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['Admin_ID'];



if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";
 
}



    $sql="UPDATE student_due_details SET Extra_Charge=Extra_Charge+$extra WHERE RNo='$roll'";

$result=mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));


  echo "<script>
      window.location.href='adminindex.html';
      alert('Updated successfully');
      </script>";
}

?>





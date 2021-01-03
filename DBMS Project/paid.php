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


$user = $_POST['id'];

$mysqli = new mysqli('localhost','root','','dbms');
$sql = "SELECT PrePaidAmount AS ppa,TotalCharge AS tc, NetDue AS ndue
FROM Student_Due_Details
WHERE RNo='$user'";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($result);
$ndue = $row['ndue'];
$ppa = $row['ppa'];
$tc = $row['tc'];

$apai = $_POST['amt_paid'];

$x= $apai-$ndue;
$date = date("Y/m/d");
if($x>0){ $ppa=$ppa+$x;
            $ndue=0;}
else $ndue=-$x;

$sql1 = "UPDATE Student_Due_Details
SET PrePaidAmount='$ppa',
	NetDue='$ndue',
  AmountPaid='$apai',
	Amount_Paid_Date='$date'
WHERE RNo='$user'";
$retval = mysqli_query($mysqli,$sql1);



echo "<script>
			window.location.href='paid.html';
			alert('Amount Paid Updated Successfully');
			</script>";

}
mysqli_close($mysqli);


?>

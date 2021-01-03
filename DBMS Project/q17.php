<?php

$user = 'B123458CS';
$conn = new mysqli('localhost','root','','proj');
$sql = "SELECT PrePaidAmount AS ppa,TotalCharge AS tc, NetDue AS ndue
FROM Student_Due_Details
WHERE RNo='$user'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$ndue = $row['ndue'];
$ppa = $row['ppa'];
$tc = $row['tc'];
session_start();
$apai = $_POST['pay'];
echo $apai;
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
$retval = mysqli_query($conn,$sql1);
echo "Amount paid Successfully";
?>

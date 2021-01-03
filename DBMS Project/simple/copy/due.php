<?php

$user = 'B123458CS';
$conn = new mysqli('localhost','root','','proj');
$sql = "SELECT hostelname AS mess FROM student WHERE rollnumber='$user'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$mess = $row['mess'];

$sql1 = "SELECT Mess_Month_Charge AS mmc
FROM Mess WHERE Mess_Name='$mess'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$mmc = $row1['mmc'];
$extra = 1000;
$fine= 50;
$mcha = $mmc;
$tcha = $mcha+$extra+$fine;
$sql2 = "SELECT PrePaidAmount AS ppa
FROM Student_Due_Details
WHERE RNo='$user'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$ppa = $row2['ppa'];
$x = $ppa-$tcha;
if($x>0) {$ppa = $x;
		$ndue = 0;}
else {$ppa=0;
        $ndue= -$x;}
$month = date("F");
$year = date("Y");
$sql3 = "UPDATE student_due_details
SET
Fine = '$fine',
NetDue='$ndue',
PrePaidAmount='$ppa',
TotalCharge='$tcha',
Mess_Charge='$mcha',
Extra_Charge='$extra',

	Month='$month'
WHERE RNo='$user'";

$retval = mysqli_query($conn,$sql3);
echo "Successfully changed";
?>
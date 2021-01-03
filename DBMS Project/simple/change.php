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
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($mysqli,"select * from student where rollnumber='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['rollnumber'];



if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";
 
}

$p = $_POST['mess'];

$sql = "SELECT NetDue AS ndue
FROM Student_Due_details
WHERE RNo='$loggedin_session'";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($result);
$ndue = $row['ndue'];

If($ndue>0) {echo "Amount NOT PAID or Amount Paid is not updated yet";}
else
{
  $sql1 = " SELECT Mess_Name AS k, Current_Strength AS curs
 FROM Mess
WHERE Current_Strength<Max_Strength";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
if ($result1->num_rows > 0) {

  while($row1 = $result1->fetch_assoc()) {
    $curs = $row1['curs'];
 if($row1['k']==$p)
 {
   $curs = $curs+1;
   $sql2 = "UPDATE student
   SET hostelname='$p'
   WHERE rollnumber='$user'";

   $retval = mysqli_query($mysqli,$sql2);

   $sql3="UPDATE Mess
   SET Current_Strength='$curs'
   WHERE Mess_Name= '$p'";
   $retval = mysqli_query($mysqli,$sql3);
   echo "Mess updation Success";
   exit();
 }
 }
}

echo "Mess is at full strenght";

}
}
?>

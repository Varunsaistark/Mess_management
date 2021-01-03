<html>

<head>

<style>

table

{

border-style:solid;

border-width:1px;

border-color:blue;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$mysqli = new mysqli("localhost", "root", "", "dbms");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php

if(isset($_POST['setmax']))
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
  
$q1=$_POST['set_max'];
$sql="UPDATE mess SET Max_Strength=$q1 WHERE Mess_ID='$loggedin_session'";

$result=mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));

echo "<script>
      window.location.href='messdetails.html';
      alert('Maximum Strength Updated');
      </script>";


}

if(isset($_POST['max']))
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
  

$sql="SELECT * FROM mess where Mess_ID='$loggedin_session'";
$result=mysqli_query($mysqli,$sql) or die( mysqli_error($mysqli));

while($row2=mysqli_fetch_array($result))
{
    

    echo "Maximum Strength: " .$row2['Max_Strength'];
    
}
}


if(isset($_POST['cur']))
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

$query1= "SELECT COUNT(rollnumber) AS total FROM student where mess_id=('$loggedin_session')";

$query_run_1=mysqli_query($mysqli,$query1) or die(mysqli_error($mysqli));
$result=mysqli_fetch_assoc($query_run_1) ;




echo "Current Strength: ".$result['total']. "</br>";


}


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

$query= "SELECT * FROM student_due_details where RNo IN (SELECT rollnumber FROM student where mess_id='$loggedin_session')";
$query_run=mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

if(mysqli_num_rows($query_run)>0)
{
 
 echo "<table border='1'>

<tr>

<th>Roll Number</th>

<th>Year</th>

<th>Month</th>

<th>Pre-Paid Amount</th>

<th>Extra Charge</th>
<th>Mess Charge</th>

<th>Fine</th>

<th>Total Charges</th>

<th>Amount Paid</th>

<th>Net Due Amount</th>

<th>Amount Paid Date</th>


</tr>";


  //echo "success3";

  while($row=mysqli_fetch_assoc($query_run))
  {
    echo "<tr>";
    echo "<td>". $row['RNo'] . "</td>";
  echo "<td>". $row['Year'] . "</td>";
  echo "<td>". $row['Month'] . "</td>";
  echo "<td>". $row['PrePaidAmount'] . "</td>";
  echo "<td>". $row['Extra_Charge'] . "</td>";
  echo "<td>". $row['Mess_Charge'] . "</td>";
  echo "<td>". $row['Fine'] . "</td>";
  echo "<td>". $row['TotalCharge'] . "</td>";
  echo "<td>". $row['AmountPaid'] . "</td>";
  echo "<td>". $row['NetDue'] . "</td>";
  echo "<td>". $row['Amount_Paid_Date'] . "</td>";
  

  echo "</tr>";
  
  }
  echo"</table>";



}
}
?>
</body>
</html>

 
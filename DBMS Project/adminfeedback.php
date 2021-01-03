<?php

$mysqli = new mysqli("localhost", "root", "", "dbms");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php
  
session_start();
$user_check=$_SESSION['login_admin'];
$ses_sql=mysqli_query($mysqli,"select * from admin where Admin_ID='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['Admin_ID'];




if(!isset($loggedin_session) || $loggedin_session==NULL) 
{
 echo "Go back";

}

$que="SELECT Previous_Month_Rating AS pmr FROM  mess WHERE Mess_ID=(SELECT Mess_ID FROM admin where Admin_ID='$loggedin_session')";
$result = mysqli_query($mysqli,$que);
$row = mysqli_fetch_assoc($result);
$pmr = $row['pmr'];

echo "Previous Month Rating:";
echo $pmr;
$d=date('Y/m/d');


echo "</br></br>";
echo "</br></br>";


{
$query= "SELECT * FROM mess_day_rating where Mess_ID=(SELECT Mess_ID FROM admin where Admin_ID='$loggedin_session') AND Date='$d'";
$query_run=mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

mysqli_num_rows($query_run);


echo "Average Rating";

 
echo "</br></br>";

	echo "<table border='1'>

<tr>

<th>Mess ID</th>

<th>Day Type</th>

<th>Date</th>

<th>Average Rating</th>




</tr>";


  

  while($row=mysqli_fetch_array($query_run))
  {
    echo "<tr>";
    echo "<td>". $row['Mess_ID'] . "</td>";
  echo "<td>". $row['DayType'] . "</td>";
  echo "<td>". $row['Date'] . "</td>";
  echo "<td>". $row['Avg_Rating'] . "</td>";
  
  

  echo "</tr>";
  
  }
  echo"</table>";


}

echo "</br></br>";
echo "</br></br>";


{

  $query= "SELECT * FROM feedback where Mess_ID=(SELECT Mess_ID FROM admin where Admin_ID='$loggedin_session') AND Date='$d'";
$query_run=mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

mysqli_num_rows($query_run);


 echo "Rating";

echo "</br></br>";

  echo "<table border='1'>

<tr>
<th>Mess ID</th>

<th>Roll Number</th>

<th>Day Type</th>

<th>Date</th>

<th>Rating</th>

<th>Comments</th>




</tr>";


  

  while($row=mysqli_fetch_array($query_run))
  {
    echo "<tr>";
    echo "<td>". $row['Mess_ID'] . "</td>";
    echo "<td>". $row['RNo'] . "</td>";
  echo "<td>". $row['DayType'] . "</td>";
  echo "<td>". $row['Date'] . "</td>";
  echo "<td>". $row['Rating'] . "</td>";
  echo "<td>". $row['Comments'] . "</td>";
  
  

  echo "</tr>";
  
  }
  echo"</table>";



}




?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}
</style>
</head>
<body>

  <table style="width:100%">
    <tr>
      <th>Mess ID</th>
      <th> DayType</th>
      <th>Date</th>
      <th>Avg rating</th>
          </tr>

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
      $sql0 = "SELECT mess_id AS mid FROM student WHERE rollnumber = '$loggedin_session'";
      $result = mysqli_query($mysqli,$sql0);
      $row = mysqli_fetch_assoc($result);
      $mess = $row['mid'];

      $d=date('Y/m/d');
      
      $sql = "SELECT * FROM mess_day_rating WHERE Mess_ID = '$mess' AND Date='$d'";
      $result = $mysqli->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo  "<td>".$row['Mess_ID']."</td>";
          echo  "<td>".$row['DayType']."</td>";
          echo  "<td>".$row['Date']."</td>";
          echo  "<td>".$row['Avg_Rating']."</td>";
          echo "</tr>";}
    } else {
        echo "0 results";
    }
     ?>
   </table>
</body>
</html>

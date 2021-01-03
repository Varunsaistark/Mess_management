<!DOCTYPE html>
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
      <th>MESS ID</th>
      <th>DAY</th>
      <th>BREAKFAST</th>
      <th>BREAKFAST TIME</th>
      <th>LUNCH</th>
      <th>LUNCH TIME</th>
      <th>SNACKS</th>
      <th>SNACKS TIME</th>
      <th>DINNER</th>
      <th>DINNER TIME</th>

    </tr>

<?php
$conn = new mysqli('localhost','root','','dbms');
if($conn->connect_error){
 die('Connection failed : ' .$conn->connect_error);
}
if(isset($_GET['id']))
{
  $mess = $_GET['id'];
  }
  $sql = "SELECT * FROM mess_menu WHERE Mess_ID='$mess'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo  "<td>".$row['Mess_ID']."</td>";
      echo  "<td>".$row['Day']."</td>";
      echo  "<td>".$row['Breakfast']."</td>";
      echo  "<td>".$row['Breakfast_Timmings']."</td>";
      echo  "<td>".$row['Lunch']."</td>";
      echo  "<td>".$row['Lunch_Timmings']."</td>";
      echo  "<td>".$row['Snacks']."</td>";
      echo  "<td>".$row['Snacks_Timmings']."</td>";
      echo   "<td>".$row['Dinner']."</td>";
      echo  "<td>".$row['Dinner_Timmings']."</td>";
      echo "</tr>";}
} else {
    echo "0 results";
}


 ?>


</table>

</body>
</html>

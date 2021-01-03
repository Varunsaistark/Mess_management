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
      <th> Mess Name</th>
      <th>Location</th>
      <th>Monthly charge</th>
      <th>Mess type</th>
      <th>Max strength</th>
      <th>Current Strength</th>
      <th>Previous month rating</th>
      <th>Incharge Name</th>
      <th>Incharge Mobile Number</th>





          </tr>

      <?php


      $mysqli = new mysqli('localhost','root','','dbms');

      if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


if(isset($_GET['id1']))
{
      $mess = $_GET['id1'];
      $sql1 = "SELECT PhNo AS phn FROM admin WHERE Mess_ID  = $mess";
$result1 = mysqli_query($mysqli,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$phn = $row1['phn'];
      
      $sql = "SELECT * FROM mess WHERE Mess_ID = '$mess'";
      $result = $mysqli->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
          echo "<tr>";
          echo  "<td>".$row['Mess_ID']."</td>";
          echo  "<td>".$row['Mess_Name']."</td>";
          echo  "<td>".$row['Mess_Location']."</td>";
          echo  "<td>".$row['Mess_Month_Charge']."</td>";
          echo "<td>".$row['Mess_Type']."</td>";
          echo "<td>".$row['Max_Strength']."</td>";
          echo "<td>".$row['Current_Strength']."</td>";
          echo "<td>".$row['Previous_Month_Rating']."</td>";
          echo "<td>".$row['Incharge_Name']."</td>";
          echo "<td>".$row1['phn']."</td>";





          echo "</tr>";}
    } else {
        echo "0 results";
    }
  }
     ?>
   </table>
</body>
</html>

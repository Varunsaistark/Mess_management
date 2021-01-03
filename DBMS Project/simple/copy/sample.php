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

$rating=$_POST['rate'];
$comments=$_POST['comment'];
$daytime=$_POST['day_time'];

$sql5= "SELECT * FROM student WHERE rollnumber='$loggedin_session'";
$result3=mysqli_query($mysqli,$sql5) or die( mysqli_error($mysqli));
while($row2=mysqli_fetch_array($result3))
$messid=$row2['mess_id'];



$date=date("Y/m/d");




$avg = 0;
$sql0 = "SELECT COUNT(Date) AS c FROM mess_day_rating WHERE Date = '$date'";
$result0 = mysqli_query($mysqli,$sql0);
$row0 = mysqli_fetch_assoc($result0);
$c = $row0['c'];
if($c==0)
{
  $sql = "INSERT INTO Mess_Day_Rating(Mess_ID,DayType,Date,Avg_Rating)
  VALUES ('$messid','Breakfast','$date','$avg'),('$messid','Lunch','$date','$avg'),
  ('$messid','Snacks','$date','$avg'),('$messid','Dinner','$date','$avg')";
  $retval = mysqli_query($mysqli,$sql);

}
$sql = "SELECT COUNT(Rating) AS count ,SUM(Rating) AS sum
FROM feedback
WHERE Date='$date' AND DayType='$daytime'";

$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($result);
$rowcount = $row['count'];
$rowcount = $rowcount+1;
$sum = $row['sum'];
echo $sum;
echo $rowcount;
$sum = $sum+$rating;
$avg = $sum/$rowcount;

$stmt = $mysqli->prepare("INSERT into feedback(RNO,DayType,Date,Mess_ID,Rating,Comments)values(?,?,?,?,?,?)");
$stmt->bind_param("sssiis",$loggedin_session,$daytime,$date,$messid,$rating,$comments);
$stmt->execute();

$stmt->close();

  $sql2 = "UPDATE Mess_Day_Rating  SET Avg_Rating = '$avg'
               WHERE Mess_ID = '$messid' AND Date='$date' AND DayType = '$daytime'" ;

               $retval = mysqli_query($mysqli,$sql2);

               echo "<script>
      window.location.href='student.html';
      alert('Rated');
      </script>";
           }

$mysqli->close();
?>

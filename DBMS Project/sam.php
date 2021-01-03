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
$type=$_POST['day_time'];

$sql5= "SELECT * FROM student WHERE rollnumber='$loggedin_session'";
$result3=mysqli_query($mysqli,$sql5) or die( mysqli_error($mysqli));
$row2=mysqli_fetch_array($result3);
$mess=$row2['mess_id'];
$date=date("Y/m/d");


$sql = "INSERT INTO Feedback (RNo,DayType,Date,Mess_ID,Rating,Comments)
VALUES('$loggedin_session','$type','$date','$mess','$rating','$comments')";
$retval = mysqli_query($mysqli,$sql);
$sql1 = "SELECT COUNT(Rating) AS count,SUM(Rating) AS sum
FROM feedback WHERE Date='$date' AND DayType='$type'
AND Mess_ID='$mess'";
$result = mysqli_query($mysqli,$sql1);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
$sum = $row['sum'];

$avra= $sum/$count;


$sql2 = "SELECT COUNT(DATE) as count FROM Mess_Day_Rating WHERE Date='$date' AND Mess_ID='$mess' AND DayType='$type'
";
$result1 = mysqli_query($mysqli,$sql2);
$row1 = mysqli_fetch_assoc($result1);
$count = $row1['count'];
if($count==0)
{$sql3 = " INSERT INTO Mess_Day_Rating(Mess_ID,DayType,Date,Avg_Rating)
VALUES ('$mess','$type','$date','$avra')";
$retval2 = mysqli_query($mysqli,$sql3);

echo "<script>
      window.location.href='student.php';
      alert('Rated when count 0');
      </script>";


}

else if($count==1)
{
$sql4 = "UPDATE Mess_Day_Rating
SET Avg_Rating= '$avra'
WHERE Mess_ID= '$mess' AND Date='$date' AND DayType='$type'";
$retval = mysqli_query($mysqli,$sql4);

echo "<script>
      window.location.href='student.php';
      alert('Rated');
      </script>";

}

$mysqli->close();
}
?>

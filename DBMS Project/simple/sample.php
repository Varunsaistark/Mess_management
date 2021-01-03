<?php
$conn = new mysqli('localhost','root','','proj');
$Rno = "B19SS";
$type = "Dinner";
$date=  date("Y/m/d");
$rating = 5;
$comment = "Hi";
$mess = 1;
$avg = 0;
$sql0 = "SELECT COUNT(Date) AS c FROM mess_day_rating WHERE Date = '$date'";
$result0 = mysqli_query($conn,$sql0);
$row0 = mysqli_fetch_assoc($result0);
$c = $row0['c'];
if($c==0)
{
  $sql = "INSERT INTO Mess_Day_Rating(Mess_ID,DayType,Date,Avg_Rating)
  VALUES ('$mess','Breakfast','$date','$avg'),('$mess','Lunch','$date','$avg'),
  ('$mess','Snacks','$date','$avg'),('$mess','Dinner','$date','$avg')";
  $retval = mysqli_query($conn,$sql);

}
$sql = "SELECT COUNT(Rating) AS count ,SUM(Rating) AS sum
FROM feedback
WHERE Date='$date' AND DayType='$type'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$rowcount = $row['count'];
$rowcount = $rowcount+1;
$sum = $row['sum'];
echo $sum;
echo $rowcount;
$mess = 1;
$sum = $sum+$rating;
$avg = $sum/$rowcount;

$stmt = $conn->prepare("insert into feedback(RNo,DayType,Date,Mess_ID,Rating,Comments)values(?,?,?,?,?,?)");
$stmt->bind_param("sssiis",$Rno,$type,$date,$mess,$rating,$comment);
$stmt->execute();
$stmt->close();


  $sql2 = "UPDATE Mess_Day_Rating  SET Avg_Rating = '$avg'
               WHERE Mess_ID = '$mess' AND Date='$date' AND DayType = '$type'" ;

               $retval = mysqli_query($conn,$sql2);

$conn->close();
?>

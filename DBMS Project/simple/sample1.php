<?php
$conn = new mysqli('localhost','root','','dbms');

$sql = "SELECT Rating FROM feedback";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$rowcount = $rowcount+1;

$result = mysqli_query($conn, 'SELECT SUM(Rating) AS value_sum FROM feedback');
$row = mysqli_fetch_assoc($result);
$sum = $row['value_sum'];
session_start();
$Rno = "B180349CS";
$type = "Breakfast";
$date= date("Y/m/d");
$rating = $_POST['rate'];
$comment = "asd";
echo $rating;
$mess = "IH";
$sum = $sum+$rating;
$avg = $sum/$rowcount;
$stmt = $conn->prepare("insert into feedback(RNO,DayType,Date,Mess_ID,Rating,Comments)values(?,?,?,?,?,?)");
$stmt->bind_param("ssssis",$Rno,$type,$date,$mess,$rating,$comment);
$stmt->execute();
$stmt->close();
$sql1="SELECT COUNT(Date) as count FROM mess_day_rating WHERE Date=$date";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$sum1 = $row1['count'];
if($sum1==0){
  $stmt = $conn->prepare("insert into mess_day_rating(Mess_ID,DayType,Date,Avg_Rating)values(?,?,?,?)");
  $stmt->bind_param("ssss",$mess,$type,$date,$avg);
  $stmt->execute();
  $stmt->close();

}
else{
  $sql2 = "UPDATE Mess_Day_Rating  SET Avg_Rating = '$avg'
               WHERE Mess_ID = '$mess' AND Date='$date' AND DayType = '$type'" ;

               $retval = mysqli_query($conn,$sql2);
}
$conn->close();
?>

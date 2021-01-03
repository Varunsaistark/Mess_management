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
$sql2= "SELECT * FROM student WHERE rollnumber='$loggedin_session'";
$result=mysqli_query($mysqli,$sql2) or die( mysqli_error($mysqli));
while($row2=mysqli_fetch_array($result))
$messid=$row2['mess_id'];

$date=date("Y/m/d");




$stmt = $mysqli->prepare("INSERT into feedback(RNO,DayType,Date,Mess_ID,Rating,Comments)values(?,?,?,?,?,?)");
$stmt->bind_param("sssiis",$loggedin_session,$daytime,$date,$messid,$rating,$comments);
$stmt->execute();

echo "<script>
			window.location.href='student.html';
			alert('Rated');
			</script>";
$stmt->close();



}
$mysqli->close();

?>

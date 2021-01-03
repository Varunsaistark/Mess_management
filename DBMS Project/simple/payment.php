<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
  <form action="Q17.php" method="post">

  <?php $user = 'B123458CS';
  $conn = new mysqli('localhost','root','','proj');
  $sql = "SELECT NetDue AS due, PrePaidAmount AS ppa FROM student_due_details WHERE RNo = '$user'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  $due = $row['due'];
  if($due==0)
  {
    $due = -$row['ppa'];
  }
  session_start();

$_SESSION["due"] = $due;

  ?>
    <div class="col-12">
        <h1 class="payment-heading">
            Paymnet
        </h1>
        <p class="payment-desc">
            Enjoy hassle-free payment with the plenitude of payment options
            available for you
        </p>



        <h1 class="mess-heading">
            Payment
        </h1>

        <div class="f">
            <h1 class="due-heading">
                YOUR DUE IS <span id="due"><?php echo $due;?></span>RS/-
            </h1>
              <input type="text" name="pay" size="15" />


            <br /><br />

            <button class="btn btn-primary">Amount paid</button>
        </div>
    </div>

  </form>

</body>

</html>

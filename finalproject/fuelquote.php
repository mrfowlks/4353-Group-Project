<?php 
//include auth_session.php file on all user panel pages
include("auth_session.php");
ob_start();
require('db.php');

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>REGISTRATION FORM</title>
</head>
<body>

  <h1 class="text-center">Fuel Quote Form</h1>
  <hr size="3">
  <div class="container">
      <div class="w-75 mx-auto">

   <form class="form-group centered" action="" method="REQUEST">
        <input class="form-control" type="number" name="gallons" id="gallons" placeholder="Gallons of Fuel" required></input><br><br>
        <input class="form-control" type="text" name="address" id="address" placeholder="<?php echo $_SESSION['state']; ?>" required readonly></input><br><br>
        <input class="form-control" type="date" name="date" id="date" placeholder="Date" ></input><br><br>
        <input class="form-control" type="number" name="sprice" id="sprice" placeholder="Suggested Price per Gallon" required readonly></input><br><br>
        <input class="form-control" type="number" name="totalPrice" id="totalPrice" placeholder="Total_Price" required readonly></input><br><br>
        <input class="form-control" type="submit" name="Submit" id="Submit" value="Submit"></input><br>
                        <br><br>
                <a href="profile.php">Profile</a>
   </form><br><br>
   </div>
  </div>

</body>
</html>
<?php
    if(isset($_REQUEST['Submit']))
    {
        $username = $_SESSION['username'];
        $state = $_SESSION['state'];
        $date = $_REQUEST['date'];
        $currentdate = date('Y-m-d');;
        $gallons = $_REQUEST['gallons'];
        $gallons = max($gallons,0);
        $margin = 0;    
        $current_price = 1.5;
        
        if($date < $currentdate){
            echo  ' <script type="text/javascript"> alert("Date is in the past") </script> ';
        }
        //if gallons is greater than 1000 or less than 1000
        if($gallons >= 1000){
            $margin = $margin + .02;
        }
        else {
            $margin = $margin + .03;
        }

        //if in texas or not
        if($state == 'TX'){
            $margin = $margin + .02;
        }
        else {
            $margin = $margin + .04;
        }

        //if user already ordered before or not
        $select = mysqli_query($con, "SELECT * FROM fuel WHERE username = '".$_SESSION['username']."'");
        if(mysqli_num_rows($select)) {
            $margin = $margin - .01;
        }
        $margin = $margin + .1;
        $sprice = $current_price * $margin;
        $sprice = $current_price + $sprice;
        $totalPrice = $sprice * $gallons;


        if($date > $currentdate) {
            $query = "INSERT INTO `fuel` (username, state, date, gallons, totalPrice) 
            VALUES('$username', '$state', '$date', '$gallons', '$totalPrice')";
    
            $query_run = mysqli_query($con,$query);
            
            if($query_run)
            {
            echo "<div class='form'>
                  <h3>Price = $totalPrice.</h3><br/>
                  <p class='link'>Click here to <a href='profile.php'>Return to profile page</a> again.</p>
                  </div>";
            }
            else
            {
                echo  ' <script type="text/javascript"> alert("Data not Saved") </script> ';
            }
        }
    }
?>

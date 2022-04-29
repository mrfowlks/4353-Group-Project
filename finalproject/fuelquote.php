<?php 
//include auth_session.php file on all user panel pages
include("auth_session.php");
ob_start();
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
        <input class="form-control" type="text" name="address" id="address" placeholder="Address" required readonly></input><br><br>
        <input class="form-control" type="date" name="date" id="date" placeholder="Date" ></input><br><br>
        <input class="form-control" type="number" name="sprice" id="sprice" placeholder="Suggested Price per Gallon" required readonly></input><br><br>
        <input class="form-control" type="number" name="totalPrice" id="totalPrice" placeholder="Total_Price" required readonly></input><br><br>
        <input class="form-control" type="submit" name="Submit" id="Submit" value="Submit"></input><br>
        

   </form><br><br>
   </div>
  </div>

</body>
</html>
<?php
    require('db.php');
    if(isset($_REQUEST['Submit']))
    {
        $username = $_SESSION['username'];
        $state = $_SESSION['state'];
        $date = $_REQUEST['date'];
        $gallons = $_REQUEST['gallons'];
        $margin = 0;    
        $current_price = 1.5;
        
        //if gallons is greater than 1000 or less than 1000
        if($gallons >= 1000){
            $margin = $margin + .2;
        }
        else {
            $margin = $margin + .3;
        }

        //if in texas or not
        if($state == 'TX'){
            $margin = $margin + .2;
        }
        else {
            $margin = $margin + .4;
        }

        //if user already ordered before or not
        $select = mysqli_query($con, "SELECT * FROM fuel WHERE username = '".$_SESSION['username']."'");
        if(mysqli_num_rows($select)) {
            $margin = $margin - .1;
        }
        
        $sprice = $current_price + $margin;
        $totalPrice = $sprice * $gallons;



        $query = "INSERT INTO `fuel` (username, state, date, gallons, totalPrice) 
        VALUES('$username', '$state', '$date', '$gallons', '$totalPrice')";

        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            echo  ' <script type="text/javascript"> alert("Data Saved") </script> ';

        }
        else
        {
            echo  ' <script type="text/javascript"> alert("Data not Saved") </script> ';
        }
    }
?>

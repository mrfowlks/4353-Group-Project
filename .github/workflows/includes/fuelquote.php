<?php 

namespace App;

class fuelquote
{
    public $gallons;
    public $address;
    public $date;
    public $price;
    public $totalprice;

    public function setGallons($ggallons)
    {
        $this -> gallons = $ggallons;
    }

    public function getGallons(){
        return '1000';
    }
    
    public function setAddress($aadress)
    {
        $this -> address = $aadress;
    }

    public function getAddress(){
        return '123 abc st';
    }
    
    public function setDate($ddate)
    {
        $this -> date = $ddate;
    }

    public function getDate(){
        return '7/8/2022';
    }
}
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

   <form class="form-group centered" action="register" method="POST">
        <input class="form-control" type="number" name="gallons" id="gallons" placeholder="Gallons of Fuel" required></input><br><br>
        <input class="form-control" type="text" name="address" id="address" placeholder="Address" required readonly></input><br><br>
        <input class="form-control" type="date" name="date" id="date" placeholder="Date" ></input><br><br>
        <input class="form-control" type="number" name="price" id="price" placeholder="Price" required readonly></input><br><br>
        <input class="form-control" type="number" name="totalPrice" id="totalPrice" placeholder="Total_Price" required readonly></input><br><br>
        <input class="form-control" type="submit" name="submit" id="submit" value="SUBMIT"></input><br>
        

   </form><br><br>
   </div>
  </div>

</body>
</html
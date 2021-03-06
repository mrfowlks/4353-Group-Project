<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Client Registration</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
  form{
    align-items:center;

  }


  input{
    font-weight: normal;
    padding: 5px;
    margin-right: 5px;
    border-radius: 2px;
    width: 200px;
  }
  #dob{
    width: 200px;
  }
  #submit{
    width: 214px;
    font-size: large;
    background-color: blue;
    color: white;
    font-family: Verdana, Tahoma, sans-serif;


  }
  #submit:hover{

    background-color: white;
    color: black;
    cursor: pointer;
    border-color:black;
  }
  span{
    font-family: Verdana, Tahoma, sans-serif;
  }

  #color{
    width:25px;
    border-radius : 20px;
  }

  #colorsubmit{

    padding:2%;
    font-size:15px;
    background-color:transparent;
  }
  .center{
    margin-left:auto;
    margin-right:auto;
    align-items:center;
    justify-content:center;

  }



</style>
<body bgcolor={{color}}>
<img src=
             "https://drawinghowtos.com/wp-content/uploads/2021/07/gas-pump-colored.jpg"
     width="100" height="75"
     alt="Fuel Calculations Logo">

<h1 class="text-center">Registration</h1>
<hr size="3">
<div class="container">
  <div class="w-75 mx-auto">

    <form class="form-group centered" action="register" method="POST" style="align-items:center;">
      <input class="form-control" type="text" name="firstname" id="username" placeholder="Username" required minlength="3" maxlength="50"></input><br><br>
      <input class="form-control" type="text" name="email" id="email" placeholder="Email Address" required></input><br><br>
      <input class="form-control" type="text" name="password" id="password" placeholder="Enter Password" required minlength="3" maxlength="50"></input><br><br>

      <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="REGISTER"></input><br>
      <span>Already a registered client? <a href="/cosc4353/login.php">LOGIN HERE </a></span>

    </form><br><br>
  </div>
</div>
<script src="js/scripts.js"></script>

</body>
</html>
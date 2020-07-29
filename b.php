<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($host,$user,$password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['login'])){
      
    
    $un = $_POST['email'];
    $pw = $_POST['pw'];

  $q = " SELECT * FROM Neww WHERE Email='$un' && Pass='$pw' ";
  $data = mysqli_query($conn, $q);
  $r = mysqli_num_rows($data);

  if ($r==1){
      echo "success";
  }
  else{
      echo "invalid";
  }

  }

  if(isset($_POST['signup'])){

    $na = $_POST['name'];
    $ag = $_POST['age'];
    $un = $_POST['email'];
    $pw = $_POST['pw'];

  $q = " INSERT INTO Neww VALUES ('$na','$ag','$un','$pw') ";
  $data = mysqli_query($conn, $q);

  if ($data){
      echo "Success";
  }
  else{
      echo "invalid";
  }

  }



  if(isset($_POST['delete'])){

    $un = $_POST['email'];
    $pw = $_POST['pw'];

  $q = "DELETE FROM Neww WHERE Email='$un' " ;
  $data = mysqli_query($conn, $q);

  if ($data){
      echo "Success";
  }
  else{
      echo "invalid";
  }

  }



  
  

  if(isset($_POST['update'])){

    $na = $_POST['name'];
    $ag = $_POST['age'];
    $un = $_POST['email'];
    $pw = $_POST['pw'];

  $q =  "UPDATE Neww SET Name='$na',Age='$ag' WHERE Email='$un' && Pass='$pw' " ;
  $data = mysqli_query($conn, $q);

  
   if ($data){
       echo "Success";
   }
   else{
       echo "invalid";
   }

  }


?>
   


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">

    <strong> Form </strong>
  </a>
</nav>
<br>

<div class="jumbotron">
  <form method='POST'>
  <div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">

    <label for="pw">Password</label>
    <input name='pw' type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button name='login' type="submit" class="btn btn-primary">Log in</button>
  <button name='delete' type="submit" class="btn btn-primary">Delete</button>
</form>
</div>

<br>
<br>


<div class="jumbotron">
  <form method='POST'>
  <div class="form-group">

   <label for='name'>Name</label>
    <input name='name' type="text" class="form-control">
    
  <label for='age'>Age</label>
    <input name='age' type="text" class="form-control"> 
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">

    <label for="pw">Password</label>
    <input name='pw' type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button name='signup' type="submit" class="btn btn-primary">Sign Up</button>
  <button name='update' type="submit" class="btn btn-primary">Update</button>

</form>
</div>


    

   



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
  $username=$_POST['username'];
  $password=$_POST['password'];

  //$sql= "insert into registration values('','$username','$password')";
  //$result=mysqli_query($con,$sql);
	

  //if($result){
    //echo "Data inserted successfully";
  //}else{
    //die(mysqli_error($con));
  //}
  $sql="Select * from registration where username='$username'";
  $result=mysqli_query($con,$sql);
  
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      echo "User already exist";
    }else{
  $sql= "insert into registration values('','$username','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Signup successfull";
  }else{
    die(mysqli_error($con));
  }
    }

  }
  
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class = "text-center">Sign up Page</h1>
    <div class="container mt-5" ></div>
    <form action = "sign.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <!--input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</!--label-->
  </div>
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
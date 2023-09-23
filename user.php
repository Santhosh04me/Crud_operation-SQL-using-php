<?php
include'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into crud(name,email,phone,password) 
    values('$name','$email','$mobile','$password')";
    $result= mysqli_query($con,$sql);
    
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" >
  <body>
    <div class="container my-5">
    <form method="post">

  <div class="mb-3">
    <label  >Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
    <div>

  <div class="mb-3">
    <label  >Email</label>
    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
  <div>

  <div class="mb-3">
    <label  >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your mobile number" name="mobile" autocomplete="off">
  <div>

  <div class="mb-5">
    <label  >password</label>
    <input type="password" class="form-control" placeholder="Enter Your password" name="password" autocomplete="off">
  <div>
    <br>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>
    </div>
    <?php
    if($result){
        echo "Data inserted successfully";

    }else{
        die(mysql_error($con));

    }?>



     </body>
</html>
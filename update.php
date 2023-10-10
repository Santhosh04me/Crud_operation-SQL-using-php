<?php
include 'connect.php';

// Make sure to validate and sanitize $_GET['updateid'] before using it

    $id = $_GET['updateid'];
$sql ="select * from 'crud' where id=$id";
$result = mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $pasword=$row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Corrected SQL query (use backticks around table name, not single quotes)
    $sql = "UPDATE `crud` SET name='$name', email='$email', 
    phone='$mobile', password='$password' WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Updated successfully";
    } else {
        // Use mysqli_error instead of mysql_error for MySQLi
        die(mysqli_error($con));
    }
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
  <button type="submit" class="btn btn-primary" name="submit" >Update</button>
</form>
    </div>
<?php
    if(isset ($result)){
        // echo "Data inserted successfully";
      header ('location:display.php');
    }
    else {
      die(mysqli_error($con));}

?>  


     </body>
</html>
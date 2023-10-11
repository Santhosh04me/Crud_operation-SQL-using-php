<?php
include'connect.php';
$id=$_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$results=mysqli_query($con,$sql);
$rows =mysqli_fetch_assoc($results);
$name=$rows['name'];
$email=$rows['email'];
$phone=$rows['phone'];
$password=$rows['password'];
        

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` SET name='$name', email='$email', 
    phone='$mobile', password='$password' WHERE id=$id";
    $result= mysqli_query($con,$sql);
    if($result){
      echo 'update succesully';
    }else{
      
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
    <input type="text" class="form-control" placeholder="Enter Your Name"
     name="name" value=<?php echo $name;?>
     autocomplete="off">
    <div>

  <div class="mb-3">
    <label  >Email</label>
    <input type="email" class="form-control" placeholder="Enter Your Email" 
    name="email" value=<?php echo $email;?> autocomplete="off">
  <div>

  <div class="mb-3">
    <label  >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your mobile number" 
    name="mobile" value=<?php echo $phone;?> >
  <div>

  <div class="mb-5">
    <label  >password</label>
    <input type="password" class="form-control" placeholder="Enter Your password" 
    name="password" value=<?php echo $password;?> autocomplete="off">
  <div>
    <br>
  <button type="submit" class="btn btn-primary" name="submit" >update</button>
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

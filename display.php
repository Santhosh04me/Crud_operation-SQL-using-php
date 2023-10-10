<?php
include "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" >
    <title>Crud operation</title>
</head>
<body>
    <div class="container">
        <button class='btn btn-primary my-5'>
        <a href="user.php"class="text-light">Add user</a></button>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql ="select * from crud";
    $result =mysqli_query($con,$sql);
    if ($result){
        while($row= mysqli_fetch_assoc($result)){
        $id= $row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $pasword=$row['password'];
        
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$pasword.'</td>
     <td> <buttton class="btn btn-primary">
     <a href="update.php?updateid='.$id.'" class="text-light">Update</a>
     </buttton>
    <buttton class="btn btn-danger">
    <a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a>
    </buttton></td>
 
 
    </tr>';

        }
        }
    
    ?>

     </tbody>
</table>
</div>
</body>
</html>
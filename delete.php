<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    
    // Corrected SQL query (use backticks around table name, not single quotes)
    $sql = "DELETE FROM `crud` WHERE id = $id";
    
    $result = mysqli_query($con, $sql);

    if ($result){
        echo "Deleted successfully";
    } else {
        // Use mysqli_error instead of mysql_error for MySQLi
        die(mysqli_error($con));
    }
}
?>

<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $task = $_POST['description'];
    $date = date('Y-m-d h:s');
    
    $query = "INSERT INTO tasks(description,date)  VALUES ('$task','$date')";
    $row = mysqli_query($con,$query);
    if($row>0){
        echo "<script>alert('data inserted successfully');</script>";
        header("Location:index.php");
        
    }
    else{
        echo "Error inserting data".mysqli_error($con);
    }
}


?>
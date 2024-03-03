<?php
   include 'config.php';
        $id = $_GET['id'];
        $query = "DELETE FROM tasks where id=$id";
        if(mysqli_query($con,$query)>0){
            echo  "<script>alert('Task Deleted Successfully')</script>";
            header('location:index.php');
        }
        else{
            echo "Error: ". mysqli_error($conn);
        }

?>
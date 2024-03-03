<!doctype html>
<html lang="en">
  <head>
    <title>Task Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container flex-md-column">
        <a href="index.php"><button type="button" class="btn btn-primary" href="create.php">Manage Task</button></a>
        <h2>Update Tasks</h2>

        <div class="form-group">
          <form action="#" method="POST">
          <label for="desc">Task Description</label>
          <input type="text"
            class="form-control" name="description" id="" aria-describedby="helpId" placeholder="Enter Task Description">
          <br>
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
          </form>
        </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include 'config.php';
    if(isset($_POST['submit'])){
        $task_id = $_GET["id"];
        $description = $_POST["description"];
        $query = "UPDATE tasks SET description='$description' where id=$task_id";
        if(mysqli_query($con,$query)>0){
            header('location:index.php');
        }
        else{
            echo "couldn't update the table";
        }
    }



?>
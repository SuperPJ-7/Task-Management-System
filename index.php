<?php
include 'config.php';
?>

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
      <a href = "create.php"><button type="button" class="btn btn-primary" >Add Task</button></a>
        <h2>Manage Tasks</h2>
        <table class="table table-inversed table-inverse table-responsive">
          <thead class="thead-inverse">
            <tr>
              <th>S.N</th>
              <th>Task-Description</th>
              <th>Date Added</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $query = 'select *from tasks';
                $data = mysqli_query($con,$query);
                $rows = mysqli_num_rows($data);
                while($result = mysqli_fetch_assoc($data)){
                  echo "<tr>";
                
                  echo '<td scope="row">'.$result["id"].'</td>';
                  echo '<td>'.$result["description"].'</td>';
                  echo '<td>'.$result["date"].'</td>';
                  
                  echo '<td>' .'<a href="update.php?id='.$result['id'].'"><button type="button" class="btn btn-primary" name="edit"accordion >Edit</button></a>
                    <a href="delete.php?id='.$result['id'].'"><button type="button" class="btn btn-danger" name="delete">Delete</button></a>';
                  echo '</td>';
                  echo "</tr>";
                }
             
              ?>
            </tbody>
        </table>
      </div>
      <div class="card-footer">
        &copy prajjwal@gmail.com
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
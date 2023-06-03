<?php
include 'connection.php';
$query = mysqli_query($conn,"SELECT * FROM register");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 mt-5">
            <table class="table table-boredred table-striped bg-info text-light"> 
                <tr>
                    <th>name</th>
                    <th>age</th>
                    <th>mobile</th>
                    <th>place</th>
                    <th colspan="2">Action</th>
                </tr>
        <?php 
        while($row = mysqli_fetch_assoc($query))
        {
        ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
        <?php } ?>
            </table>
        </div>
    </div>
</div>
   



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
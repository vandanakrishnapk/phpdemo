<?php 
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM register WHERE id='$id'");
$data=mysqli_fetch_assoc($query);
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $place = $_POST['place'];
 $sql = mysqli_query($conn,"UPDATE `register` SET `name`='$name',`age`='$age',`mobile`='$mobile',`place`='$place' WHERE id='$id'");

if($sql)
{
    echo'<script>alert("updated successfully");window.location.href="read.php";</script>';
}
else 
{
    echo "something went wrong";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 mt-5" style="background-color:bisque">
       <h5>Edit your details here </h5>
      
     
                <form method="POST">
                    <div class="form-group mt-5">
               
                    <input type="text" class="form-control mt-2" name="name" value="<?php echo $data['name']; ?>">
                    <input type="text" class="form-control mt-2" name="age" value="<?php echo $data['age']; ?>">
                    <input type="number" class="form-control mt-2" name="mobile" value="<?php echo $data['mobile']; ?>">
                    <input type="text" class="form-control mt-2" name="place" value="<?php echo $data['place']; ?>">
                
                   <center> <input type="submit" class="btn btn-success mt-2" name="submit" value="update"></center>
                    </div>
                </form>
      
           
        </div>
    </div>
</div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
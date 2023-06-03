<?php 
include 'connection.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$mobile = $_POST['mobile'];
$place = $_POST['place'];
$username = $_POST['username'];

$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = mysqli_query($conn,"INSERT INTO register(name,age,mobile,place,username,password) VALUES('$name','$age','$mobile','$place','$username','$hash')");
if($sql)
{
  echo'<script>alert("Registered successfully"); window.location.href="create.php"</script>';

}
else 
{
  echo"some thing wrong";
}
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <style> 
  .marg
  {
    margin-top:200px;
  }
  </style>
  </head>
  <body>
   <div class="container">
    <div class="row">
      <div class="col-4">
      </div>
      <div class="col-4">
        <form method="POST" required>
          <div class="mb-1">
            <label class="form-label">Enter name</label>
            <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label class="form-label">Enter age</label>
            <input type="number"  name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label class="form-label">Enter mobile</label>
            <input type="number"  name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label class="form-label">Enter place</label>
            <input type="text"  name="place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label class="form-label">Enter username</label>
            <input type="text"  name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label class="form-label">Enter password</label>
            <input type="password"  name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
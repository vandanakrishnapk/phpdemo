<?php 
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($conn,"SELECT * FROM register WHERE username = '$username'");

if($result)
{
  
    $row = mysqli_fetch_assoc($result);
    $hash = password_verify($password,$row['password']);
    $count=mysqli_num_rows($result);
   
    if($count==1 && $hash)
    {
        $_SESSION['id']  = $row['id'];    
     ?>
        <script>window.location.href="dashboard.php";</script>
        <?php
    }
}
else 
{
    echo"invalid username and password";
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
      <div class="col-4 mt-5">
        <form method="POST" required>
          <div class="mb-1">
            <label class="form-label">Username</label>
            <input type="text"  name="username" class="form-control">
            </div>
            <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password"  name="password" class="form-control">
            </div>         
           
          <button type="submit" class="btn btn-primary" name="submit">Login</button>
        </form>
      </div>
    </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
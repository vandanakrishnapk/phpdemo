<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $place = $_POST['place'];

    $sql = mysqli_query($conn,"INSERT INTO shop(name,place) VALUES('$name','$place')");
    if($sql)
    {
        echo"record added succesfully";
        header('location:form.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="form.css">
  </head>
  <body>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="enter name"><br>
        <input type="text" name="place" placeholder="enter place">
        <button type="submit" name="submit">submit</button>
    </form>
  </body>
</html>
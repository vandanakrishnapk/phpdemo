<?php 
include 'connection.php';
$id = $_GET['delete_id'];
$sql = mysqli_query($conn,"DELETE  FROM `register` WHERE id='$id'");
if($sql)
{
    echo'<script>alert("deleted");window.location.href="read.php";</script>';
}

?>
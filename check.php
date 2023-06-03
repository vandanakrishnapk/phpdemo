<?php 
session_start();

$email = $_SESSION["username"];
echo var_dump($email);
?>

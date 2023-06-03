<?php  
setcookie("user", "anu", time() + (86400 * 30), "/"); // 86400 = 1 day
?>  
<html>  
<body>  
<?php  
if(!isset($_COOKIE["user"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["user"];  
}  
?>  
</body>  
</html>

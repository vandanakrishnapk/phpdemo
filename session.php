<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION['username'] = "anu@gmail.com";
$_SESSION["password"] = "anu@123";
echo "Session variables are set.";
?>

</body>
</html>


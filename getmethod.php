<?php
if(isset($_GET['submit']))
{
$username = $_GET['username'];
$bloodgroup = $_GET['bloodgroup'];
echo $username."<br>";
echo $bloodgroup;
}
?>

<html>  
<body>  
<form method = "GET">  
Username: <input type = "text" name = "username"> <br>  
Blood Group: <input type = "text" name = "bloodgroup"> <br> 
<button type="submit" name="submit">submit</button>
</form>  
</body>  
</html> 



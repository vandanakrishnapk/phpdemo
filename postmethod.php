<?php
if(isset($_POST['submit']))
 {
  $name = $_POST['fname'];
if(empty($name))
{
  echo"name is empty";

}
else 
{
  echo $name;
}
}
?>
<html>
<body>

<form method="POST">
  Name: <input type="text" name="fname">
  <button type="submit" name="submit">submit</button>
</form>

</body>
</html>

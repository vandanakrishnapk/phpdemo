<?php
$num = 371;
$sum=0;
$x=$num;
while($x!=0)
{
$rem = $x%10;
$sum = $sum+$rem*$rem*$rem;
$x=$x/10;
}
if($sum == $num)
{
    echo "$num is an amstrong number";
}
else 
{
    echo "$num is not an amstrong number";
}
?>
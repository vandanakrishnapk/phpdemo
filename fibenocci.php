<?php
$limit = 20;
$a=0;
$b=1;
$c=0;
$i=1;
echo $a ."<br>";
echo $b ."<br>";

while($i<=$limit)
{
    $c=$a+$b;
    echo $c ."<br>";
    $a=$b;
    $b=$c;
    $i++;
}

?>
<?php

$n=50;
for($i=1; $i<=$n; $i++)
    {
        $fact=0;
        for($j=1; $j<=$n; $j++)
        {
            if($i%$j==0)
                $fact++;
        }
        if($fact==2)
           echo $i ."<br>";
    }


?>
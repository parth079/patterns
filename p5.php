<?php

for($i=1;$i<=7;$i++){
    if($i%2==0){
        continue;
    }
    for ($k = 1; $k <= 7 - $i; $k++) {
        echo("&nbsp");
     }
    for($j=1;$j<=$i;$j++){
        echo(" * ");
    }
    echo("<br>");
}
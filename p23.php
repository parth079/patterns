<?php
$i=5;
for($i=5;$i>=1;$i--){
    for ($k = 1; $k <= 5 - $i; $k++) {
        echo("&nbsp");
     }
    for($j=1;$j<=$i;$j++){
        echo($i);
    }
    echo("<br>");
}

for($i=2;$i<=5;$i++){

    for ($k = 1; $k <= 5 - $i; $k++) {
        echo("&nbsp");
     }
    for($j=1;$j<=$i;$j++){
        echo($i);
    } 
    echo("<br>");

    
}
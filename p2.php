<?php
$row_length = 5;
for ($row = 1; $row <= $row_length; $row++) {
    for ($spaces = 1; $spaces <= $row_length - $row; $spaces++) {
        
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($column = 1; $column <= $row; $column++) {
        
        echo "*&nbsp;";
    }
    echo '<br>';
}
?>
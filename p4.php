<?php
$row_length = 5;
for ($row = 0; $row < $row_length; $row++) {
    for ($column = 0; $column < $row_length - $row; $column++) {
        echo "*&nbsp;";
    }
    echo '<br>';
}
?>
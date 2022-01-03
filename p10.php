<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="padding-bottom: 10px;">

        <input type="text" placeholder="enter a number" name="n1">
        <input type="submit" placeholder="enter a number" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $number = $_POST['n1'];
for ($i = 1; $i <= $number; $i++)  
{  
    for ($j = 1; $j <= $i; $j++)  
    {  
        echo( "* ");  
    }  
    echo("<br>");  
}  
for ($i = $number-1; $i >= 1; $i--)  
{  
    for ($j = 1; $j <= $i; $j++)  
    {  
        echo ("* ");  
    }  
    echo("<br>");  
}  

}
?>
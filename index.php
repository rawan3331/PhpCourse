<?php
//variables 
$title ="Learn Php 7.4";
$name ="rawan";
$num =40;
$float =3.14;
$bool=true;
$bool2=false;
$nothing =null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> </title>
</head>
<body>
    <?php 
    echo '<h1> wlecome  '. $name .'</h1>' ;
    echo $num;
    echo '<br>';
    echo $float;
    ?> 
   
</body>
</html>
<?php

require  "../vendor/autoload.php";

$color1 = new app\Color(150,150,150);
$color2 = new app\Color(10,50,200);
$color3 = app\Color::rand();
$mixed = $color1->mix($color2);
$color4 = app\Color::rand();
$mixed1 = $color4->mix($color3);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
    <br><?php if($color1->equal($color2)){
        echo "COLOR 1 and COLOR 2 EQUAL";
    }else{
        echo "COLOR 1 and COLOR 2 NOT EQUAL";
    }
    ?><br>
</p>
<p style="background-color: rgb(<?=$color1->getRed()?>,<?=$color1->getGreen()?>,<?=$color1->getBlue()?>)">
    <br><br>COLOR 1<br><br>
</p>
<p style="background-color: rgb(<?=$color2->getRed()?>,<?=$color2->getGreen()?>,<?=$color2->getBlue()?>)">
    <br><br>COLOR 2<br><br>
</p>
<p style="background-color: rgb(<?=$mixed->getRed()?>,<?=$mixed->getGreen()?>,<?=$mixed->getBlue()?>)">
    <br><br>MIXED COLOR 1 + COLOR 2<br><br>
</p>
<p style="background-color: rgb(<?=$color3->getRed()?>,<?=$color3->getGreen()?>,<?=$color3->getBlue()?>)">
    <br><br>RAND 1<br><br>
</p>
<p style="background-color: rgb(<?=$color4->getRed()?>,<?=$color4->getGreen()?>,<?=$color4->getBlue()?>)">
    <br><br>RAND 2<br><br>
</p>
<p style="background-color: rgb(<?=$mixed1->getRed()?>,<?=$mixed1->getGreen()?>,<?=$mixed1->getBlue()?>)">
    <br><br>MIXED RAND 1 + RAND 2<br><br>
</p>
</body>
</html>

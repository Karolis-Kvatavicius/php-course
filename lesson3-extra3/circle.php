<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
    <title>Circle</title>
</head>
<body>
 <?php
 $circleSize = 800;
 $canvasSize = 1000;
 $top = 0;
 $bottom = 0;
 $left = 0;
 $right = 0;
 
 $imageX2 = imagecreatetruecolor($canvasSize*2, $canvasSize*2);
 
 $bg = imagecolorallocate($imageX2, 0, 0, 0);
 
 $col_ellipse = imagecolorallocate($imageX2, 255, 0, 255);
 
 imagefilledellipse($imageX2, $canvasSize, $canvasSize, $circleSize*2, $circleSize*2, $col_ellipse);
 
 $imageOut = imagecreatetruecolor($canvasSize, $canvasSize);
 imagecopyresampled($imageOut, $imageX2, $right, $bottom, $left, $top, $canvasSize, $canvasSize, $canvasSize*2, $canvasSize*2);
 imagepng($imageOut, 'test.png');
 echo '<img src="test.png"/>';
 ?>
</body>
</html>
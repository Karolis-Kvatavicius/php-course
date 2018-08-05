<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle</title>  
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <?php
header('Content-Type: image/png');
 $circleSize=500;
 $canvasSize=800;
 

 $imageX2 = imagecreatetruecolor($canvasSize*2, $canvasSize*2);
 
 $bg = imagecolorallocate($imageX2, 255, 255, 255);
 
 $col_ellipse = imagecolorallocate($imageX2, 204, 0, 0);
 
 imagefilledellipse($imageX2, $canvasSize, $canvasSize, $circleSize*2, $circleSize*2, $col_ellipse);
 
 $imageOut = imagecreatetruecolor($canvasSize, $canvasSize);
 imagecopyresampled($imageOut, $imageX2, 0, 0, 0, 0, $canvasSize, $canvasSize, $canvasSize*2, $canvasSize*2);
 imagepng($imageOut, 'test.png');
 ?>
</body>
</html>
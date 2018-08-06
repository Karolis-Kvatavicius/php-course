<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Arrays</title>
</head>
<body>
  <?php
  print '<pre>';

//masyvas is 10 masyvu, kuriu kiekvienas turi nuo 2 iki 20 tusciu string elementu
print '<h3>Vidiniai masyvai turi random elementu kieki nuo 2 iki 20: </h3>';
$masyvas = [];
$masyvasViduje = [];

  for($i = 0; $i < 10; $i++) {
      $random = rand(2, 20);
      for($j = 0; $j < $random; $j++) {  
          $masyvasViduje[] = '';
      }
      $masyvas[] = $masyvasViduje;
      unset($masyvasViduje);
  }

  print_r($masyvas);

//paskutinis, kaip praeitas bet porinis elementu skaicius
print '<h3>Vidiniai masyvai turi random PORINIU elementu kieki nuo 2 iki 20: </h3>';
$masyvas2 = [];
$masyvasViduje2 = [];

  for($i = 0; $i < 10; $i++) {
      do {
          $random = rand(2, 20);
      } while ($random % 2 != 0);
      
      for($j = 0; $j < $random; $j++) {  
          $masyvasViduje2[] = '';
      }
      $masyvas2[] = $masyvasViduje2;
      unset($masyvasViduje2);
  }

  print_r($masyvas2);
  print '</pre>';
  ?>  
</body>
</html>
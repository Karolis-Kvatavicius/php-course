<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Lesson 4-3and4</title>
</head>
<body>
  <?php
  print '<pre>';
  $masyvas = [];
  $masyvasViduje = [];

    for($i = 0; $i < 10; $i++) {
        for($j = 0; $j < 5; $j++) {  
            $masyvasViduje[] = rand(5, 25);
        }
        $masyvas[] = $masyvasViduje;
        unset($masyvasViduje);
    }

    print_r($masyvas);

//elementai didesni uz 10
    $counteris = 0;
    foreach($masyvas as $innerMasyvas) {
        foreach($innerMasyvas as $elementas) {
            if($elementas > 10) {
                $counteris++;
            }
        } 
    }
    print 'Elementai didesni už 10: ' .$counteris. '<br>';

//max reiksme
  $maxValue = 0;
    foreach($masyvas as $innerMasyvas) {
        foreach($innerMasyvas as $elementas) {
            if($elementas > $maxValue) {
                $maxValue = $elementas;
            }
        } 
    }
    print 'Maksimali reiksme: ' .$maxValue. '<br>';

//vidiniai masyvai plius du elementai
for ($i = 0; $i < 10; $i++) { 
    array_push($masyvas[$i], rand(0, 25), rand(0, 25));
}
    print_r($masyvas);

//4-D
    print '</pre>';
  ?>
</body>
</html>
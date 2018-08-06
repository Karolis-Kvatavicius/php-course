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
  print '<h3>Masyvas is 10 masyvu po 5 elementus: </h3><br>';
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
    print '<h3>Elementai didesni už 10: ' .$counteris. '</h3><br>';

//max reiksme
  $maxValue = 0;
    foreach($masyvas as $innerMasyvas) {
        foreach($innerMasyvas as $elementas) {
            if($elementas > $maxValue) {
                $maxValue = $elementas;
            }
        } 
    }
    print '<h3>Maksimali reiksme: ' .$maxValue. '</h3><br>';

//vidiniai masyvai plius du elementai
print '<h3>Vidiniai masyvai plius du elementai: </h3><br>';
for ($i = 0; $i < 10; $i++) { 
    array_push($masyvas[$i], rand(0, 25), rand(0, 25));
}
    print_r($masyvas);

//masyvu sumos
print '<h3>Masyvas su sumomis: </h3><br>';
$suma = 0;
$sumuMasyvas = [];
foreach ($masyvas as $masyvasVidinis) {
   foreach ($masyvasVidinis as $skaicius) {
    $suma += $skaicius;
   }
   $sumuMasyvas[] = $suma;
   $suma = 0;
}
print_r($sumuMasyvas);

//masyvas, kurio elementai yra indeksu reiksmiu sumos
print '<h3>Masyvas su indeksu reiksmiu sumomis: </h3><br>';
$masyvas2 = [];
$indeksuSuma = 0;
$indeksas = 0;

while($indeksas < sizeof($masyvas[0])) {
foreach ($masyvas as $masyvasVidinis) {
    $indeksuSuma += $masyvasVidinis[$indeksas];
}
$masyvas2[] = $indeksuSuma;
$indeksuSuma = 0;
$indeksas++;
}
print_r($masyvas2);
print '</pre>';
  ?>
</body>
</html>
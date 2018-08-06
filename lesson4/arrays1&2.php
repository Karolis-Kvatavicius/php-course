<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Lesson 4-1and2</title>
</head>
<body>
  <?php

  // spausdinam masyvo elementus per ciklus
  $colors = ['red', 'green', 'blue', 'yellow'];
  foreach ($colors as $value) {
     echo 'Reikšmė: ' . $value . '<br>';
  }

  echo '<br>';
  $colors2 = ['red', 'green', 'blue', 'yellow'];
  foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
}

// <pre> graziai atspausdina masyva, turi buti uzdaromas
print '<pre>';
print_r($colors);
print_r($colors2);

// break 2 ... nutraukia du ciklus
//sukuriam masyva is 30 elementu, kur kiekvienas elementas yra atsitiktinis skaicius nuo 5 iki 25
$array = [];
for($i = 0; $i < 30; $i++) {
    $array[] = rand(5, 25);
}
print_r($array);


// count of elements in array bigger than 10
$count = 0;
foreach($array as $number) {
    if($number > 10) {
        $count++;
    }
}
print 'number of >10 elements: ' .$count;
print '<br>';

// didziausias elementas
$max = 0;
foreach($array as $number) {
    if($number > $max) {
        $max = $number;
    }
}
print 'max value: ' .$max;
print '<br>';

// elementu suma
$sum =0;
foreach($array as $number) {
     $sum += $number;
}
print 'sum of elements: ' .$sum;
print '<br>';

//elementai minus indeksas
print 'Elements minus index: <br>';
foreach($array as $index => $number) {
    print $number. ' - ' .$index. ' = ' .($number - $index). '<br>';
}

// masyvas apverstas
$fromLastElement = 1;
print 'reverse array: <br>';
foreach($array as $index => $number) {
    $array[sizeof($array) - $fromLastElement] = $number;
    $fromLastElement++;
}
print_r($array);


//papildome masyva dar 10 elementu
for($i = 0; $i < 10; $i++) {
    $array[] = rand(5, 25);
}
print_r($array);


//poriniu/neporiniu elementu masyvai
$poriniai = [];
$neporiniai = [];
foreach($array as $number) {
    if ($number % 2 == 0) {
        $poriniai[] = $number;
    } else {
        $neporiniai[] = $number;
    }
}
print 'Poriniu masyvas<br>';
print_r($poriniai);
print 'Neporiniu masyvas<br>';
print_r($neporiniai);

//masyvo poriniai elementai didesni uz 15 lygus 0
foreach($array as $index => $number) {
    if ($number % 2 == 0 && $number > 15) {
       $array[$index] = 0;
    }
}
print 'Masyvo poriniai elementai didesni uz 15 lygus 0<br>';
print_r($array);

//pirmas indeksas, kurio reiksme daugiau uz 10
print 'pirmas indeksas, kurio reiksme daugiau uz 10<br>';
foreach($array as $index => $number) {
    if ($number > 10) {
       print $index. '<br>';
       break;
    }
}

//istrinti poriniai indeksai
print 'istrinti poriniai indeksai<br>';
foreach($array as $index => $number) {
    if ($index % 2 == 0) {
       unset($array[$index]);
    }
}
print_r($array);

//prie masyvo reiksmiu prideti 24
print_r($array);
print 'prie masyvo reiksmiu prideti 24<br>';
foreach($array as $index => $number) {
    $array[$index] += 24;
}
print_r($array);
print '</pre>';
   ?>    
</body>
</html>
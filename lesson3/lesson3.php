<!-- <!DOCTYPE html> -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LESSON 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>

<?php

//1
echo '<h2>First</h2>';
$x = 0;

while($x < 400) {
    print '*';
    $x++;
}


//2
echo '<h2>Second</h2>';
$x = 0;
$count = 0;
while($x < 3000) {
    $a = rand(0, 300);
    print $a. ', ';
    if($a > 150) {
        $count++;
    }
    $x++;
}

print '<br><br>' .$count;


//3
echo '<h2>Third</h2>';
for($x = 1; $x <= 3000; $x++) {
    if($x % 77 == 0) {
        print($x. ', ');
    }
}


//4
echo '<h2>Fourth</h2>';
for($i = 0; $i < 100; $i++) {
    for($j = 0; $j < 100; $j++) {
    echo '<span>*</span>';
    }
    print '<br>';
}


//5.1
echo '<h2>Fifth</h2>';

while(0 < 1) {
    if(rand(0, 1) == 0) {
         echo 'H ';
         break;
    } else {
         echo 'S ';
    }
}

//5.2
echo '<br>';
echo '<br>';

while(0 < 1) {
    if(rand(0, 1) == 0) {
         echo 'H ';
    } else {
         echo 'S ';
         break;
    }
}

//5.3
echo '<br>';
echo '<br>';

$s = 0;
while(0 < 1) {
    if(rand(0, 1) == 0) {
         echo 'H ';
    } else {
         echo 'S ';
         $s++;
    }
    if($s == 3) {
        break;
    }
}

//5.4
echo '<br>';
echo '<br>';

$h = 'H';
$s1 = 'S';
$sentence = '';
$cycleCount = 0;

while(0 < 1) {
    if(rand(0, 1) == 0) {
         $sentence .= $h;
    } else {
        $sentence .= $s1;
    }
    if($cycleCount >= 3) {
        if ($sentence[$cycleCount] == $h && $sentence[$cycleCount-1] == $h && $sentence[$cycleCount-2] == $h) {
            echo $sentence;
            break;
        }    
    }
    $cycleCount++;
}

//6
echo '<h2>Sixth</h2>';

$Petras = 'Petras';
$PetrasScore = 0;

$Kazys = 'Kazys';
$KazysScore = 0;

while($PetrasScore < 222 && $KazysScore < 222) {

    $PetrasPoints = rand(10, 20);
    $KazysPoints = rand(5, 25);

if($PetrasPoints > $KazysPoints) {
    echo $Petras. ' = ' .$PetrasPoints. ', ';
    echo $Kazys. ' = ' .$KazysPoints. '. ';
    echo 'Partiją laimėjo: ' .$Petras. '<br>';
    $PetrasScore += $PetrasPoints;

} else if($PetrasPoints == $KazysPoints) {
    echo $Petras. ' = ' .$PetrasPoints. ', ';
    echo $Kazys. ' = ' .$KazysPoints. '. ';
    echo 'Lygiosios<br>';

} else {
    echo $Petras. ' = ' .$PetrasPoints. ', ';
    echo $Kazys. ' = ' .$KazysPoints. '. ';
    echo 'Partiją laimėjo: ' .$Kazys. '<br>';
    $KazysScore += $KazysPoints; 
}

}
echo '<br>';
echo $Petras. ' viso: ' .$PetrasScore;
echo ', ' .$Kazys. ' viso: ' .$KazysScore;

echo ($PetrasScore > $KazysScore) ? '<br>Laimėtojas - ' .$Petras : '<br>Laimėtojas - ' .$Kazys;

//7
echo '<h2>Seventh</h2>';
for($i = 0; $i < 100; $i++) {
    for($j = 0; $j < 100; $j++) {
        if($i == 0 || $i == 99) {
            print '<span>*</span>';
        } else {
            if($j == 0 || $j == 99) {
                print '<span>*</span>';
            } else {
                print '<span class="invisible">*</span>';  
            }
        }
    }
    print '<br>';
}
?>
</body>
</html>
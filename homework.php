<?php
//1
echo '<h2> Pirma užduotis </h2>';
$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
$am_pm = ($hours > 11) ? 'PM' : 'AM';

printf('%\'02d : %\'02d : %\'02d %s', $hours, $minutes, $seconds, $am_pm);
print('<br>');
// printf('%02d : %02d : %02d %s', $hours, $minutes, $seconds, $am_pm);
// print('<br>');

//2
echo '<h2> Antra užduotis </h2>';
$first_number = rand(0, 2);
$second_number = rand(0, 2);
$third_number = rand(0, 2);
$fourth_number = rand(0, 2);

$numbers = $first_number. $second_number. $third_number. $fourth_number;

function occurencesOf012($numbers) {
    $count0 = 0;
    $count1 = 0;
    $count2 = 0;
    for($i = 0; $i < 4; $i++) {
        if($numbers[$i] == 0)
        $count0++;
        else if ($numbers[$i] == 1)
        $count1++;
        else
        $count2++;
    }
    return '0 count is ' .$count0. '<br>' . '1 count is ' 
    .$count1. '<br>' . '2 count is ' .$count2. '<br>';
}

echo $numbers. '<br>';
echo occurencesOf012($numbers);

// Kitas sprendimo budas
// $count0 = substr_count($numbers, 0);
// $count1 = substr_count($numbers, 1);
// $count2 = substr_count($numbers, 2);

// echo $numbers. '<br>';
// echo $count0. '<br>';
// echo $count1. '<br>';
// echo $count2. '<br>';

//3
echo '<h2> Trečia užduotis </h2>';
$candleQuantity = rand(5, 3000);

function orderPrice($candleQuantity) {
    if($candleQuantity > 1000 && $candleQuantity <= 2000)
    return $candleQuantity - ($candleQuantity * 0.03);
    else if($candleQuantity > 2000)
    return $candleQuantity - ($candleQuantity * 0.04);
    else
    return $candleQuantity;
};

echo orderPrice($candleQuantity);

//4
echo '<h2> Ketvirta užduotis </h2>';
// trikampio krastines a, b, c
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

function isTriangle($a, $b, $c) {
    if($a + $b > $c && $a + $c > $b && $b + $c > $a)
    return 'true';
    else
    return 'false';
}

echo isTriangle($a, $b, $c);

//5
echo '<h2> Penkta užduotis </h2>';
$seconds1 = rand(0, 60);

if($seconds + $seconds1 >= 60) {
    $minutes++;
    $seconds += $seconds1 - 60;
} else {
    $seconds += $seconds1;
}

printf('%\'02d : %\'02d : %\'02d %s', $hours, $minutes, $seconds, $am_pm);
<?php

//1
$x = 0;

while($x < 400) {
    // print '*';
    $x++;
}


//2
$x = 0;
$count = 0;
while($x < 3000) {
    $a = rand(0, 300);
    // print $a. ', ';
    if($a > 150) {
        $count++;
    }
    $x++;
}

// print '<br><br>' .$count;


//3
for($x = 1; $x <= 3000; $x++) {
    if($x % 77 == 0) {
        // print($x. ', ');
    }
}


//4
for($i = 0; $i < 100; $i++) {
    for($j = 0; $j < 100; $j++) {
    print '<span style="font-size: 7px; line-height: 2px">*</span>';
    }
    print '<br>';
};



<?php
// $du = 50(default reiksme). Default reiksmes reikia stumt i desine puse, i kaire neveikia
// functionName(...$skaiciai).  ... - puts all given values to array
function sudeti($vienas, $du = 50)
{
    $rezultatas =  $vienas + $du;
    return $rezultatas;
}

print sudeti(4, 5);
print '<br>';
print sudeti(55);
print '<br>';

//pirma uzduotis
function h1Tage($sakinys, $h = 1) {
    if($h >= 1 && $h <= 6) {
    return '<div style="display: inline-block;"><h' .$h. '>' .$sakinys. '</h' .$h. '></div>';
    } else {
        return '<div style="display: inline-block;"><h1>' .$sakinys. '</h1></div>';
    }
}

// echo h1Tage('Hello World !!!',1);
// echo h1Tage('Hello World !!!',2);
// echo h1Tage('Hello World !!!',3);
// echo h1Tage('Hello World !!!',0);

//antra uzduotis
function spanTage($sakinys) {
    return '<span style="color: rgb(' .rand(0, 256). ', ' .rand(0, 256). ', ' .rand(0, 256).')";>' .$sakinys. '</span>';
}
// echo spanTage('Random spalva');

//trecia uzduotis
for ($i=0; $i < 20; $i++) { 
    echo h1Tage(spanTage('*'), rand(1, 6));
}

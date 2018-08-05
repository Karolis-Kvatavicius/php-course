<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Document</title>
</head>
<body>
<div class="rhombus">
<?php
$center = 10;
$start = 1;
$end = 19;

  for($i = 0; $i < 11; $i++) {
    print '<div class="column">';
    for($j = 0; $j < 21; $j++) {
        if($j >= $center - $i && $j <= $center + $i) {
        $span = '<span class="colored" style="color: rgb(' .rand(0, 256). ',' .rand(0, 256). ',' 
        .rand(0, 256).'">' .'&block;'. '</span>';
        print $span;
        } else {
            print '<span style="color: white;">&block;</span>';
        }    
    }
    print '</div>';
    print '<br>';
}
for($i = 0; $i < 10; $i++) {
    print '<div class="column">';
    for($j = 0; $j < 21; $j++) {
        if($j >= $start + $i && $j <= $end - $i) {
            $span = '<span class="colored" style="color: rgb(' .rand(0, 256). ',' .rand(0, 256). ',' 
            .rand(0, 256).'">' .'&block;'. '</span>';
            print $span;
        } else {
            print '<span style="color: white;">&block;</span>';
        }     
    }
    print '</div>';
    print '<br>';
}
?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
<!DOCTYPE html5>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
<div class="rhombus">
<?php
$array = [];
  for($i = 0; $i < 42; $i++) {
    for($j = 0; $j < 42; $j++) {
        $span = '<span style="color: rgb(' .rand(0, 256). ',' .rand(0, 256). ',' 
        .rand(0, 256).'">' .'&block;'. '</span>';
        array_push($array, $span);
        print $span;
          
    }
    print '<br>';
}
?>
</div>
</body>
</html>
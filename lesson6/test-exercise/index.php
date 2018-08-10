<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Formos</title>
</head>
<body>
    <?php
    $vardas = '';
    $elpastas = '';
    $slaptazodis = '';

    if( isset($_GET['vardas']) ) {
        $vardas = $_GET['vardas'];
    }

    if(isset($_GET['elpastas'])) {
        $elpastas = $_GET['elpastas'];
    }

    if(isset($_GET['slaptazodis'])) {
        $slaptazodis = $_GET['slaptazodis'];
    }

    ?>
   
<p>Jūsų vardas: <b> <?php echo $vardas ?> </b></p>
<p>Jūsų el. paštas: <b> <?php echo $elpastas ?> </b></p>
<p>Jūsų slaptažodis: <b> <?php echo preg_replace('/./', '*', $slaptazodis) ?> </b></p>
<br>

<form action="index.php" method="get">
<p>Jūsų vardas:</p>
<br>
<input type="text" name="vardas" value="">
<br>
<p>Jūsų el. pašto adresas:</p>
<br>
<input type="text" name="elpastas" value="">
<br>
<p>Jūsų slaptažodis:</p>
<br>
<input type="password" name="slaptazodis" value="">
<br>
<input type="submit" value="Išsiųsti">
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$kainaKateEur = 30;
$kainaBriedisEur = 10000;
$kainaSuoEur = 150;
$kainaVarleEur = 10;

$xml_string = file_get_contents("https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");
// echo $xml_string;
preg_match('/currency=\'USD\' rate=\'(\d\.\d+)\'/', $xml_string, $masyvas);
// print_r($masyvas);

?>
<a href="new.php?currency=eur">Kainos eurais</a>
<a href="new.php?currency=usd">Kainos doleriais</a>
<?php
if(empty($_GET)) { ?>
<div><p>Katė: <?php echo $kainaKateEur ?> eur</p></div>
<div><p>Briedis: <?php echo $kainaBriedisEur ?> eur</p></div> 
<div><p>Šuo: <?php echo $kainaSuoEur ?> eur</p></div> 
<div><p>Varlė: <?php echo $kainaVarleEur ?> eur</p></div>
<?php }
elseif($_GET['currency'] == 'eur') { ?>
<div><p>Katė: <?php echo $kainaKateEur ?> eur</p></div>
<div><p>Briedis: <?php echo $kainaBriedisEur ?> eur</p></div> 
<div><p>Šuo: <?php echo $kainaSuoEur ?> eur</p></div> 
<div><p>Varlė: <?php echo $kainaVarleEur ?> eur</p></div>
<?php }
elseif($_GET['currency'] == 'usd') { ?>
<div><p>Katė: <?php echo number_format($kainaKateEur * $masyvas[1], 2, '.', ' ') ?> usd</p></div>
<div><p>Briedis: <?php echo number_format($kainaBriedisEur * $masyvas[1], 2, '.', ' ') ?> usd</p></div> 
<div><p>Šuo: <?php echo number_format($kainaSuoEur * $masyvas[1], 2) ?> usd</p></div> 
<div><p>Varlė: <?php echo number_format($kainaVarleEur * $masyvas[1], 2) ?> usd</p></div>
<?php } ?> 
</body>
</html>
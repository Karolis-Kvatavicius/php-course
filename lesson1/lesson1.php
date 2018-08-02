<h1>Labas HTML</h1>
<?php
echo 'Labas PHP';
?>
<h2>Vėl HTML</h2>
<?php
$name = 'Karolis';
$surname = 'Kvatavičius';
$bornIn = 1990;
$currentYear = 2018;

echo 'Aš esu ' .$name. ' ' .$surname. ' gimęs ' .$bornIn. ' metais. Dabar yra ' .$currentYear. ' metai.';
echo '<br>';
echo 'Aš esu ' .$name. ' ' .$surname. '. Man yra ' .($currentYear - $bornIn). ' metai';
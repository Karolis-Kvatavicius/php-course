<?php
print '<pre>';
print '<h3>Testas</h3>';
$a = [1,2,3,4];

//& leidzia modifikuoti masyva prieidamas prie jo elementu per reference.
foreach ($a as &$value) {
    print '<br>'. $value. ' - ' .$a[3]; 
}

//Referencams reikia daryt unset(), kitaip jis niekur nedingsta, ir sukelia 
//nepageidaujamus rezultatus toliau einanciame kode.
unset($value);

print '<br>';
foreach ($a as $value) {
  print '<br>'. $value. ' - ' .$a[3]; 
}
print '<br><br>';

//funkcija, kuri generuotu vardas(5-7 raides) pavarde(7-10 raidziu)
function generateNameSurname() {
    $nameLength = rand(5, 7);
    $surnameLength = rand(7, 12);
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomName = '';
    $randomSurname = '';

    for ($i = 0; $i < $nameLength; $i++) {
        $randomName .= $characters[rand(0, $charactersLength - 1)];
    }  

    for ($i = 0; $i < $surnameLength; $i++) {
        $randomSurname .= $characters[rand(0, $charactersLength - 1)];
    }

    return ucfirst($randomName). ' - ' .ucfirst($randomSurname);
}

//Masyvas uzpildytas generateNameSurname() funkcija is 30 elementu.
print '<h3>Masyvas uzpildytas generateNameSurname() funkcija</h3>';
$arrayOfPeople = [];

for ($i=0; $i < 30; $i++) { 
    $arrayOfPeople[] = generateNameSurname();
}
print_r($arrayOfPeople);

//Paliekamos tik pavardes
print '<h3>Paliekamos tik pavardes</h3>';
foreach ($arrayOfPeople as &$value) {
    $value = str_replace('- ', '', substr($value, strpos($value, '-'), strlen($value)));
}
unset($value);
print_r($arrayOfPeople);


//Masyvas surikiuotas nuo trumpiausios pavardes iki ilgiausios
print '<h3>Pavardes nuo trumpiausios iki ilgiausios</h3>';
function sortNames($a,$b){
    return strlen($a) - strlen($b);
}

usort($arrayOfPeople,'sortNames');
print_r($arrayOfPeople);
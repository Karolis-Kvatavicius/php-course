<?php
print '<pre>';
$a = [1,2,3,4];

foreach ($a as &$value) {
    print '<br>'. $value. ' - ' .$a[3]; 
}

//& leidzia modifikuoti masyva prieidamas prie jo elementu per reference.
//Referencams reikia daryt unset(), kitaip jis niekur nedingsta, ir sukelia 
//nepageidaujamus rezultatus toliau einanciame kode.
unset($value);


print '<br>';
foreach ($a as $value) {
  print '<br>'. $value. ' - ' .$a[3]; 
}
print '<br><br>';

//funkcija, kuri generuotu vardas(5-7) pavarde(7-10)
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

//masyvas uzpildytas generateNameSurname() funkcija is 30 elementu.
$arrayOfPeople = [];

for ($i=0; $i < 30; $i++) { 
    $arrayOfPeople[] = generateNameSurname();
}
print_r($arrayOfPeople);

//Paliekamos tik pavardes
foreach ($arrayOfPeople as &$value) {
    $value = str_replace('- ', '', substr($value, strpos($value, '-'), strlen($value)));
}
unset($value);

//Masyvas surikiuotas nuo trumpiausios pavardes iki ilgiausios
for($i = 0; $i < sizeof($arrayOfPeople) + 1; $i++) {
    $temp = '';
    if ($i == sizeof($arrayOfPeople) - 1) {
        break;
    } 
    if (strlen($arrayOfPeople[$i]) > strlen($arrayOfPeople[$i+1])) {
       $temp = $arrayOfPeople[$i+1];
       $arrayOfPeople[$i+1] = $arrayOfPeople[$i];
       $arrayOfPeople[$i] = $temp;

    }
}

print_r($arrayOfPeople);
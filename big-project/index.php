<?php

require_once 'Deaths.php';
require_once 'DeathCharacterization.php';

$row = 1;
$rows = [];

if (($handle = fopen("vtmec-causes-of-death.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $num = count($data);
        $row++;
        $causes = explode(';', $data[3]);
        $types = explode(';', $data[4]);

        $deaths = new Deaths($data[0], $data[1], $data[2]);
        $deathCharacterization = new DeathCharacterization();

        $deathDate = $deaths->getDate();
        $deathReasons = $deaths->getReason();
        $deathCauses = $deathCharacterization->getDeathsReasons($data[3]);
//        var_dump($data[2]);die;
        $detailedDeaths = new DeathCharacterization();

//       echo $data[0] . '|' . $data[1] . '|' . $data[2] . '|' . $data[3] . '|' . $data[4] . '|' . $data[5];

//   id     datums",   "naves_celonis",   "nevardarbigas_naves_celonis", "vardarbigas_naves_lietas_apstakli", "vardarbigas_naves_veids"

        echo $deaths->getID() . '|' . $deaths->getDate() . '|' . $deaths->getReason() .  PHP_EOL;

        if ($row > 50) break;
    }
    fclose($handle);
}

//date = datums
//cause = cēlonis
//reason = iemesls
//type = tips
//characterization = raksturojums
//form = veids
//circumstances = apstākļi


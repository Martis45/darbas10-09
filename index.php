<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Darbas </h1>
    <?php
    // 1 UZDUOTIS 
    /*
    $numbers = [7.3, 2.5, 3.8, 9.3, 6.3];
    $average = array_sum($numbers) / count($numbers);
    echo $average;
    */

    // 2 UZDUOTIS
/*
    $vardai = array(
        'Lukas'=>6.6,
        'Rimvydas'=>5.3,
        'Herkus'=>2.3,
        'Titas'=>8.9,
        'Tomas'=>7.5
    );
    foreach ($Vardai as $name => $value) {
        if($value > 4){$PositiveVidurkis = 'Teigiamas';}else{$PositiveVidurkis = 'Neigiamas';}
        echo $name , ':' , $value , ' - ', $PositiveVidurkis, '<br>';
    }

    //echo '<br>';
    //$Vardaividurkis = array_sum($Vardai)/count($Vardai);
    //echo $Vardaividurkis;
*/

// 3 UZDUOTIS

$mokiniai = array(
    "Tomas" => array("Lietuviu" => 6, "Matematika" => 3, "Anglu" => 9),
    "Lukas" => array("Lietuviu" => 5, "Matematika" => 6, "Anglu" => 7),
    "Loreta" => array("Lietuviu" => 9, "Matematika" => 10, "Anglu" => 10)
    );
    
    foreach ($mokiniai as $vardas => $dalykai) {
    $vidurkis = array_sum($dalykai) / count($dalykai);
    echo "Mokinys: $vardas, Vidurkis: $vidurkis ";
    
    if ($vidurkis > 4) {
    echo "- gali pereiti į kitus metus.";
    } else {
    echo "- negali pereiti į kitus metus.";
    }
    
    echo "
    ";
    }


    ?>
</body>
</html>
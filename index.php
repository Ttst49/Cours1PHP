<?php

$table="";
$result="";
$table2 = "";
$secondesannees= (60*60*24*365);
$animal="";
$animal2="";


for ($i=0;$i<=10;$i++){
    $result.="coucou";
}

$tableau = ["rouge","bleu","vert","marron","rose"];

$tableau2 = ["rouge","bleu","vert","marron","dauphin","rose"];

foreach ($tableau as $value){
    $table .= "<tr><td>$value</td></tr>";

}

foreach ($tableau2 as $value2){
    if (in_array($value2,$tableau)){
        $table2.= "<tr><td>$value2 Existe</td></tr>";
    }

}


$animaux = [
        "dauphin" =>"bleu",
        "pieuvre"=>"blanc",
        "castor"=>"marron"
];

$animauxDangereux = ["hyene","autruche","cobra","requin","crocodile"];

$animaux2 = [
    "dauphin" =>"bleu",
    "pieuvre"=>"blanc",
    "castor"=>"marron",
    "requin"=>"blanc",
    "dingo"=>"brun",
    "autruche"=>"noir",
    "crocodile"=>"vert"

];


foreach ($animaux as $key =>$valueAnimal){
    $animal.= "<tr><td>$key</td><td>$valueAnimal</td></tr>";
}

foreach ($animaux2 as $key =>$valueAnimal2){
        if (in_array($key,$animauxDangereux)){
            $dangerosite="<p style='border-radius: 50%;background-color: red;width: 10px;height: 10px'></p>";
        }else{
            $dangerosite="<p style='border-radius: 50%;background-color: green;width: 10px;height: 10px'></p>";
        }

    $animal2 .= "<tr><td>$key</td><td>$valueAnimal2</td><td>$dangerosite</td></tr>";
}




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le</title>
</head>
<body>
<h1>le titre</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid iste possimus quidem tenetur ut. Maxime?</p>

<p>resultat: <?php echo $result;?></p>
<p>nbr secondes annees= <?php echo $secondesannees ?></p>
<p>27,54% du nombre au dessus: <?php echo round(0.2754*$secondesannees)?>secondes</p>
<table>
    <thead>
    <tr>
        <th colspan="1">Couleurs</th>
    </tr>
    </thead>
    <tbody>
    <?php echo $table ?>
    </tbody>
</table>

<table>
    <thead>
    <tr>
        <th colspan="1">Couleurs</th>
    </tr>
    </thead>
    <tbody>
    <?php echo $table2 ?>
    </tbody>
</table>

<table>
    <thead>
    <tr>
        <th colspan="1">animaux</th>
    </tr>
    </thead>
    <tbody>
    <?php echo $animal ?>
    </tbody>
</table>

<table style="border: black solid 1px">
    <thead>
    <tr>
        <th colspan="1">animaux</th>
    </tr>
    </thead>
    <tbody>
    <?php echo $animal2 ?>
    </tbody>
</table>

</body>
</html>

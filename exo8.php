<?php
$personnes=[
    [
        "nom"=>"Abdou",
        "age"=>34,
    ],
     [
        "nom"=>"Aminata",
        "age"=>14,
    ],
     [
        "nom"=>"Fatou",
        "age"=>30,
    ]
];
foreach($personnes as $p){
echo $p["nom"]. "<br>";

}
$max = $personnes[0];
foreach($personnes as $p){
    if ($p["age"] > $max["age"]){
        $max= $p;
    }
}
    echo "Le plus agé: " . $max["age"] ."<br>";

$compt = 0;
foreach($personnes as $p){
$compt++;
}
echo "Le nombre total de personne: " . $compt;

?>
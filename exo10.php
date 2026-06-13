<?php
$livres =[
    [
        "titre"=>"L'Étranger",
        "auteur"=>"Albert Camus",
        "disponible"=>true,
    ],

     [
        "titre"=>"Madame Bovary",
        "auteur"=>"Gustave Flaubert",
        "disponible"=>true,
    ],
     [
        "titre"=>"Orgueil et préjugés",
        "auteur"=>"Jean",
        "disponible"=>false,
    ],

     [
        "titre"=>"Heritage",
        "auteur"=>"Sosso",
        "disponible"=>true,
    ],

     [
        "titre"=>"Frankenstein",
        "auteur"=>"Mary Shelley",
        "disponible"=>false,
    ],
];
foreach($livres as $key => $livre){
    echo $livre["auteur"]." : ". $livre["titre"] ."<br>";
}

echo "Les livres disponibles sont: <br>";
foreach($livres as $livre){
    if($livre["disponible"] === true){
        echo "-" .$livre ["titre"]."<br>";
    }
}
$compter=0;
foreach($livres as $livre){
    $compter++ ;
}
echo "Le nombre total de livre: ".$compter ."<br>";

$livres[]= $livre=[
    "titre"=> "une vie de boy",
    "auteur"=> " Ferdinand Oyono",
    "disponible"=>false,
];
$compter=0;
foreach($livres as $livre){
    $compter++ ;
}
echo "Le nombre total de livre apres ajout: ".$compter ."<br>";


?>
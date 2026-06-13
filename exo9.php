<?php
$etudiants=[
    [
        "nom"=>"Rox",
        "note"=>22,
    ],
     [
        "nom"=>"Mamadou",
        "note"=>30,
    ],
     [
        "nom"=>"Oumou",
        "note"=>25,
    ],
     [
        "nom"=>"Amadou",
        "note"=>14,
    ],
     [
        "nom"=>"Soda",
        "note"=>9,
    ]
];
foreach($etudiants as $etudiant){
    echo $etudiant["nom"] . " : ". $etudiant["note"] ."<br>";
    }
    $somme =0;
    $nbr =0;
foreach($etudiants as $etudiant){
$somme = $somme + $etudiant["note"];
$nbr++ ;
}
$moyenne =$somme / $nbr;
echo "La moyenne est : " .$moyenne . "<br>";

$meilleur =$etudiants[0];
foreach($etudiants as $etudiant){
if($etudiant["note"] > $meilleur["note"]){  
    $meilleur = $etudiant;
}
}
echo  "le meilleur etudiant est: ". $meilleur["nom"] . "<br>";

foreach($etudiants as $etudiant){
if($etudiant["note"] >= 10){  
        echo $etudiant["nom"] . " : ". $etudiant["note"] ."<br>";

}
}

?>

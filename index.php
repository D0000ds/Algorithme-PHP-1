
<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbDeCaracteres = strlen($phrase);  // permet de compter le nombre de caractères
$nbDeMot = str_word_count($phrase); // permet de compter le nombre de mots
echo "<br>la phrase (Notre formation DL commence aujourd'hui) contient $nbDeCaracteres caractères<br>";
echo "la phrase (Notre formation DL commence aujourd'hui) contient $nbDeMot mots<br>";
$phraseDemain = str_replace("aujourd'hui", "demain", $phrase);
echo $phraseDemain;

$phrasePalindrome = "engage le jeu que je le gagne";
$phrasePalindromeSansEspace = str_replace(' ', '', $phrasePalindrome); //retire les espaces
$phrasePalindromeInverse = strrev($phrasePalindromeSansEspace); // permet de d'inverser la phrase

if ($phrasePalindromeSansEspace == $phrasePalindromeInverse){ // permet de verifier si c'est un palindrome
    echo "la phrase ($phrasePalindrome) est un palindrome<br>";
}else {
    echo "la phrase ($phrasePalindrome) est pas un palindrome<br>";
}

// algorithme de convertion francs en euros
$valeurFrancs = 100;
$valeurEuros = 6.55;
$convertionFrancsEnEuros = 100/6.55;
$convertionFrancsEnEurosDecimal = number_format($convertionFrancsEnEuros, 2); //permet de delimiter la décimal 

echo "montant en francs : $valeurFrancs<br>";
echo "$valeurFrancs francs = $convertionFrancsEnEurosDecimal €<br>";

// la facture d'un article
$prixUnitaire = 9.99;
$quantite = 5.00;
$tauxTva = 0.20;
$prixQuantite = $prixUnitaire*$quantite;
$valeurtotal =  $prixQuantite + $prixQuantite*$tauxTva;

echo "prix unitaire de l'article : $prixUnitaire €<br>";
echo "quantité : $quantite<br>";
echo "taux de tva : $tauxTva<br>";
echo "le motant de la facture à régler est de : $valeurtotal €<br>";

// algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge
$ageEnfant = 7;

if ($ageEnfant >= 12){
    echo "Catégorie : Cadet<br>";
} elseif ($ageEnfant == 11 or $ageEnfant == 10){
    echo "Catégorie : Minime<br>";
} elseif ($ageEnfant == 9 or $ageEnfant == 8){
    echo "Catégorie : Pupille<br>";
} elseif ($ageEnfant  == 6 or $ageEnfant == 7){
    echo "Catégorie : Poussin<br>";
} else{
    echo "Catégorie indéterminé<br>";
}

//  algorithme qui renvoie la table de multiplication d’un nombre 
$nombreMultiplication = 8;

for ($i = 1; $i <= 10; $i++) {
    $nombreMultiplier = $i*$nombreMultiplication;
    echo "$i * $nombreMultiplication = $nombreMultiplier<br>";
}

// algorithme permettant de savoir si une personne est imposable
$ageEx9 = 32;
$sexeExo9 = "F";

if ($sexeExo9 == "F"){
    if ($ageEx9 <= 35 or $ageEnfant >= 18){
        echo "Age : $ageEx9<br>";
        echo "Sexe : $sexeExo9<br>";
        echo "La personne est imposable<br>";
    } else{
        echo "Age : $ageEx9<br>";
        echo "Sexe : $sexeExo9<br>";
        echo "La personne est pas imposable<br>";
    }
} elseif ($sexeExo9 == "M"){
    if ($ageEx9 > 20){
        echo "Age : $ageEx9<br>";
        echo "Sexe : $sexeExo9<br>";
        echo "La personne est imposable<br>";
    } else{
        echo "Age : $ageEx9<br>";
        echo "Sexe : $sexeExo9<br>";
        echo "La personne est pas imposable<br>";
    }
} else{
    echo "Erreur<br>";
}

// algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€
$montantAPayer = 152;
$montantVerser = 200;
$nbDeBillet10 =0;
$nbDeBillet5 =0;
$nbDePiece1 =0;
$nbDePiece2 =0;
$resteApayer = $montantVerser - $montantAPayer;

echo "Montant à payer : $montantAPayer €<br>";
echo "Montant versé : $montantVerser €<br>";
echo "Reste à payer : $resteApayer €<br>";
echo "*****************************************<br>";

while ( 0 < $resteApayer){
    if ($resteApayer >= 10){
        $resteApayer = $resteApayer-10;
        $nbDeBillet10 = $nbDeBillet10 +1;
    } elseif ($resteApayer >= 5){
        $resteApayer = $resteApayer-5;
        $nbDeBillet5 = $nbDeBillet5 +1;
    } elseif ($resteApayer >= 3){
        $resteApayer = $resteApayer-2;
        $nbDePiece2 = $nbDePiece2 +1;
    } else {
        $resteApayer = $resteApayer-1;
        $nbDePiece1 = $nbDePiece1 +1;
    }
    if ($resteApayer == 0){
        echo "Rendue de monnaie :<br>";
        echo "$nbDeBillet10 billets de 10 € - $nbDeBillet5 billet de 5 € - $nbDePiece2 pièces de 2 € - $nbDePiece1 pièce de 1 €<br>";
    }    
}

// Un tableau de marque de voiture
$marquesDeVoitures = ["Peugeot", "Renault", "BMW", "Mercedes"];
echo "<ul>";
for($i = 0; $i < count($marquesDeVoitures); $i++){
    echo "<li>".$marquesDeVoitures[$i]."</li>";
}
echo "</ul>";

// Un tableau avec prenom et langue associé
$noms = [
    "Virgile" => "Hola",
    "Mickaël" => "Salut",
    "Marie-Claire" =>  "Hello"
];

ksort($noms); //trie dans l'ordre alphabetique

foreach($noms as $prenoms => $langues){
    echo "$langues $prenoms<br>";
}

// algorihme de calcul de moyen générale 
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$y = 0;
$totalnotes = 0;
echo "Les notes obtenues par l’élève sont : ";

for($k = 0; $k < count($notes); $k++){
    echo $notes[$k]." ";
    $y = $y + 1;
    $totalnotes = $totalnotes + $notes[$k];
    if ($y == count($notes)){
        $moyenneGenerale = $totalnotes/count($notes);
        echo "<br>Sa moyenne générale est doc de : ".number_format($moyenneGenerale, 2)."<br>";
    }
}

// Un algorithme pour calculer l'age d'une personne
date_default_timezone_set('UTC');
$dateAjd = strtotime("now");
$dateNaissance = strtotime("1985/01/17");
$dateJour = 86400;
$dateMois = 2629800;
$dateAn = 31536000;
$calculAn = 0;
$calculMois = 0;
$calculJour = 0;


echo "Si la date courante est le ".date("d/m/Y", $dateAjd)." et la date de naissance le ".date("d/m/Y", $dateNaissance)."<br>";

$dateCalcul = $dateAjd - $dateNaissance;

while ($dateCalcul > $dateAn){
    $calculAn = $calculAn + 1;
    $dateCalcul = $dateCalcul - $dateAn;
}
while ($dateCalcul > $dateMois){
    $calculMois = $calculMois + 1;
    $dateCalcul = $dateCalcul - $dateMois;
}
while ($dateCalcul > $dateJour){
    $calculJour = $calculJour + 1;
    $dateCalcul = $dateCalcul - $dateJour;
}

echo "Age de la personne : $calculAn ans $calculMois mois $calculJour jours <br>";

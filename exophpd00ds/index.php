
<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbDeCaracteres = strlen($phrase);  // permet de compter le nombre de caractères
$nbDeMot = str_word_count($phrase); // permet de compter le nombre de mots
echo "la phrase (Notre formation DL commence aujourd'hui) contient $nbDeCaracteres caractères<br>";
echo "la phrase (Notre formation DL commence aujourd'hui) contient $nbDeMot mots<br>";
echo "Notre formation DL commence demain";

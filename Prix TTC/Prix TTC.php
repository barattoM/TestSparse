<?php

$prixHT=$argv[1];
$nbArticle=$argv[2];
$TVA=$argv[3];
$prixTTC= ($prixHT+$TVA/100)*$nbArticle;

echo 'Le prix est de : '.$prixTTC;
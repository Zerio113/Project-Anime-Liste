<?php
function afficheanime($detailanime, $id)
{



$j = $id+1;
echo "<h1>anime n° $j : </h1> <br>";
$nom = $detailanime->{'attributes'}->{'slug'};
$lien = $detailanime->{'links'}->{'self'};
$description = $detailanime->{'attributes'}->{'description'};
$image = $detailanime->{'attributes'}->{'posterImage'}->{'small'};

echo "<img src='$image'>";
echo "<br>";
echo "Le nom de l'animé est $nom <a href=$lien > cliquer ici </a>";
echo "<br>";
echo "Description : $description";



}



?>
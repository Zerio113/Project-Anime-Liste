<html>
  <head>
    <meta charset="utf-8">
    <title>Barre de recherche</title>
  </head>
  <h1>Quelle manga cherchez vous ?</h1>
  <body>



  <form action = "site.php" method = "get">
   <input type = "search" name = "ville">
   <input type="submit">
  </form>


  
 <?php $recherche = $_GET["ville"];
include("fonction.php");



$json = file_get_contents("https://kitsu.io/api/edge/anime?filter[text]=$recherche");


$parsed_json = json_decode($json);

echo "<table border=1>";
   

for($i=0; $i<count($parsed_json->{'data'}); $i++){

if($i % 3 == 0) {
 if($i > 0){
  echo "</tr>";
 }
    echo "<tr><td>";
    afficheanime($parsed_json->{'data'}[$i],$i);
    echo "</td>" ;
}

else  {
    
echo "<td>";
afficheanime($parsed_json->{'data'}[$i],$i);
echo "</td>" ;
}
}
echo "</tr> </table>";

    ?>
    
  </body>
</html>
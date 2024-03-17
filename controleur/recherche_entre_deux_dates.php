<?php
  include "envoyer.php";
  include "connection.php";


  
$date_debut = $_GET["date_deb"];
$date_fin   = $_GET["date_fin"];

recherche_entre_deux_date($conn, $date_debut, $date_fin);
$conn->close();

?>

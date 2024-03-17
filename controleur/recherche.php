<?php
  include "envoyer.php";
  include "connection.php";

$recherche = $_GET['q'];

recherche($conn,$recherche);
$conn->close();

?>

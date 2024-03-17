<?php
  include __DIR__."/../../controleur/envoyer.php";
  include __DIR__ ."/../../controleur/connection.php";

$recherche = $_GET['q'];
// recherche($conn,$recherche);
// if(isset($_GET["recherche"])){
//     $recherche=$_GET["recherche"];
//     recherche($conn,$recherche);
// }


recherche($conn,$recherche);
$conn->close();

?>

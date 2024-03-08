<?php
    include __DIR__."/../controleur/envoyer.php";
    include __DIR__ ."/../controleur/connection.php";
   
    include __DIR__."/../header.php";
 
    if(isset($_GET["id"])){
        $id =$_GET["id"];
        generer_pdf($conn, $id);
        // header("Location:interface_envoyer.php"); 

    }
   
    $conn->close();

?>
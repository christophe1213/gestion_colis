<?php
    include __DIR__."/../../controleur/envoyer.php";
    include __DIR__ ."/../../controleur/connection.php";

    modifier_envoyer($conn);
    include __DIR__. "/../header.php";
    // $query_affichage = "SELECT * FROM envoyer;";
    // affichage_envoyer($conn, $query_affichage);  
    $conn->close();
?>
<body>
    <?php
     include __DIR__ ."/../../controleur/connection.php";
    include __DIR__. "/../../controleur/selection_donne.php";
    echo "<div class=\"a\">";
    echo "<div class=\"contenaire\">";
    if( isset($_GET["id"])&&
        isset($_GET["idvoit"])&&
        isset($_GET["colis"])&&
        isset($_GET["nomEnvoyeur"])&&
        isset($_GET["emailEnvoyeur"])&&
        isset($_GET["date_envoi"])&&
        isset($_GET["frais"])&&
        isset($_GET["nomRecepteur"])&&
        isset($_GET["contactRecepteur"])){

            $idenvoi            = $_GET["id"];
            $idvoit             = $_GET["idvoit"] ;
            $colis              = $_GET["colis"]; 
            $nomEnvoyer         = $_GET["nomEnvoyeur"] ;
            $date_envoi         = $_GET["date_envoi"]; 
            $email_envoi        = $_GET["emailEnvoyeur"]; 
            $frais              = $_GET["frais"]; 
            $nomRecepteur       = $_GET["nomRecepteur"]; 
            $contactRecepteur   = $_GET["contactRecepteur"];

             echo "<form class= \"ajout\" action=\"modifier_envoye.php\" method=\"POST\">
             <a class=\"fermer\" href=\"interface_envoyer.php\"><img class=\"icons\" src=\"../../Style/icons/delete.png\" alt=\"fermer\" title=\"fermer\"></a
                            <label for=\"idenvoi\">N°</label>
                            <input type=\"number\" value=\"".$idenvoi."\" name=\"idenvoi\"><br>
                            <label for=\"idvoit\">id voiture</label><br>
                            
                            <select class=\"selection\" name=\"idvoit_nouveau\">";
    
        
                            $i="idvoit";$table="voiture";
                            //selection donnée pour identification VOITURE
                            selection_donne($conn,$i,$table);
                            echo "<select><br>";             
          echo              " 

                            <label for=\"colis\">colis</label>
                            <input type=\"texte\" value=\"".$colis."\" name=\"colis_nouveau\"><br>
                            <label for=\"nomEnvoyeur\">Nom de l'envoyeur</label><br>
                            <input type=\"texte\" value=\"".$nomEnvoyer."\" name=\"nomEnvoyeur_nouveau\"><br>
                            <label for=\"idenvoi\">date d'envoi</label><br>
                            <input type=\"datetime-local\" value=\"".$date_envoi."\" name=\"date_envoi_nouveau\"><br>
                            <label for=\"idenvoi\">email de l'envoyeur</label><br>
                            <input type=\"email\" value=\"".$email_envoi."\" name=\"emailEnvoyeur_nouveau\"><br>
                            <label for=\"frais\">Frais</label><br>
                            <input type=\"number\" value=\"".$frais."\" name=\"frais_nouveau\"><br>
                            <label for=\"nomRecepteur\">nom de Recpteur</label><br>
                            <input type=\"texte\" value=\"".$nomRecepteur."\" name=\"nomRecepteur_nouveau\"><br>
                            <label for=\"contactRecpteur\">Contact Recepteur</label><br>
                            <input type=\"texte\" value=\"".$contactRecepteur."\" name=\"contactRecepteur_nouveau\"><br>
                            <input type=\"submit\" value=\"Modifier\">
                    </form>";
    }
    echo "</div>";
    echo "</div>";
    $conn->close();
    ?>
     
     <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Envoyer")
    </script>
    <script src="../../Style/js/style.js"></script>
    <script>
        style(ajout)
    </script>

</body>
</html>
<?php
    include __DIR__."/../../controleur/envoyer.php";
    include __DIR__ ."/../../controleur/connection.php";

    modifier_envoyer($conn);
    include __DIR__. "/../header.php";

    $conn->close();
?>
<?php
  include __DIR__ ."/../../controleur/connection.php";
  include __DIR__. "/../../controleur/selection_donne.php";
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

    echo"<div class=\"message\" id=\"insertion_envoyer\">
            <div class=\"container\">
        <form action=\"modifier_envoye.php\" method = \"POST\">
            <a href=\"interface_Envoyer.php\"><img src=\"../../Style/icons/delete.png\" class=\"fermer\" alt=\"fermer\" title=\"fermer\"></a>
            <p class=\"tittre_message\">Modification</p>
            <input type=\"number\" value=\"".$idenvoi."\" name=\"idenvoi\"><br>
            <label for=\"idvoit\">id voiture</label><br>
        
            <select class=\"selection\" name=\"idvoit_nouveau\">";


            $i="idvoit";$table="voiture";
            //selection donnée pour identification VOITURE
            selection_donne($conn,$i,$table);
            echo "<select><br>";             
            echo "<input type=\"texte\" value=\"".$colis."\" name=\"colis_nouveau\"><br>
            <input type=\"texte\" value=\"".$nomEnvoyer."\" name=\"nomEnvoyeur_nouveau\"><br>
            <input type=\"datetime-local\" value=\"".$date_envoi."\" name=\"date_envoi_nouveau\"><br>
            <input type=\"email\" value=\"".$email_envoi."\" name=\"emailEnvoyeur_nouveau\"><br>
            <label for=\"frais\">Frais</label><br>
            <input type=\"number\" value=\"".$frais."\" name=\"frais_nouveau\"><br>
            <input type=\"texte\" value=\"".$nomRecepteur."\" name=\"nomRecepteur_nouveau\"><br>
            <input type=\"texte\" value=\"".$contactRecepteur."\" name=\"contactRecepteur_nouveau\"><br>
            <input type=\"submit\" value=\"Modifier\">
        </form>";
  }else{
     echo "echec de modification";
    }
          
            $conn->close();

  
?>
 
     <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll(".navbar a")
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
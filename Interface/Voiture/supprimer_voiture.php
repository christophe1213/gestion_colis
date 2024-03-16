<?php
   //Connection de base de données et appelle les fonctions sur voiture.php
   include __DIR__ ."/../../controleur/connection.php";
   include __DIR__."/../../controleur/voiture.php";
  if(isset($_GET["supp"])){
    supprimer_voiture($conn);
}        
  //Affichage de donné
//   $query = "SELECT * FROM voiture; ";
  include __DIR__."/../header.php";
//   affichage_voiture($conn, $query);
    $conn->close();
 
?>
<?php
    
?>
<div class='a'>
<div class="contenaire">
            <div class="suppression">
            <a class="fermer" href="interface_Voiture.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
                <p>Vous voulez le supprimer</p>
                <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_voiture.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_Voiture.php\">NON</a></button>"
                ?>
            </div>

    </div>
 
</div>

    <script src="../../js/b.js"></script>
    <script>
        document.title="Voiture"
        titre=document.querySelectorAll("#navbar")
        nav_courante("Voiture")
    </script>
    <script src="../../Style/js/style.js"></script>
    <script>
        style(suppression)
    </script>
</body>
</html>
<?php
   include __DIR__. "/../controleur/connection.php";
   include __DIR__."/../controleur/recevoir.php";
if(isset($_GET["supp"])){
    supprimer_recevoir($conn);
}
include __DIR__."/../header.php";
$query = "SELECT * FROM recevoir; ";
affichage_recevoir($conn, $query);

$conn->close();
?>

<div class = "a">
       <div class="contenaire">
            <div class="suppression">
                <a class="fermer" href="interface_Recevoir.php"><img class="icons" src="../icons/delete.png" alt="fermer"></a>
                <p>Vous voulez le supprimer</p>
            <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_recevoir.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_Recevoir.php\">NON</a></button>"
            ?>
            </div>

        </div>
    </div>  
    <script src="../js/b.js"></script>
    <script>
        document.title="Recevoir"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Recevoir")
        document.body.style.backgroundColor="black"
    </script>
    <body>
    </html>
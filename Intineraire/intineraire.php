<?php
        include __DIR__."/../controleur/Intineraire.php";
        include __DIR__ ."/../controleur/connection.php";
         ajout_Intinéraire($conn);
            
        modifier_intineraire($conn);
        include __DIR__."/../header.php";
        //Suppression de la donnée 
if(isset($_GET["supp"])){
    supprimer_intneraire($conn);
}
    ?>
    <?php
        // include __DIR__."/../controleur/Intineraire.php";
        include __DIR__ ."/../controleur/connection.php";
        //Affichage de donnée

        $query = "SELECT * FROM intineraire; ";
        affichage_Intineraire($conn, $query);      
        $conn->close();
    ?>
    <div class = 'a'>
    <div class="contenaire">
        <p id="message_erreur"></p>
        <form class="ajout"  id="" action="intineraire.php" method = "POST">
        <a class="fermer" href="interface_intineraire.php"><img class="icons" src="../icons/delete.png" alt="fermer"></a>
        <label for="codeit" >Code Intinéraire</label>
        <input type="text" id="codeit" name="codeit" required ><br>
        <label for="Nom">Ville départ</label><br/>
        <input type="text" id="villedep" name="villedep" required><br>
        <label for="ville">Ville d'arrivée</label>
        <input type="text" id="villearriv" name="villearriv" required ><br>
        <input  type="submit"value ="Ajouter" id="Ajout" >

    </form>
</div>

<?php
 
 echo  "<div class=\"a\">";
 echo "<div class=\"contenaire\">";

      $codeit_modifier       = $_GET["id"];
      $villedep_modifier     = $_GET["villedep"] ;
      $villearriv_modifier   = $_GET["villearriv"] ;


      echo "<form  class=\"ajout\" action=\"modifier_Intineraire.php\" method=\"POST\">
                         <a class=\"fermer\" href=\"interface_intineraire.php\"><img class=\"icons\" src=\"../icons/delete.png\" alt=\"fermer\"></a>
                        
                         <input type=\"submit\" value=\"Modifier\">
             </form>";
 
     echo "</div>";
     echo "</div>";
 
 ?>
<div class = "a">
       <div class="contenaire">
            <div class="suppression">
                <a class="fermer" href="interface_intineraire.php"><img class="icons" src="../icons/delete.png" alt="fermer"></a>
                <p>Vous voulez le supprimer</p>
            <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_intineraire.php?\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_intineraire.php\">NON</a></button>"
            ?>
            </div>

        </div>
    </div>  

</div>
    <script src="../js/b.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll("#navbar")
       
        nav_courante("Intineraire")
       
    </script>
    <script>
        let a = document.querySelectorAll('.a')
        let modif= document.getElementById('ajout')
        let supp =document.getElementById('supp')
        let modi =document.getElementById('modif')
        let ajout=document.getElementById('ajout')
        for(i=0;i<a.length;i++){
            a[i].style.display="none";
        }
        modif.href="#"
        modi.href="#"
        supp.href="#"
        document.links="http://localhost/gestion_colis/Intineraire/Intineraire.php?id=I2&villedep=Fianaratsoa&villearriv=Toamasina"
        modif.addEventListener('click', function(){
            // alert('Kaiza')
            a[0].style.display="flex"
           
        })
        a[1].style.display="flex"
        modi.addEventListener('click',function(){
            a[1].style.display="flex"
            //  window.location.href="http://localhost/gestion_colis/Intineraire/Intineraire.php?id=I2&villedep=Fianaratsoa&villearriv=Toamasina"
        })
    
        supp.addEventListener('click', function(){
            a[2].style.display="flex"
        })
        // ajout.href="#"
        // ajout.addEventListener('clik', function() {
        //     a[0].style.display="flex"
        // })
        // window.location.href="http://localhost/gestion_colis/Intineraire/modifier_Intineraire.php?kaiza"

        document.write("<?php
            echo "hello"
        ?>")
    </script>
</body>
</html>
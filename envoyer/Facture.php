
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>Facture d'envoye de colis</h1>
        <?php
            include __DIR__."/../controleur/envoyer.php";
            include __DIR__ ."/../controleur/connection.php";
            if(isset($_GET["id"])) {
                $id = $_GET["id"];
            $querry="SELECT *  from  envoyer  where  idenvoi='$id'; ";
                $conn->query($querry);
                $r=$conn->query($querry);
                while($line=$r->fetch_assoc()){
                    echo "<p>strong>N°Facture:</strong>".$line["idenvoi"]."</p>";
                    echo "<p>strong>Déstination</strong>F".$line["idvoit"]."</p>";
                    echo "<p>strong></strong>FColis:".$line["colis"]."</p>";
                    echo "<p>strong></strong>FNom  Envoyeur".$line["nomEnvoyeur"]."</p>";
                    echo "<p>strong></strong>Femail  :".$line["emailEnvoyeur"]."</p>";
                    echo "<p>strong></strong>Fdate  d'envoi".$line["date_envoi"]."</p>";
                    echo "<p>strong></strong>FFrais  :".$line["frais"]." Ar</p>";
                    echo "<p>strong></strong>FNom  Recepeteur".$line["nomRecepteur"]."</p>";
                    echo "<p>strong></strong>  Contact  Recepteur".$line["contactRecepteur"]."</p>";
                }
                header("Location:dompdf.php?id=".$id);
            }
            $conn->close();
            
            
        ?>
<?php
    // use  Dompdf\Dompdf;
    // require_once 'dompdf/autoload.inc.php';
    // $pdf = new Dompdf();
    // ob_start();
    // require_once 'Facture.php';
    // $html=ob_get_contents();
    // ob_end_clean();
    // $pdf->loadHtml($html);
    // $pdf->render();
    // $pdf->stream('Fichier.pdf');
    // // include("controleur/envoyer.php");
    

?>
    </div>
   
</body>
</html>

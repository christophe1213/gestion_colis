<?php
  include "envoyer.php";
  include "connection.php";
   use  Dompdf\Dompdf;
   require_once 'dompdf/autoload.inc.php';
 
   $pdf = new Dompdf();
   ob_start();
   //En tete de facture
   require_once 'Facture.html';
   $html=ob_get_contents();
  
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $querry="SELECT idenvoi, villedep, villearriv,colis,nomEnvoyeur,emailEnvoyeur,date_envoi,envoyer.frais,nomRecepteur,contactRecepteur from 
    envoyer,intineraire,voiture  where  voiture.idvoit=envoyer.idvoit and voiture.codeit=intineraire.codeit and idenvoi='$id'; ";
    
    $conn->query($querry);
    $r=$conn->query($querry);
    $line=$r->fetch_assoc();
        
  
//Corps de la facture
$body="<body>
    <div>
        <h1>Facture d'envoye de colis</h1>
        <p><strong>N°Facture:</strong>".$line["idenvoi"]."</p>
        <p><strong>Déstination:</strong>".$line["villedep"]." - ".$line['villearriv']."</p>
        <p>  <strong>Colis</strong>:".$line["colis"]."</p>
        <p>  <strong>Nom  Envoyeur:</strong>".$line["nomEnvoyeur"]."</p>
        <p>  <strong>email</strong> :".$line["emailEnvoyeur"]."</p>
        <p>  <strong>date  d'envoi:</strong>".$line["date_envoi"]."</p>
        <p>  <strong>Frais  :</strong><span>".$line["frais"]." Ar</p>
        <p>  <strong>Nom  Recepeteur:</strong>".$line["nomRecepteur"]."</p>
        <p>  <strong>Contact  Recepteur:</strong>".$line["contactRecepteur"]."</p>
    </div>
</body>  
</html>";
ob_end_clean();
$conn->close();
$html=$html.$body;
   $pdf->loadHtml($html);
   $pdf->render();
   $pdf->stream('envoye'.$id.'.pdf');
}else{
    
}


?>
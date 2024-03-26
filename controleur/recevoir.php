<?php
    include "Execution_Requete.php";
    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions

    function affichage_recevoir($c)
    {
        $q = "SELECT * FROM recevoir; ";   
        $r = $c->query($q);
        if($r->num_rows>0){
            
            while($line = $r->fetch_assoc()){
                echo" <tr>";
                echo "<td>".$line["idrecept"]."</td>";
                echo "<td>".$line["idenvoi"]."</td>";
                echo "<td>".$line["date_recept"]."</td>";
                echo "<td><a href=\"modifier_recevoir.php?id=".$line["idrecept"]."&idenvoi=".$line["idenvoi"]."&date_recept=".$line["date_recept"]."\">
                <img src=\"../../Style/icons/modifier.jfif\" alt=\"modifier\" width=\"25px\" height=\"25px\"></a></td>";        

                echo "<td><a href=\"supprimer_recevoir.php?id=".$line["idrecept"]."\">
                    <img src=\"../../Style/icons/supprimer.png\" alt=\"supprimer\" width=\"25px\" height=\"25px\"></a></td>";        
                 echo"</tr>";
        
            }
        }
        else{
            echo" Aucune reception";
        }
    
    }
    
    function insertion_recevoir($c)
    {
        if(isset($_POST["idrecept"])&&isset($_POST["idenvoi"])&&isset($_POST["date_recept"])){
            $idrecept = $_POST["idrecept"];
            $idenvoi    = $_POST["idenvoi"] ;
            $date_recept    = $_POST["date_recept"] ;

            $query="INSERT INTO recevoir VALUE
                    (".$idrecept.",".$idenvoi.",\"".$date_recept."\");";
          execution_requete($c, $query);
          
          $q="SELECT nomEnvoyeur,emailEnvoyeur,nomRecepteur,date_recept FROM envoyer,recevoir 
                                                                         where recevoir.idenvoi=envoyer.idenvoi and 
                                                                         envoyer.idenvoi=".$idenvoi.";";
          if($r = $c->query($q)){
            while($row = $r->fetch_assoc()){

               $nomEnvoi=$row["nomEnvoyeur"];
               $email=$row["emailEnvoyeur"];
               $nomRecept=$row["nomRecepteur"];
               $date=$row["date_recept"];
            }
       }
       else{
        echo "echec";
      }


     if (envoie_mail('Cooperative',$email, $nomEnvoi,$nomRecept,$date)) {
          header("Location:interface_recevoir.php"); 
    }
    else {
        echo "Une erreur s'est produite";
        
    }
    

        
          
        }    
    }
    function modifier_recevoir($c)
    {
        if(isset($_POST["idrecept"])&&$_POST["idenvoi_nouveau"]&&$_POST["date_recept_nouveau"])
        {
            $idrecpt                = $_POST["idrecept"];
            $idenvoi_nouveau        = $_POST["idenvoi_nouveau"];
            $date_recept_nouveau    = $_POST["date_recept_nouveau"] ;

           $query="UPDATE recevoir set idenvoi=".$idenvoi_nouveau.",
                                      date_recept=\"".$date_recept_nouveau."\"  
                                      where idrecept=\"".$idrecpt."\";";

          execution_requete($c, $query);
          header("Location:recevoir_interface.php"); 
             
        }   
    }
    function supprimer_recevoir($c)
    {
        if(isset($_GET["id"]))
        {
    
            $id = $_GET["id"];
            $querry= "DELETE FROM recevoir where idrecept=".$id." ;";
            execution_requete($c, $querry);
            header("Location:interface_recevoir.php"); 
        }       
         else
         {
            echo "Echec ";
         }
       
    }

    function envoie_mail($from_name,$from_email,$nomEnvoyer,$nomRecept,$date_re){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPSecure = 'ssl';
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;     
        $mail->Username   = 'christophe1213.com@gmail.com';                     //SMTP username
        $mail->Password   = 'edmhrqwyydrwanar';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($from_email,'AthenaTech');
        $mail->isHTML(true);                                 
        $mail->Subject = 'Reception colis';
        $mail->Body    = " Chère ".$nomEnvoyer.", votre colis  que vous avez envoyée est bien réçu par :".$nomRecept." le ".$date_re;
        $mail->setLanguage('fr', '/optional/path/to/language/directory/');
        if (!$mail->Send()) {
            return false;
        }
        else {
            return true;
        }
    
    }
?>
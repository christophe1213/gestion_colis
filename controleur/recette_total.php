<?php
    include "connection.php";

    $query = "SELECT sum(frais) FROM envoyer;";
    if($r= $conn->query($query)){
        $line = $r->fetch_assoc();
        $recectte = $line["sum(frais)"];
        echo $recectte."  Ar";
    }else{
        echo "Echec";
    }
    $conn->close();
?>
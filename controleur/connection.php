<?php
        $server="localhost";
        $user="root";
        $mot_passe="";
        $dbName= "cooperative";
    
        $conn= new mysqli($server, $user, $mot_passe, $dbName);

        if($conn->connect_error){
            echo "Echec de connection";
        }

?>
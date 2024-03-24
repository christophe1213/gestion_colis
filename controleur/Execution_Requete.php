<?php
    
function execution_requete($c,$q){
    if($c->query($q)){
        echo "Requète reussi";
    
    }
    else
    {
        echo"echec";
    }
}    


?>
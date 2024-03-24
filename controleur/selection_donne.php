<?php
  include "connection.php";
  function selection_donne($c,$id,$t){
    selection_donne_modifie($c,$id,$t,'');
}

function selection_donne_modifie($c,$id,$t,$id_value)
{
  $query="SELECT * FROM ".$t.";";

  if($t=='voiture'){
    $query="select idvoit, villedep,villearriv from voiture, intineraire where voiture.codeit=intineraire.codeit;";
  }
  else if($t=="intineraire"){
    $query= "";
  }

  $q=$c->query($query);
  if($q->num_rows>0){
    while($line = $q->fetch_assoc())
  {
    if($t=='envoyer'){
      if($id_value==$line[$id])
        echo "<option value=\"".$line[$id]."\"selected >".$line[$id]."</option>";
        else echo "<option value=".$line[$id].">".$line[$id]."</option>";
     }else{

      if($id_value==$line[$id])
      echo "<option value=\"".$line[$id]."\"selected >".$line[$id]." ( ".$line['villedep'].' à '.$line['villearriv'].' )'."</option>";
      else echo "<option value=".$line[$id].">".$line[$id]." ( ".$line['villedep'].' à '.$line['villearriv'].' )'."</option>";
          
    }
  
  }
  }else{
    echo "<option>vide</option>";
  }
}


        
          
?>
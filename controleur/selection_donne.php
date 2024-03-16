<?php
  include "connection.php";
  function selection_donne($c,$id,$t){
    $query="SELECT ".$id." FROM ".$t.";";
    $q=$c->query($query);
    if($q->num_rows>0){
      while($line = $q->fetch_assoc())
    {
        echo "<option value=".$line[$id].">".$line[$id]."</option>";
          
    }
    }else{
      echo "<option>vide</option>";
    }
    
   
}

function selection_donne_intineraire($c){
  $query ="SELECT * FROM Intineraire;";
  $r = $c->query($query);
  if($r->num_rows>0){
      
      while($line = $r->fetch_assoc()){
        echo "<option value=".$line['codeit'].">".$line['codeit']." ( ".$line['villedep'].' à '.$line['villearriv'].' )'."</option>";
      }
     
  }
  else{
      echo"aucun intinéraire";
  }
}

function selection_donne_intineraire_2($c,$i){
  $query ="SELECT * FROM Intineraire;";
  $r = $c->query($query);
  if($r->num_rows>0){
      
      while($line = $r->fetch_assoc()){
        if($i==$line['codeit'])
            echo "<option value=\"".$line['codeit']."\"selected >".$line['codeit']." ( ".$line['villedep'].' à '.$line['villearriv'].' )'."</option>";
        else echo "<option value=".$line['codeit'].">".$line['codeit']." ( ".$line['villedep'].' à '.$line['villearriv'].' )'."</option>";
      
          }
     
  }
  else{
      echo"aucun intinéraire";
  }
}


        
          
?>
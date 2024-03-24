<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With,Origin,Content-Type,Cookie,Accept');
header('Content-Type: application/json');

include __DIR__ ."/../../controleur/connection.php";

    $querry="SELECT codeit FROM INTINERAIRE ;";
    $r= $conn->query($querry);
    while($row= $r->fetch_assoc()){
        $data[] = $row["codeit"];
    }
    echo json_encode($data);
  
    $conn->close();
?>
<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With,Origin,Content-Type,Cookie,Accept');
header('Content-Type: application/json');

include __DIR__ ."/../../controleur/connection.php";

    $querry="SELECT idrecept FROM recevoir ;";
    $r= $conn->query($querry);
    while($row= $r->fetch_assoc()){
        $data[] = $row["idrecept"];
    }
    echo json_encode($data);
    $conn->close();
?>
<?php

$servername = "localhost";
$database = "projeto-cidades";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

    $estado = $_GET["estado"];
    $select = " SELECT * FROM estado WHERE uf='$estado'";

    $result = $conn-> query($select);

    $linha = $result ->fetch_assoc();
    $idEstado = $linha["id"];

    $selectId = " SELECT * FROM cidade WHERE estado=$idEstado";

    $resultCidade  = $conn-> query($selectId);


    $nomeCidade[] = array();
    while($linhaCidade = $resultCidade ->fetch_assoc()) {
        $nomeCidade[] = $linhaCidade["nome"];
    }

    echo json_encode($nomeCidade);
?>  

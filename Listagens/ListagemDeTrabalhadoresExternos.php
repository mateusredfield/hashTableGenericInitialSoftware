<?php

//Dados do servidor local
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "dbTeste";

//Dados servidor em producao
$servername = "fdb3.leadhoster.com";
$username = "786484_mateus";
$password = "MDS_cbattle2015";
$dbname = "786484_mateus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM trabalhadoresExternos";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
    echo (json_encode($response));
} else {
    echo(json_encode( array('0' => '0 Elements') ));
}

$conn->close();
?>
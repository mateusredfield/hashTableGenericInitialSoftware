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

$sql = "SELECT * FROM empresasClientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//echo "entrou no if";
    while($row = $result->fetch_assoc()) {
       	$response[] = $row;
       	//print_r($response);
    }
    echo (json_encode($response));
} else {
    echo(json_encode( array('0' => '0 Elements') ));
}

$conn->close();
?>
<?php

require_once(__DIR__.'/../resources/support/variables.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Initiations
$cpf = $_POST['cpf'];
$sql = "SELECT * FROM trabalhadoresexternos WHERE cpf = '$cpf' ";
$result = $conn->query($sql);

//Query, fetch, and echo
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
    echo (json_encode($response));
} else {
    echo(json_encode( array('0' => 'No Elements') ));
}

$conn->close();
?>
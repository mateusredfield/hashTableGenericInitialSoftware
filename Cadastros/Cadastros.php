<?php

//Dados do servidor local
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "dbTeste";

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

$nome = $_POST['nome'];
$dataDeNascimento = $_POST['dataDeNascimento'];
$cpf = $_POST['cpf'];
$pis = $_POST['pis'];
$ProfissaoDeRegistro = $_POST['profissaoDeRegistro'];
$enderecoDoProfissional = $_POST['enderecoDoProfissional'];
$telefoneDoProfissional = $_POST['telefoneDoProfissional'];
$emailDoProfissional = $_POST['emailDoProfissional'];
$dataDeRegistro = $_POST['dataDeRegistro'];

$sql = "INSERT INTO trabalhadores 
		VALUES (DEFAULT, '$nome','$dataDeNascimento','$cpf','$pis','$ProfissaoDeRegistro','$enderecoDoProfissional','$telefoneDoProfissional','$emailDoProfissional','$dataDeRegistro')";

$result = $conn->query($sql);

$conn->close();

?>
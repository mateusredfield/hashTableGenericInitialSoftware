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

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$dataDeNascimento = $_POST['dataDeNascimento'];
$deficiencia = $_POST['deficiencia'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$ctps = $_POST['ctps'];
$pis = $_POST['pis'];
$nomeDoPai = $_POST['nomeDoPai'];
$nomeDaMae = $_POST['nomeDaMae'];
$telefoneDoProfissional = $_POST['telefoneDoProfissional'];
$emailDoProfissional = $_POST['emailDoProfissional'];

$sql = "INSERT INTO trabalhadoresExternos 
		VALUES (DEFAULT, '$nome','$sexo','$dataDeNascimento','$deficiencia','$cpf','$rg','$ctps','$pis','$nomeDoPai','$nomeDaMae','$telefoneDoProfissional','$emailDoProfissional')";

$result = $conn->query($sql);

$conn->close();

?>
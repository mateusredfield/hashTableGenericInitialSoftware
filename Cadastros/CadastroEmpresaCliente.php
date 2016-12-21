<?php

require_once(__DIR__.'/../resources/support/variables.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$razaoSocial = $_POST['razaoSocial'];
$enderecoEmpresaCliente = $_POST['enderecoEmpresaCliente'];
$ramoDeAtividade = $_POST['ramoDeAtividade'];
$cnae = $_POST['cnae'];
$grauDeRisco = $_POST['grauDeRisco'];
$nroDeTrabalhadores = $_POST['nroDeTrabalhadores'];
$brPdh = $_POST['brPdh'];
$cnpjCgc = $_POST['cnpjCgc'];
$horarioDeTrabalho = $_POST['horarioDeTrabalho'];
$responsavelLegal = $_POST['responsavelLegal'];
$pisPasepCi = $_POST['pisPasepCi'];
$telefoneEmpresaCliente = $_POST['telefoneEmpresaCliente'];
$emailDaEmpresaCliente = $_POST['emailDaEmpresaCliente'];
$dataDoCadastro = $_POST['dataDoCadastro'];
$dataDoContrato = $_POST['dataDoContrato'];
$tipoDeCobranca = $_POST['tipoDeCobranca'];

$sql = "INSERT INTO empresasclientes 
		VALUES (DEFAULT, '$razaoSocial','$enderecoEmpresaCliente','$ramoDeAtividade','$cnae','$grauDeRisco','$nroDeTrabalhadores','$brPdh','$cnpjCgc','$horarioDeTrabalho','$responsavelLegal','$pisPasepCi','$telefoneEmpresaCliente','$emailDaEmpresaCliente','$dataDoCadastro','$dataDoContrato','$tipoDeCobranca')";

$result = $conn->query($sql);

$conn->close();

?>
<?php
header('Content-Type: application/json; charset=utf-8');

$response = array();
$response["erro"] = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	include 'dbConnection.php';
	
	$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
	mysqli_set_charset($conn, "utf8");
	
	if ($conn->connect_error) { 
		die("Não conectou....: " . $conn->connect_error);
	}
	
	$login = $conn->real_escape_string($_POST['login']);
	$senha = $conn->real_escape_string($_POST['senha']);
	
	$sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		$registro = $result->fetch_assoc();

		$response["registros"] = $result->num_rows;
		$response["erro"] = false;
		$response["login"] = $registro['login'];
		$response["senha"] = $registro['senha'];
		$response["tpusuario"] = $registro['fk_id_tpusuario'];
		$response["datainclusao"] = $registro['datainclusao'];
	} else {
		$response["mensagem"] = "Usuário e/ou senha inválidos!";
	}
	
	$conn->close();
}

echo json_encode($response);
?>
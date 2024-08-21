<?php
header('Content-Type: application/json charset=utf-8');

$response = array();
$response["erro"] = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	include 'dbConnection.php';
	
	$conn = new mysqli($HostName, $HostUser,
					$HostPass, $DatabaseName, $Port);
		
	mysqli_set_charset($conn, "utf8");
	
	if ($conn->connect_error) { 
	
		die("Não conectou....: " . $conn->connect_error);
	}
	
	$login = "'".$_POST['login']."'";
	$semestre = "'".$_POST['semestre']."'";
	
	$sql = "SELECT 
				a.nome AS aluno,
				d.nome AS disciplina, 
				t.nome AS turma, 
				COALESCE(n.a1, '-') AS a1, 
				COALESCE(n.a2, '-') AS a2, 
				COALESCE(n.sub, '-') AS sub, 
				COALESCE(n.a3, '-') AS a3, 
				COALESCE(n.faltas1, '-') AS faltasA1, 
				COALESCE(n.faltas2, '-') AS faltasA2 
			FROM 
				usuario u
			JOIN 
				notasdosemestre n ON n.fk_id_usuario = u.id
			JOIN 
				aluno a ON n.fk_id_aluno = a.id
			JOIN 
				semestre s ON n.fk_id_semestre = s.id
			JOIN 
				disciplina d ON n.fk_id_disciplina = d.id
			JOIN 
				turma t ON n.fk_id_turma = t.id
			WHERE 
				u.login = $login
				AND s.descricao = $semestre;";
	
	$result = $conn->query($sql);
	
//	print_r($result);
	
	if ($result->num_rows > 0) {

		$response["erro"] = false;
		$response["registros"] = $result->num_rows;

		while($row = mysqli_fetch_object($result)){
				$response["data"][] = $row;
		}
		
	} else {

		$response["mensagem"] = "Você não se matriculou no semestre selecionado!";
		
	}
	
	$conn->close();
	
}
echo json_encode($response);
?>
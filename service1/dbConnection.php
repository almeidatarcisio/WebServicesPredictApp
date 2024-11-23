<?php
$ambiente = true;

if ($ambiente) { // Ambiente de Produção
	
	$HostName = "junction.proxy.rlwy.net";
	$HostUser = "root";
	$HostPass = "QEqOFaiMzYjbImEYwKisoJPYgadZFwmK";
	$DatabaseName = "railway";
	$Port = 23503;
	
} else { // Ambiente de Desenvolvimento

	$HostName = "localhost";
	$HostUser = "root";
	$HostPass = "";
	$DatabaseName = "unibrasba";
	
}
?>
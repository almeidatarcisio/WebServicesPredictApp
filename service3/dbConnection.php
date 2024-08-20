<?php
$ambiente = true;

if ($ambiente) { // Ambiente de Produção
	
	$HostName = "autorack.proxy.rlwy.net";
	$HostUser = "root";
	$HostPass = "fasnFlzeUGlilYdXnknBqrdXdrMIVrLe";
	$DatabaseName = "railway";
	$Port = 31021;
	
} else { // Ambiente de Desenvolvimento

	$HostName = "localhost";
	$HostUser = "root";
	$HostPass = "";
	$DatabaseName = "unibrasba";
	
}
?>
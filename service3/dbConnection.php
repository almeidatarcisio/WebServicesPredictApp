<?php
$ambiente = true;

if ($ambiente) { // Ambiente de Produção
	
	$HostName = "webservicespredictapp-production.up.railway.app";
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
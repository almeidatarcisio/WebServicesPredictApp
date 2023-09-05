<?php
$ambiente = true;

if ($ambiente) { // Ambiente de Produção
	
	$HostName = "containers-us-west-126.railway.app";
	$HostUser = "root";
	$HostPass = "CPiVVuGD2hS2BVMyWkER";
	$DatabaseName = "railway";
	
} else { // Ambiente de Desenvolvimento

	$HostName = "localhost";
	$HostUser = "root";
	$HostPass = "";
	$DatabaseName = "unibrasba";
	
}
?>
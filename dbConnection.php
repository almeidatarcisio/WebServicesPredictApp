<?php
$ambiente = true;

if ($ambiente) { // Ambiente de Produção
	
	$HostName = "wb39lt71kvkgdmw0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	$HostUser = "tm4ab7xzn205n7l1";
	$HostPass = "p0ythsi7ylyy2pah";
	$DatabaseName = "bcxc6b0aepzciccy";
	
} else { // Ambiente de Desenvolvimento

	$HostName = "localhost";
	$HostUser = "root";
	$HostPass = "";
	$DatabaseName = "unibrasba";
	
}
?>
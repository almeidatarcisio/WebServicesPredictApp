<?php
$ambiente = true;

if ($ambiente) { // Ambiente de Produção
	
	$HostName = "autorack.proxy.rlwy.net";
	$HostUser = "root";
	$HostPass = "NjuKbzVutoYjXqlWGWcmvevGslMEqJXI";
	$DatabaseName = "railway";
	$Port = 30574;
	
} else { // Ambiente de Desenvolvimento

	$HostName = "localhost";
	$HostUser = "root";
	$HostPass = "";
	$DatabaseName = "unibrasba";
	
}
?>
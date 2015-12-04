<?php
	$client = new SoapClient("bank.wsdl", array('soap_version' => SOAP_1_2, 'trace' => 1));

	$pong = $client->__soapCall("ping", array());
	echo "Ping : " . $pong;

?>
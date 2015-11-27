<?php # HelloServerWsdl.php
# Copyright (c) 2005 by Dr. Herong Yang
#
function ping() { 
   return 1;
} 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("https://pramana.sisdis.ui.ac.id/bank/bank.wsdl",
      array('soap_version' => SOAP_1_2));
   $server->addFunction("ping"); 
   $server->handle(); 
?>
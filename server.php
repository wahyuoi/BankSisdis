<?php 

	$hostname="kartoo.co"; 
	$username="kartoo_coming";  
	$password="password0!";       
	$database="kartoo_coming";  
	$con=mysql_connect($hostname,$username,$password);
	if(! $con)
	{
		die('Connection Failed'.mysql_error());
	}

	mysql_select_db($database,$con);

	function ping() { 
	   return 1;
	} 

	function register($user_id, $nama, $ip_domisili){
		$sql="insert into user(user_id, nama, ip_domisili, saldo) values(". $user_id.",".$nama.",".$ip_domisili.",0)";
        $res=mysql_query($sql);
        var_dump($res);
	}
   
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("https://pramana.sisdis.ui.ac.id/bank/bank.wsdl",
      array('soap_version' => SOAP_1_2));
   $server->addFunction("ping"); 
   $server->handle(); 
?>
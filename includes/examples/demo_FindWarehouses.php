<?php
/*
	This example demonstrates how to obtain a list of warehouses. It is only really
	shown here so you get an idea of how to call the MetaPack system.

	REMEMBER: You need to set the "myusername" and "mypassword" to your API
	credentials. And remember that they are BOTH case-sensitive.
*/

include "php_v5_client.php";

$svc = new InformationServiceService("http://test1.metapack.com/api/5.x/services/InformationService?wsdl",array(
                "login" => "myusername",
                "password" => "mypassword" ) );

$warehouses = $svc->findWarehouses();
foreach( $warehouses as $warehouse ) {
        echo "code=" . $warehouse->code . " name=" . $warehouse->name . "\n";
}

?>


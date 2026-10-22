<?php
/*
 ===============================================================================
	return existing Routes 
	storing controller as array key + method as array value in seperate array
	
	"controllerName" => array(
		"methodName"
	)
 ===============================================================================
*/

return [
	
	"home" => array(
		"index",
		"testdata"
	),	
	
	"auth" => array(
		"login",
		"register",
		"recover"
	)
];

?>
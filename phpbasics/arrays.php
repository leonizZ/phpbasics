

<?php

	// $names = array('leoni', 'jezzet','dodong');


	// print_r($names);

error_reporting(E_ALL);

function encrypt($string){

	$string = strrev($string);
	$string = base64_encode($string);
	$string = md5($string);
 
	return $string;

}

$string = "Hello Motorola";

echo encrypt($string);
?>
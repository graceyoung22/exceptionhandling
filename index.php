<?php

//File not found

if (!file_exists("/tmp/test.txt")) {
	die("File not found");
} else {
	$file = fopen("/tmp/test.txt", "r");
	print "Opened file successfully";
	}
	//Rest of code

//Exceptions

try {
	$error = 'Always throw this error';
	throw new Exception($error);
	//Code following an exception is not executed
	echo 'Never executed';
} catch (Exception $e) {
	echo 'Caught exception: ', $e->getMessage(), "\n";
}
//Continue execution
echo 'Hello world';

?>

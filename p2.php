<?php
  // connect to mongodb
	// display tablles's field
 
	require 'vendor/autoload.php';
	$con = new \MongoDB\Client;
 	$db=$con->dblj1;
 	$collection=$db->mycols;
 	$cursor=$collection->find();
 	foreach ($cursor as $document) {
 		echo $document["name"]."\n";
 		echo $document["rollno"]."\n";
 	}
?>
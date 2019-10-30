<?php
  // connect to mongodb
  //echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
	require 'vendor/autoload.php';
	$con = new \MongoDB\Client;
  	echo "Connection to database successfully";
 	$db=$con->dblj1;
 	echo "<br>database selected successfully";
 	$collection=$db->mycols;
 	//$collection=$db->createCollection("mycols"); for create collections/table
 	echo "<br>collection selected successfully";
 	$document=array("name"=>"raj","rollno"=>56);
 	$collection->insertOne($document);
?>
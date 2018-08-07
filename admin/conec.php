<?php
include('config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$table = isset($table) ? $table : 'competitors';
$sqll = "SELECT * FROM $table";

if (!mysqli_query($conn, $sqll))
{
	echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
	die;
}


function pr($d = 'vacio', $b = false){

	echo '<pre style="border: #000000 1px solid; min-height:50px; display: block;margin-top: 50px; padding-top: 20px;">';
	print_r($d);
//            dump($d);
	echo '</pre>';

	if($b) die();
}
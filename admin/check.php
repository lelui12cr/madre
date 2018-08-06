<?php
session_start();

// SESSION CHECK
if(!isset($_SESSION) || !isset($_SESSION['username']) || empty($_SESSION) || empty($_SESSION['key']) || !isset($_SESSION['key']) || strlen($_SESSION['key']) <= 0 || strlen($_SESSION['key']) > 20){
	header('location: login.php');
	exit;
}

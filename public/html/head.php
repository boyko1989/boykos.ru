<?php session_start();
	include '../../var/path.php';
	$_title = $_SESSION['_title'];
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
 	<title><?php echo $_title?></title>
 	<meta charset="UTF-8">
 	<meta name="format-detection" content="telephone=no">
 	<link rel="stylesheet" href="<?php echo ROOT_URL;?>public/lay/css/style.css">	
 	<link rel="shortcut icon" href="favicon.ico">
 	<!-- <meta name="robots" content="noindex, nofollow"> -->
 	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style>
	 	.center{
			 text-align: center;
		 }
	 </style>
 </head>
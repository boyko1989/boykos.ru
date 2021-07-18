<?php
require_once('functions.php');
$filename = "machinelist.json";

debug($_GET);

$machine = $_GET['name'];

$fd = fopen($filename, "r");

$contents = fread($fd, filesize($filename));
$contents = json_decode($contents, true);

// debug($contents);
echo '<h1>' . $contents['desktops']['machines'][$machine]['name'] . '</h1>';
echo $contents['desktops']['machines'][$machine]['cpu'];

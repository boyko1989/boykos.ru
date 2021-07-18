<?php
error_reporting(0);
require_once('functions.php');

debug($_POST);

// --------------

// Переменные
$maxKey = 0;
$jsonPath = 'srclist.json';

$srcTitle = $_POST['title'];
$srcAuthor = $_POST['author'];
$srcDescription = $_POST['description'];
$srcYear = $_POST['year'];
$srcType = $_POST['type'];
$srcVendor = $_POST['vendor'];
$srcTheme = $_POST['theme'];

$srgGlav = $_POST['GLAV-PC'];
$srgSver = $_POST['sverchok'];
$srgTat = $_POST['TatyanaHDD'];

// --------------



$file = file_get_contents($jsonPath);

$srcList = json_decode($file, TRUE);

unset($file);

debug($srcList);

foreach ($srcList as $value) {
   if ($value['title'] === $srcTitle) {
      // echo 'Ресурс с таким названием уже есть<br>';
      $isTitle = true;
      if ($value['author'] === $srcAuthor) {
         // echo 'Ресурс этого автора есть в наличии<br>';
         $isAuthor = true;
      }
   }
}

if ($isTitle && $isAuthor) {
   echo 'Скорее всего этот ресурс уже есть в библиотеке';
} else {
   foreach ($srcList as $key => $value) {
      $key = intval($key);
      if ($key > $maxKey) {
         $maxKey = $key;
      }
   }
   $srcId = $maxKey + 1;
   $srcList[$srcId] = array(
      'title' => $srcTitle,
      'author' => $srcAuthor,
      'description' => $srcDescription,
      'year' => $srcYear,
      'src-type' => $srcType,
      'vendor' => $srcVendor,
      'theme' => $srcTheme,
      'storage' => array(
         'permanent-storage' => array(
            'GLAV-PC' => $srgGlav,
            'sverchok' => $srgSver,
            'TatyanaHDD' => $srgTat
         )
      )
   );
   file_put_contents($jsonPath, json_encode($srcList));
}

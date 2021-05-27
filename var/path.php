<?php
// Определить протокол
   if ((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off'))) {
      $web_protocol = 'https://';
   } else {
      $web_protocol = 'http://';
   }

// 
   define('DOMAIN', $web_protocol.$_SERVER['SERVER_NAME']);
   define('ROOT', DOMAIN."/");

// Каталог для функционала
define('JOBS', $_SERVER['DOCUMENT_ROOT'].'/jobs/');

   // Каталог для скриптов связи (почта, мессенджеры...)
   define('MESS', JOBS.'messages/');
?>
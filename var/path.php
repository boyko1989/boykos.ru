<?php
// Определить протокол
   if ((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off'))) {
      $web_protocol = 'https://';
   } else {
      $web_protocol = 'http://';
   }

   define('ROOT_URL', $web_protocol.$_SERVER['SERVER_NAME']."/");
// 
   define('DOMAIN', $web_protocol.$_SERVER['SERVER_NAME']);
   define('ROOT', DOMAIN."/");

// Каталог для функционала
define('JOBS', $_SERVER['DOCUMENT_ROOT'].'/jobs/');

   // Каталог для скриптов связи (почта, мессенджеры...)
   define('MESS', JOBS.'messages/');

// Каталог для тем
define('ABOUT', $_SERVER['DOCUMENT_ROOT'].'/about/');
   // Каталог для сообщений для пользователя
   define('INTERACT', ABOUT.'interactives/');
?>
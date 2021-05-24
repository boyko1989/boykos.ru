<?php
// Определить протокол
   if ($_SERVER['HTTPS'] == 1) {
      $web_protocol = 'https://';
   } else {
      $web_protocol = 'http://';
   }

// 
   define('__DOMAIN__', $web_protocol.$_SERVER['SERVER_NAME']);
   define('__ROOT__', __DOMAIN__."/");

//Каталог для функционала
   define('__JOBS__', __ROOT__.'jobs/');
?>
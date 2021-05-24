<?php
   error_reporting(0);
/*
   Всё заработает, когда поправишь php.ini:
   https://www.cyberforum.ru/php-beginners/thread805214.html
   Для этого ты сделал перенаправление на phpinfo -- чтобы узнать где этот файл
*/

   include '../var/path.php';
   // echo $path = JOBS.'routing/routing.php<br>';
   // echo $_SERVER['DOCUMENT_ROOT'];
   
   require JOBS.'routing/routing.php';

   // include '../jobs/routing/routing.php';
?>
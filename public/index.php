<?php
   error_reporting(0);/*

   Всё заработает, когда поправишь php.ini:
   https://www.cyberforum.ru/php-beginners/thread805214.html
   Для этого ты сделал перенаправление на phpinfo -- чтобы узнать где этот файл


   include '../var/path.php';
   echo __JOBS__.'routing/routing.php';
   require_once(__JOBS__.'routing/routing.php');*/

   include '../jobs/routing/routing.php';
?>
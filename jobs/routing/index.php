<?php 
   $uri = ltrim($_SERVER['REQUEST_URI'], '/');
   $path = explode ( '/', $uri);

   switch ($path[0]) {

      # about
      case '': include '../about/main/index.php';
         break;
      case 'layout'; 
      case 'linux'; 
      case 'makets';      
         include '../about/'.$path[0].'/index.php';
         break;
      # jobs
      case 'db';
      case 'messages';
      case 'testing';
      case 'request';
         include '../jobs/'.$path[0].'/index.php';
         break;
     
      default:
         include 'errors.php';
         break;
   }
 ?>
<?php 
   $uri = ltrim($_SERVER['REQUEST_URI'], '/');
   $path = explode ( '/', $uri);

   switch ($path[0]) {

   # main page
      case '': include '../about/main/index.php';
         break;
      
   # about
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
      
   # errors
      default:
         include 'errors.php';
         break;
   }
 ?>
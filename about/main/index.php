<?php session_start();
   $_SESSION['_title'] = 'Веб-разработчик Павел Бойко';
   // echo $_COOKIE['first_index'];
   // echo '<br>'.ROOT_URL;
   // echo '<br>'.ROOT_URL.'public/html/head.php';
   // include ROOT_URL.'public/html/head.php';
   // include ROOT_URL.'public/html/main_body.php';
   include 'html/head.php';
   include 'html/main_body.php';
?>
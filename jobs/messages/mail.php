<?php
   $from = $_POST['from'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];
   $message = $_POST['message'];

   $message = htmlspecialchars($message).'<br>Телефон заявителя -- '.$tel.'<br> Электронная почта -- '.$email;

   $res = mail('hunwiss@gmail.com', 'Заявка с сайта boykos.ru', $message);

   echo $res;

   header("Location: /interactives/after_mail.php");
?>

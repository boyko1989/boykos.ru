<?php
   $from = $_POST['from'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];
   $message = $_POST['message'];
   $message = htmlspecialchars($message).'<br>Телефон заявителя -- '.$tel.'<br> Электронная почта -- '.$email;
   
   mail('hunwiss89@gmail.com', 'Заявка с сайта boykos.ru', $message);

   header("Location: after_mail.php");
?>

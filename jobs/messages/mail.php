<?php
   $from = $_POST['from'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];
   $message = $_POST['message'].'<br>Телефон заявителя -- '.$tel;

   mail($email, 'Заявка с сайта boykos.ru', $message);

   header("Location: /")
?>
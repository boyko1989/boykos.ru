<!DOCTYPE html>
<html lang="ru">
<head>
   <title>Форма обращения</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- include libraries(jQuery, bootstrap) -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <!-- include summernote css/js -->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
   
   <link rel="stylesheet" href="css/style.min.css">
   <style>h1{padding: 80px 0 0 0;}</style>
   <link rel="shortcut icon" href="favicon.ico">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <div class="wrapper">
      <header class="header">
         <?php include "html/header.php";?>
      </header>
      <main class="page">
         <div class="_container">
            <div class="content">
               <h1>Форма для связи</h1>
               <p>Отправьте мне описание Вашего проекта, я обдумаю детали и свяжусь с Вами. Отправляя мне Ваши данные,
                  Вы можете быть уверены, что они не попадут в спам-базы или мошенникам.</p>
               <?php include "html/forms/request_form.php";?>
            </div>
         </div>
      </main>
      <footer class="footer">
         <div class="footer__content _container"></div>
      </footer>
   </div>
   <script src="js/vendors.min.js"></script>
   <script src="js/app.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">

<head>
   <title>Форма обращения</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
   <link rel="manifest" href="favicon/manifest.json">
   <meta name="msapplication-TileColor" content="#AB6000">
   <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
   <meta name="theme-color" content="#AB6000">

   <!-- include libraries(jQuery, bootstrap) -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <!-- include summernote css/js -->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

   <link rel="stylesheet" href="css/style.css">
   <style>
      h1 {
         padding: 80px 0 0 0;
      }
   </style>
   <link rel="shortcut icon" href="favicon.ico">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <?php include "html/header.php"; ?>
      </header>
      <main class="page">
         <div class="_container">
            <div class="content">
               <h1>Форма для связи</h1>
               <p>Отправьте мне описание Вашего проекта, я обдумаю детали и свяжусь с Вами. Отправляя мне Ваши данные,
                  Вы можете быть уверены, что они не попадут в спам-базы или мошенникам.</p>
               <?php include "html/forms/request_form.php"; ?>
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
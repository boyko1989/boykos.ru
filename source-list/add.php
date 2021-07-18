<!DOCTYPE html>
<html lang="ru">

<head>
   <title>Добавление нового ресурса</title>
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

   <link rel="stylesheet" href="/css/style.css">
   <link rel="shortcut icon" href="/favicon.ico">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <?php include "../html/header.php"; ?>
      </header>
      <main class="page">
         <div class="_container">
            <div class="content">
               <div class="hello">
                  <div class="offer-text">
                     <h1>Новый ресурс</h1>
                  </div>
               </div>
               <article class="all-contetnt">
                  <section class="main-text__section">
                     <form method="post" action="add_src.php" enctype=multipart/form-data>
                        <fieldset>
                           <legend>Общее</legend>
                           <label for="title">Название</label><br>
                           <input type="text" name="title" id="title"><br>
                           <label for="year">Год издания</label><br>
                           <select id="year" name="year">
                              <option>2021</option>
                              <option>2020</option>
                              <option>2019</option>
                              <option>2018</option>
                              <option>2017</option>
                              <option>2016</option>
                              <option>2015</option>
                              <option>2014</option>
                              <option>2013</option>
                              <option>2012</option>
                              <option>2011</option>
                              <option>2010</option>
                           </select><br>
                           <label for="type">Вид ресурса</label><br>
                           <select id="type" name="type">
                              <option>Курс</option>
                              <option>Книга</option>
                           </select>
                        </fieldset>
                        <fieldset>
                           <legend>Источник</legend>
                           <label for="author">Автор</label><br>
                           <input type="text" name="author" id="author"><br>
                           <label for="vendor">Учебный центр/Издательство</label><br>
                           <input type="text" name="vendor" id="vendor"><br>
                           <label for="theme">Тема</label><br>
                           <select id="theme" name="theme">
                              <option>UI/UX</option>
                              <option>Вёрстка</option>
                              <option>JavaScript</option>
                              <option>PHP</option>
                              <option>СУБД</option>
                              <option>Python</option>
                              <option>Теория программирования</option>
                              <option>C/C++</option>
                              <option>Java</option>
                              <option>Мобильная разработка</option>
                              <option>Linux</option>
                              <option>Сети</option>
                              <option>Безопасность</option>
                              <option>Английский</option>
                              <option>Электротехника</option>
                           </select>
                        </fieldset>
                        <fieldset>
                           <legend>Описание</legend>
                           <textarea name="description" id="summernote"></textarea>
                        </fieldset>
                        <fieldset>
                           <legend>Пути</legend>
                           <label for="GLAV-PC">GLAV-PC</label><br>
                           <input type="text" name="GLAV-PC" id="GLAV-PC"><br>
                           <label for="sverchok">sverchok</label><br>
                           <input type="text" name="sverchok" id="sverchok"><br>
                           <label for="TatyanaHDD">TatyanaHDD</label><br>
                           <input type="text" name="TatyanaHDD" id="TatyanaHDD"><br>
                        </fieldset>
                        <input type="submit" value="Сохранить">
                     </form>
                  </section>
               </article>
            </div>
         </div>
      </main>
      <footer class="footer">
         <div class="footer__content _container">
         </div>
      </footer>
   </div>
   <script>
      $(document).ready(function() {
         $('#summernote').summernote();
      });
   </script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="/js/vendors.min.js"></script>
   <script src="/js/app.js"></script>

</body>

</html>
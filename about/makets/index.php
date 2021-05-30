<?php 
   $_SESSION['_title'] = 'Готовые макеты'; 
   include 'html/head.php';
   //include 'html/header.php';
   echo $path[0].'<br>';
   // include ROOT_URL.'/html/head.php';
   // include ROOT_URL.'/html/header.php';
   
?>
<body>
<div class="wrapper">
   <header class="header">
      <?php include "html/header.php";?>
   </header>
   <main class="page">
      <div class="_container">
         <div class="content">
            <h1>Готовые макеты.</h1>
            <p>Здесь Вы сможете посмотреть качество моей работы как верстальщика и бесплатно скачать понравившиеся макеты для ваших сайтов.</p>
            <div class="list_tile">
               <ul>
                  <li>
                     <a href="#"><img src="http://boykos.ru.loc/about/makets/img/chrome_aLDfS25IvH.png" 
                     width="189" height="255" alt="lorem"></a>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
               </ul>
            </div>
         </div>
      </div>
   </main>
   <footer class="footer">
      <div class="footer__content _container">
      </div>
   </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
   <script src="/public/lay/js/vendors.min.js"></script>
   <script src="/public/lay/js/app.min.js"></script>
</body>

</html>
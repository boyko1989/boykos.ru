<?php
require_once('functions.php');
$filename = "srclist.json";

// debug($_GET);

$id = $_GET['id'];

$contents = json2arr($filename);

// echo '<h1>' . $contents[$id]['title'] . '</h1>';
// echo $contents[$id]['description'];
include '../html/head.php';
?>

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
                     <h1><?= $contents[$id]['title'] ?></h1>
                  </div>
               </div>
               <article class="all-contetnt">
                  <section class="main-text__section">
                     <?= $contents[$id]['description'] ?>
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

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="/js/vendors.min.js"></script>
   <script src="/js/app.min.js"></script>
</body>

</html>
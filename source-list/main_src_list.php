<body>
   <div class="overlay">
      <button class="overlay-close">Закрыть</button>
   </div>
   <div class="wrapper">
      <header class="header">
         <?php include "../html/header.php"; ?>
      </header>
      <main class="page">
         <div class="_container">
            <div class="content">
               <div class="hello">
                  <div class="offer-text">
                     <div class="submenu">
                        <div class="submenu-nav">
                           <a href="add.php">Добавить</a>
                           <a href="#" id="getfilters">Фильтры</a>
                           <!-- <select>
                              <option>Фильтровать по ...</option>
                              <option>Теме</option>
                              <option>Автору</option>
                              <option>Издателю</option>
                           </select> -->
                        </div>
                        <div class="submenu-search">

                           <input type="search" id="site-search" name="q" aria-label="Search through site content">

                           <button type="button">Search</button>
                        </div>
                     </div>
                     <h1>Список моих учебных и справочных ресурсов</h1>
                  </div>
               </div>
               <article class="all-contetnt">
                  <section class="main-text__section">

                     <?php

                     require_once('functions.php');
                     $filename = "srclist.json";

                     $contents = json2arr($filename); ?>
                     <ul>
                        <?php
                        foreach ($contents as $id => $content) {

                           echo '<a href="more.php?id=' . $id . '"><h3>' . $content['title'] . '</h3></a>';
                           echo '<p><strong>Год издания:</strong> ' . $content['year'] . '</p>';
                           echo '<p><strong>Учебный центр:</strong> ' . $content['vendor'] . '</p>';
                           echo '<p><strong>Тема:</strong> ' . $content['theme'] . '</p>';

                           echo '<p><strong>Где находится:</strong> ' .
                              '<ul>
                                 <li class="list"><strong>На GLAV-PC: </strong><pre>' . $content['storage']['permanent-storage']['GLAV-PC'] . '</pre></li>
                                 <li class="list"><strong>На sverchok: </strong><pre>' . $content['storage']['permanent-storage']['sverchok'] . '</pre></li>
                                 <li class="list"><strong>На съёмном: </strong><pre>' . $content['storage']['permanent-storage']['TatyanaHDD'] . '</pre></li>
                              </ul>
                              </p>';
                           echo '<br><br><br><br>';
                        }
                        ?>
                     </ul>
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
   <script src="/js/app.js"></script>
</body>

</html>
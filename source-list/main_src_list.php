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
                     <h1>Список моих учебных и справочных ресурсов</h1>
                  </div>
               </div>
               <article class="all-contetnt">
                  <section class="main-text__section">
                     <!-- <div class="table-section">
                        <table>
                           <caption>Курсы</caption>
                           <thead>
                              <tr>
                                 <th scope="col">Номер</th>
                                 <th scope="col">Название</th>
                                 <th scope="col">Объём</th>
                                 <th scope="col">Автор</th>
                                 <th scope="col">Издатель</th>
                                 <th scope="col">Тема</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>00-001</td>
                                 <td><a href="more.php?id=00-001">UX UI Design мобильных приложений</a></td>
                                 <td>~ 4 часа</td>
                                 <td>Владислав Шевченко</td>
                                 <td>ITVDN</td>
                                 <td>UI/UX</td>
                              </tr>
                              <tr>
                                 <td>00-002</td>
                                 <td><a href="more.php?id=00-002">Дизайн и проектирование интерфейсов</a></td>
                                 <td>~ 1,5 часа</td>
                                 <td>Неизвестен</td>
                                 <td>Geekbrains</td>
                                 <td>UI/UX</td>
                              </tr>
                           </tbody>
                        </table>
                     </div> -->
                     <?php

                     require_once('functions.php');
                     $filename = "srclist.json";

                     $contents = json2arr($filename); ?>
                     <ul>
                        <?php
                        foreach ($contents as $id => $content) {
                           // echo $id . ':<br><br>';
                           // debug($content);

                           echo '<a href="more.php?id=' . $id . '"><h3>' . $content['title'] . '</h3></a>';
                           echo '<p><strong>Год издания:</strong> ' . $content['year'] . '</p>';
                           // echo '<p><strong>Описание:</strong><br> ' . $content['description'] . '</p>';
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
   <script src="/js/app.min.js"></script>
</body>

</html>
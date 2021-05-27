<?php 
   $files1 = scandir( __DIR__ );
   foreach ($files1 as $content) {
      if ($content == $path[1]) {
         include $path[1]; 
         if (!empty ($is_fil)) {
            unset ( $is_fil );
         }         
         break;
      } else {
         $is_fil = ROOT.'errors/404.php';
      }
   }

   if (!empty ($is_fil)) {
      include $is_fil;
   }

?>

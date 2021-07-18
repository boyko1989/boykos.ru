<?php
function debug($arr)
{
   echo '<pre>';
   print_r($arr);
   echo '</pre>';
}

function json2arr($filename)
{
   $fd = fopen($filename, "r");

   $contents = fread($fd, filesize($filename));
   $contents = json_decode($contents, true);

   return $contents;
}

// $remove_file -- ссылка на удалённый файл
// $safe_name   -- имя файла при сохранении
function get_remove_file($remove_file, $safe_name)
{
   $ch = curl_init($remove_file);
   $fp = fopen($safe_name, "w");

   curl_setopt($ch, CURLOPT_FILE, $fp);
   curl_setopt($ch, CURLOPT_HEADER, 0);

   curl_exec($ch);
   if (curl_error($ch)) {
      fwrite($fp, curl_error($ch));
   }
   curl_close($ch);
   fclose($fp);
}

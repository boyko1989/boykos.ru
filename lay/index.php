<?php 
$url = ltrim($_SERVER['REQUEST_URI'], '/');
$routes_lay = array(
	array('url' => '#^css/#i', 'view' => 'layout'),
	array('url' => '#^html/(.*)#', 'view' => 'lay'),
   array('url' => '#^img/#i', 'view' => 'linux'),
	array('url' => '#^js/(.*)#', 'view' => 'lay')
);

foreach ($routes_lay as $route) {
   if (preg_match($route['url'], $url, $match)) {
      $view = $route['view'];
      echo $view;
   }
}
?>
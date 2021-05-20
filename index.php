<?php 

$routes = array(
	array('url' => '#^$|^\?#', 'view' => 'main'),
   array('url' => '#^layout/#i', 'view' => 'layout'),
   array('url' => '#^linux/#i', 'view' => 'linux')
);

$url = ltrim($_SERVER['REQUEST_URI'], '/');

foreach ($routes as $route){
	if( preg_match($route['url'], $url, $match)){
		$view = $route['view'];
		if (!empty($view)){
			echo $view.'<br>';
			include 'about/'.$view.'/index.php';
		}
		break;
	}
}

if( empty($match) ){
	include 'errors/404.php';
	exit;
}

?>
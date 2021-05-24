<?php 
$url = ltrim($_SERVER['REQUEST_URI'], '/');

$routes = array(
	array('url' => '#^$|^\?#', 'view' => 'main'),
   array('url' => '#^layout/#i', 'view' => 'layout'),
   array('url' => '#^linux/#i', 'view' => 'linux'),
   array('url' => '#^makets/#i', 'view' => 'makets')
	// array('url' => '#^lay/(?P<lang>[a-z]+/)#', 'view' => 'lay'),
	//array('url' => '#^lay/[a-z]+/[a-z]+\.[a-z]+#', 'view' => 'lay')
);

foreach ($routes as $route){
	if( preg_match($route['url'], $url, $match)){
		$view = $route['view'];
		if (!empty($view) and ($view !== 'lay')){
			include '../about/'.$view.'/index.php';
		} elseif ($view == 'lay') {
			include $match[0];
		}
		break;
	}
}

if( empty($match) ){
	include '../errors/404.php';
	exit;
}
?>
<?php 
$url = ltrim($_SERVER['REQUEST_URI'], '/');

$routes = array(
	array('url' => '#^$|^\?#', 'view' => 'main'),
   array('url' => '#^layout/#i', 'view' => 'layout'),
   array('url' => '#^linux/#i', 'view' => 'linux'),
   array('url' => '#^makets/#i', 'view' => 'makets'),
	array('url' => '#^phpinfo/#', 'view' => 'phpinfo')
	//array('url' => '#^lay/[a-z]+/[a-z]+\.[a-z]+#', 'view' => 'lay')
);

foreach ($routes as $route){
	if( preg_match($route['url'], $url, $match)){
		$view = $route['view'];
		if (!empty($view)){
			include '../about/'.$view.'/index.php';
		}
		break;
	}
}

if( empty($match) ){
	include '../errors/404.php';
	exit;
}
?>
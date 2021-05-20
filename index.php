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

if(empty($match)){
	require_once ('lay/html/404.php');
	print_r ($match);
	exit;
}

extract($match);
if (!empty($match['request_alias'])){
	$_SESSION['request_alias'] = $match['request_alias'];	
   echo $_SESSION['request_alias'];	
}
/*
// $id - ID категории
// $product_alias - alias продукта
// $view - вид для подключения
// include "";
*/

?>
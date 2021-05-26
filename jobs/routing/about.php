<?php
/*-------------------
/ Здесь будет роутинг тем: главная страница, вёрстка (теория), Linux, макеты (практика по вёрстке)
-------------------*/

echo 'Ссылка на скрипт — '.$path[1].'<br>';

$url = $path[1];

$routes = array(
	array('url' => '#^$|^\?#', 'view' => 'main'),
   array('url' => '#^layout/#i', 'view' => 'layout'),
   array('url' => '#^linux/#i', 'view' => 'linux'),
   array('url' => '#^makets/#i', 'view' => 'makets')
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

?>
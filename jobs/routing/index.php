<?php 
   $uri = ltrim($_SERVER['REQUEST_URI'], '/');
   $path = explode ( '/', $uri);

   switch ($path[0]) {

      case ''; 
      case 'layout'; 
      case 'linux'; 
      case 'makets';      
         include 'about.php';
         break;

      case 'request';
      case 'phpinfo';
      case 'jobs';
         include 'jobs.php';
         break;
     
      default:
         include 'errors.php';
         break;
   }

// $routes = array(
// 	array('url' => '#^$|^\?#', 'view' => 'main'),
//    array('url' => '#^layout/#i', 'view' => 'layout'),
//    array('url' => '#^linux/#i', 'view' => 'linux'),
//    array('url' => '#^makets/#i', 'view' => 'makets'),
// 	array('url' => '#^request/#i', 'view' => 'request'),
// 	array('url' => '#^phpinfo/#', 'view' => 'phpinfo')
// 	/*array('url' => '#^jobs/(?P<dir_name>[a-z0-9-]+)/(?P<script_name>[a-z0-9\.-]+)#i', 'view' => 'jobs')*/
// 	//array('url' => '#^lay/[a-z]+/[a-z]+\.[a-z]+#', 'view' => 'lay')
// );

// foreach ($routes as $route){
// 	if( preg_match($route['url'], $url, $match)){
// 		$view = $route['view'];
// 		if (!empty($view)){
// 			include '../about/'.$view.'/index.php';
// 		} /*elseif ($view == "jobs") {
// 			include '../jobs/messages/mail.php';
// 		}*/
// 		break;
// 	}
// }



// if( empty($match) ){
// 	include '../errors/404.php';
// 	exit;
// }
// ?>
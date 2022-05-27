<?php 

	/*define('DS', DIRECTORY_SEPARATOR);
	define('PRODUCTION_MODE', '/codipost' );
	define('MIORH', 'http://'.$_SERVER['HTTP_HOST'].PRODUCTION_MODE.'/');
	define('SCHOOL', 'http://'.$_SERVER['HTTP_HOST'].'/parc');
	print_r(MIORH);
	die();

	define('CDN','../webroot/unofficialCDN/');
	define('CDN_HTTP', 'http://'.$_SERVER['HTTP_HOST'].PRODUCTION_MODE.'/unofficialCDN/');
	define('ANNEE_SCOLAIRE', '2015-2016');*/

	
	
	include_once 'Session.php';
	Session::start();
	//die('assoua');
	
	/*if(!$_POST){
		header("Location: ".SCHOOL."/connexion/index");
	}else{
		//debug($_POST);
		//debug($_FILES);
	}

	//print_r($_POST);
	//die();*/

	


	if(  isset($_POST["model"]) ){
		$model 	= isset($_POST["model"])   ? $_POST["model"]   : null;
		$func 	= isset($_POST["func"])   ? $_POST["func"]   : null;
		$params = isset($_POST["params"]) ? $_POST["params"] : null;

		//echo ('NAME :'. $name);

		if($model){

			include_once 'config.php';
			include_once 'model.php';
			include_once '../models/'.$model.'.php';
			
			$model = new $model();

			if( $func == 'save' ){
				//debug($_POST);
				$data = new stdClass();
		 		foreach ($_POST['params'] as $k => $v) {
			 		$data->$k = $v;
			 	}

			 	//$data->key = $_POST['params']['id'];
			 	$params = $data;
			 	
			}

			$r = $model->$func($params);
			//echo($r);

			//print_r($r);

			//$r["json"] = json_encode($r);

			//print_r(json_encode($r)) ;
			
			//$obj->$result = $r;

			$json = json_encode($r);
			echo $json;

		}
	}


	if( isset($_POST['controller']) ){

		$controller 	= isset($_POST["controller"])   ? $_POST["controller"]   : null;
		$func 	= isset($_POST["func"])   ? $_POST["func"]   : null;
		$params = isset($_POST["params"]) ? $_POST["params"] : null;

		if($controller){
			
			include_once '../config/Config.php';
			include_once 'Controller.php';
			include_once 'Models.php';
			include_once '../controller/'.$controller.'Controller.php';
			
			$controller = $controller.'Controller';
			$controller = new $controller();

			$r = $controller->$func($params);

			
			
			//$obj->$result = $r;

			$json = json_encode($r);
			echo $json;

		}
	}


?>

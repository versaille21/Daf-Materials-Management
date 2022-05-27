<?php 
	
	class Dispatcher {

		var $request;
		
		function __construct(){
			$this->request= new Request(); 
   
			Router:: parse($this->request->url, $this->request);

			$controller = $this->loadController();

			$action = $this->request->action;

			if($this->request->prefix){
					$action = $this->request->prefix.'_'.$action;
			}


			if (!in_array($this->request->action, array_diff(get_class_methods($controller), get_class_methods('controller') ))) {
				//debug("il y'a un soucis");
				$this->error('le controller '.$this->request->controller.' n\'a pas de méthode '.$action);
			}

			//debug('le launch de DISPATHCER DU CONTROLLER');
			call_user_func_array(array($controller, $action), $this->request->params);

			//we render automatically the view
			//$controller->render($action);
		}

		function  error($message){
			$controller= new Controller($this->request);
			//$controller->Session = new Session();
			$controller->set('message', $message);
			$controller->e404($message);
			/*$controller->render('/errors/404');
			die();*/
		}	

		function loadController(){
			$name = ucfirst($this->request->controller).'Controller';
			//debug($name);
			//debug(ROOT) ;
			$file = ROOT.DS.'controller'.DS.$name.'.php';

			//print_r($file);
			//die();

			if(file_exists($file)){
				require $file;
			}else{
				$this->error('Cette page est introuvable');
			}
			
			$controller = new $name($this->request);

			//$controller->Session = new Session();
			//debug('on charge le controlleur par Dispatcher');
			Session::start();
			//$controller->Form = new Form($controller);

			return $controller;
		}

	}

?>	

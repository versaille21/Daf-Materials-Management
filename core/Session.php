<?php
class Session{

	// function __construct(){
		
	// }

	public static function start(){
		$sess_name = 'secure_session_id';
		$httponly = true; // Celà empechera le javascript d'acceder à la session
		$secure = false; // true si on utilise de https
        
		$cookieParams = session_get_cookie_params();
		session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
		session_name($sess_name);
		session_start(); //start php session
		session_regenerate_id(); //regenerated session, delete the old one
       
        

	}


	public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    public static function get($key)
    {
        if (isset($_SESSION[$key]))
        	return $_SESSION[$key];
    }
    
    public static function destroy()
    {
    	if( !isset($_SESSION) ) {
    		self::start();
    	}

        //unset($_SESSION);
        $_SESSION = array();

        $params = session_get_cookie_params();
       
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

        session_destroy(); //destroy session
    }


   /* public static function getRule($org){
    	$orgs = Session::get('orgs');
    	return $orgs[$org];
    }*/


    //Verify that the current user is really on database
    //$c controllers
   /* public static function verifyLogin($c){
    	if(Session::get('id')==null ){
    		return false;
    	}

    	$c->loadModel('Agent');
    	$users = $c->Agent->find(array(
    		'fields' => 'mot_passe' ,
    		'conditions' => array('id' => Session::get('id'))
    		));

    	
    	if(!$users){
    		return false;
    	}else{
    		$user = $users[0];
    	}

    	if(Session::get('log_hash') == hash('sha1', $user->mot_passe.$_SERVER['HTTP_USER_AGENT'])){
    		return true;
    	}else{
    		return false;
    	}

	}
    */
   		


/*

	//Show some message error

	public function setflash($message,$type='success'){

		$_SESSION['flash'] = array(
			'message'=> $message,
			'type'   => $type
		);
	}

	public function flash(){
		if(isset($_SESSION['flash']['message'])){
			$html = '<div class="alert-message '.$_SESSION['flash']['type'].'"><p>'.$_SESSION['flash']['message'].'</p></div>';
			$_SESSION['flash'] = array();
			return $html;
		}
		
	}


    public static function can($action, $rsc){
        return Session::get('RULA')->can($action, $rsc);
    }*/

}

?>

<?php

class Controller{
    
    var $vars = array();
    var $layout = 'default';
    var $request;


    function __construct($request = null){
        if($request) {
            $this->request = $request;      //stocker la request dans l'instance
        }
    }

    
    function set($d){
    $this->vars = array_merge($this->vars,$d);
    
    }
    
    
    function render($filename){
        
        extract($this->vars);
        ob_start();
        require(ROOT.'/views/'.get_class($this).'/'.$filename.'.php');
        $content_for_layout = ob_get_clean();
         if($this->layout == false){
             echo $content_for_layout;
         }else{
             
             require(ROOT.'views/layout/'.$this->layout.'.php');
             
         }
    }
    
    
    function loadModel($modelName){
        
        
        require_once(ROOT.'models/'.strtolower($modelName).'.php');
        $this->$modelName = new $modelName;
    }
    
     
    
    
}
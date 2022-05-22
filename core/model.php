<?php

class model{
    
    public $table;
    public $id;
    public $host ='localhost';
    public $login ='root';
    public $password ='';
    public $dbname ='bd_parc_info';
    public $current_db ="";


    

    public function read($fields){
      if($fields == null){ $fields ="*";}
      
      $sql = "SELECT $fields from ".$this->table." WHERE id = ".$this->table." ";
      //echo $sql;
      $req = mysql_query($sql) or die(mysql_error());
      $data = mysql_fetch_object($req);
      //print_r($data);
      return $data;
     /* foreach($data as $k=>$v){
          $this->$k = $v;  
          
      }*/
   
    }
    
    
    static function load($name){
        require("$name.php");
        return new $name();
    }
    
    public static function save($data){
        if(isset($data["id"]) && !empty($data["id"])){
            $sql = "UPDATE".$this->table."SET ";
            foreach ($data as $key => $value) {
                if($key != "id"){
                    $sql .= "$key = $value";
                }
                
            }
            $sql = substr($sql, 0, -1); 
            $sql .= "WHERE id=".$data["id"];
          
        }
        
        else{
            $sql = "INSERT INTO".$this->table."(";
            foreach ($data as $key => $value) {
                    $sql .= "$key,";
                
                
            }
            $sql = substr($sql, 0, -1);
            $sql .=" VALUE (";
            foreach ($data as $value){
                $sql .= "$value, ";
            }
            $sql = substr($sql, 0, -1);
            $sql .= ")";
          
        }

        echo $sql;
         
     mysql_query($sql) or die(mysql_error()." </br> =>".  mysql_query());
    
        
    }
    
    
   
    public function find($data=array()){
        
        $conditions="1";
        $fields="*";
        $limits="";
        
        if(isset($data['fields'])){ $fields = $data['fields'];}
        if(isset($data['conditions'])){ $conditions = $data['conditions'];}
        if(isset($data['limits'])){ $limits = $data['limits'];}
        if(isset($data['order'])){ $order = $data['order'];}
        if(isset($data['tables'])){ $tables = $data['tables'];}
        
        $sql = "SELECT $fields FROM $this->table WHERE $conditions ";
        if(isset($tables)){$sql = "SELECT $fields FROM $tables WHERE $conditions ";}
        if(isset($order)){$sql = $sql." ".$order."";}
        //echo $sql;
        
        $result = mysql_query($sql) or die(mysql_error()." </br> =>".  mysql_query());
        $d = array();
        while($data = mysql_fetch_object($result)){
            $d[] = $data;
            
            
            //print_r($d);
        };
        
        //print_r($d);
        return $d;
        
    }
      

    public function saveModel($id=null){
        $array1 =  get_object_vars( $this ) ;
        $array2 =  get_class_vars( get_parent_class($this) ) ;

        $properties = array_diff_key ($array1, $array2);

        $data =array();

        foreach ($properties as $k => $v) {
            if( isset($v) && !in_array($k, array('validations') )){
                $data[$k] = $properties[$k];
            }
        }

        //if(isset($data->$key)) unset($data->$key);
        $key = $this->primaryKey;

        $fields = array();

        // debug($data);

        foreach($data as $k=>$v){
            if(!is_numeric($v) || $k == 'phone'){
                $v = "'".mysqli_real_escape_string($this->current_db, $v)."'";
            }else{
                $v = mysqli_real_escape_string($this->current_db, $v);
            }

            $fields[] .= " $k=$v";

            //$d[":$k"] = $v;
        }

        //$fields[] = "uuid=UUID()";

        $date = new DateTime(null, new DateTimeZone('Africa/Abidjan'));

        if(isset($id) && $id != null){
            $sql = 'UPDATE '.$this->table.' SET '.implode(',',$fields).', modifier="'.$date->format("Y-m-d H:i:s").'"'.' WHERE '.$key."='".$id."'";
            //$this->id = $data->$key;
            
        } else{ 

            $sql  = " INSERT INTO ".$this->table." SET ".implode(',',$fields);
            $sql .= ", modifier=\"".$date->format("Y-m-d H:i:s")."\"; ";
            //$sql .= " ";
            
            //$this->id = $data->$key;
        }
        //debug( $fields );
        //debug( $sql ); //die();
        //print_r($sql.'<br>');
        $rquery = mysqli_query( $this->current_db, $sql ) or mysqli_error_list($this->current_db);
        //debug($rquery);
        
        if( $rquery ) {
            $last_id = mysqli_insert_id($this->current_db);
            return $last_id ;
        }else {
            //debug('false');
            return false;

        }
    
 
    }
      
      
      
      
            
}


<?php

class model{
    
    public $table;
    public $id;
    public $host ='localhost';
    public $login ='root';
    public $password ='';
    public $dbname ='bd_suidep';
    public $current_db ="";


    
    public function loadRequire($string){

        define('ROOTR',str_replace('/core/Switch.php', '', $_SERVER['SCRIPT_FILENAME']));
        return(ROOTR.$string);
        
        //return(ROOT.$string);
    }


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


    // public static function AnneeEncours(){
    //   global $conneX;     
    //   $sql = "SELECT id_annee, lib_annee, Encours from annee WHERE Encours = '1' ";
    //   //echo $sql;
    //   $req = mysqli_query($conneX, $sql) or die(mysql_error());
    //   $data = mysqli_fetch_object($req);
    //   //print_r($data);
    //   return $data;
    //   //foreach($data as $k=>$v){
    //    //   $k = $v;  
          
    // }

        //return $v;
    
    
    
    static function load($name){
        require("$name.php");
        return new $name();
    }
    
    public function save($data=array()){
        if(isset($data["id"]) && !empty($data["id"])){
            $sql = "UPDATE ".$this->table." SET ";
            foreach ($data as $key => $value) {
                if(($key != "id") AND ($key != "namePrimaryId")){
                    $sql .= $key.' = "'.$value.'",';
                }
                
            }
            $sql = substr($sql, 0, -1); 
            $sql .= " WHERE ".$data["namePrimaryId"]. "=" .$data["id"];
            //echo $sql;
            //die();
          
        }
        
        else{

            $sql = "INSERT INTO $this->table (";
            foreach ($data as $key => $value) {
                    $sql .= "$key,";
                
                
            }

            $sql = substr($sql, 0, -1);
            
            $sql .=" ) VALUES (";
            
            foreach ($data as $value){
                $sql .= '"'.htmlspecialchars($value).'", ' ;
            }



            $sql = substr($sql, 0, -2);
            
            $sql .= ")";

            
        }

       
            echo $sql;
            die();
            $pre = mysql_query($sql) or die(mysql_error()." </br> =>".  mysql_query());
        
            if ($pre != false){
            $r = "reussie";

            }
            else{
            $r = "echec"; 
            }
            //die($r);
            return $r; 
        
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
        //die();
        
        global $conneX;
        $result = mysqli_query($conneX, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($conneX));
        $d = array();
        while($data = mysqli_fetch_object($result)){
            $d[] = $data;
            
            
            //print_r($d);
        };
        
        //print_r($d);
        //die();
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

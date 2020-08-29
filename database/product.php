<?php
//fetch the data
class product{
    public $db = null;

    public function __construct(database_con $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //fetch product data using getmethod
    public function getData($table = 'product'){
       $result = $this->db->con->query(query."SELECT * from ($table)");

       $resultArray = array();

       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] =$item;
       }

       return $resultArray;
    }
}

?>
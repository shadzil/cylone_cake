<?php
include_once "config.php ";

class cake{ 

    public $cake_id;
    public $cake_name;
    public $cake_discription;
    public $cake_price;
    public $cake_status;
    public $cake_cake;
    public $cake_date;
    
  
    private $db;

    function __construct(){
          
        $this->db=new mysqli(host,un,pw,db1);
    }
// =======================================


function insert_cake(){


    $sql="INSERT INTO cake ( cake_name, cake_discription, cake_price,cake_cat)
     VALUES ('$this->cake_name','$this->cake_discription','$this->cake_price','$this->cake_cat')";


echo $sql;
$this->db->query($sql);
$this->db->insert_id;
return true;


}





function get_all_cake(){


$sql =" SELECT * FROM cake WHERE cake_status = 'ACTIVE' ";

    $result = $this->db->query($sql);

    $cake_array = array();



    while($row=$result->fetch_array()){

        $cake_item = new cake();

        $cake_item->cake_name=$row["cake_name"];
        $cake_item->cake_discription=$row["cake_discription"];
        $cake_item->cake_price=$row["cake_price"];
    
        
        
        $cake_array[]=$cake_item;
    }

    return $cake_array;


}


}
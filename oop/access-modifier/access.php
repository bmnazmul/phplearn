<?php 


class inf{

private $name ="nazmul";


public function __construct($name){

    $this->name=$name;
}

public function __destruct(){
    echo "him name is {$this->name}";
}


}

$all_dt_info = new inf("nazmul hasan");


?>
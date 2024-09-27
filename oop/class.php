<?php 

class info{

// properties => // variabale

// method => // function


public $name = "nazmul";
public $cell ="01686983612";
public $fb_id = "fb/nazmulhasan";

public function getAddress (){

    return $this->name;

}
}

$person_info = new info();

// echo $person_info ->name."</br>";
// echo $person_info ->cell."</br>";
// echo $person_info -> fb_id;

echo $person_info ->getAddress();

?>
<?php


class info{

// properties = variable 
// method = function 

public $name = "nazmul hasan";
public $cell = "01686983614";
public $fb_id =  "fb/no203521";


public function address(){

    return $this->name."</br>".$this->cell."</br>".$this->fb_id;
}

}

$person_info = new info();

// echo $person_info ->name. "</br>";
// echo $person_info ->cell. "</br>";
// echo $person_info ->fb_id. "</br>";

echo $person_info->address();




?>
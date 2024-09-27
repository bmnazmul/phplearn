<?php 

class info{

public $name ="nazmul hasan";
public $cell = "01686983612";
public $fb_id ="fb/no203521";


public function address(){

    return $this->name;
}
}

$person_info = new info;

echo $person_info -> name."</br>";
echo $person_info->cell."</br>";
echo $person_info->fb_id;

echo $person_info->address();



?>
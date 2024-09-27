<?php 

class person_info{
    //properties= variable
    public $name ="hasan";
    public $cell ="01779794421";
    public $fb ="fb/no203521";

    //method = function
public function emp_name(){

    return $this->cell;
}
public function update_data($name,$cell,$fb){

    $this->name=$name;
    $this->cell=$cell;
    $this->fb=$fb;
}

}

$all_info = new person_info;
// echo $all_info ->emp_name();
// echo $all_info ->name;

$all_info->update_data("hridoy",'01896854548','fb/hridoy454');

$all_info->emp_name();




?>
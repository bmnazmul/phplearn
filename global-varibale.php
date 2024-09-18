<?php 
// 1st Global variable likher niyom

$cell = "01686983612";

function phonenumber(){
    global $cell;
    echo $cell;
}
phonenumber();

//2nd global likher niyom

function cellnumber(){

    echo $GLOBALS['cell'] ;
}
cellnumber();

?>
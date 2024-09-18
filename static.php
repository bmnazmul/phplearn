<?php 

function salary(){
   static $gm= 100000;
    echo $gm ."</br>";
    $gm+=5000;
}
salary();
salary();
salary();


?>
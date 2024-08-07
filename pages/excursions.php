<?php 

$subPage =  $URL[0] .'/main.php';
if(!empty($URL[1])){
    $subPage =  'package_details.php';
}
require_once ($subPage )  ;
?>
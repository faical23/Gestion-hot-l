<?php

include 'regix.php';


function VALIDE($table,$arr){
    $exectution = new VALIDE_RG();
    if($exectution->INFORMATIONS($table,$arr) == true){
        return true;
    }
    else{
        $_SESSION['regix_not_valide']="regix_not_valide";
    }
    return false;
}


function CHECK ($table,$arr){
    $check_if_exist = new CRUD($table);
    $exist = $check_if_exist->select("yes", $arr);
    return $exist;
}

function INSERT($table,$arr){
$exectution = new INSER_DATA();   
$exectution->INFORMATIONS($table,$arr);
}

?>
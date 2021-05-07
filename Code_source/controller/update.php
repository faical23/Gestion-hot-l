<?php
session_start();

include "../model/db.php";

$id = $_GET["id"];
$prix = $_GET["prix"];
$table = $_GET["table"];
$id_bient = "id";


echo $id;
echo "<br/>";
echo $prix;

    if(is_numeric($prix)){
        $execustion = new CRUD($table);
        $execustion->update(["Prix" => $prix],$id,$id_bient);
            header('Location:../vue/dashboard.php?manage=tarifs');
    }
    else{
        $_SESSION["update_not_success"] = "update_not_success"; 
        header('Location:../vue/dashboard.php?manage=tarifs');

    }


?>
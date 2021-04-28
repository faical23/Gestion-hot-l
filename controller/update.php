<?php

include "../model/db.php";

$id = $_GET["id"];
$prix = $_GET["prix"];
$table = $_GET["table"];


echo $id;
echo "<br/>";
echo $prix;

    if(is_numeric($prix)){
        $execustion = new CRUD($table);
        $execustion->update(["Prix" => $prix],$id);
            header('Location:../vue/dashboard.php?manage=tarifs');
    }
    else{
        echo "is not number";
    }


?>
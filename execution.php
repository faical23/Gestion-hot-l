<?php

include "class.php";

if(isset($_POST['valide_reserve']))
{

    /////////////// get chambre data;

    $chambre = $_POST["chambre"];
    $type_chambre = $_POST["type_chambre"];
    $type_chambre_double  = "";
    $execution = new $chambre($chambre,$type_chambre);

    if(isset($_POST["type_chambre_double"])){
        $type_chambre_double =  $_POST["type_chambre_double"];
    }
    if($chambre == "Double"){
        $chambre_prix = $execution->tarif_chambre($type_chambre_double);
    }
    else{
        $chambre_prix = $execution->tarif_chambre();
    }


    ///// set  chambre data

    echo "he choose ===>" . $chambre . "<br/>";
    echo "type  ===>" .  $type_chambre . "<br/>";
    if(isset($_POST["type_chambre_double"])){
        echo "type chambre double ===>" .  $type_chambre_double . "<br/>";
    }
    echo "prix  ===>" .$chambre_prix . "$<br/>";


    //// get pension data

    $pension = $_POST["pension"];
    $pension_demi_type = "";
    $execution = new $pension();

    if(isset($_POST["pension_demi_type"])){
        $pension_demi_type = $_POST["pension_demi_type"];
        $pension_prix = $execution->food($pension_demi_type);
    }
    else{
        $pension_prix = $execution->food();
    }



    echo "pension ===>" . $pension . "<br/>";
    if(isset($_POST["pension_demi_type"])){
        echo "pension demi type : ===>" .   $pension_demi_type. "<br/>";
    }

    echo "pension prix : ===>" .    $pension_prix . "$<br/>";



}

?>
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

////////// set pension data

    echo "pension ===>" . $pension . "<br/>";
    if(isset($_POST["pension_demi_type"])){
        echo "pension demi type : ===>" .   $pension_demi_type. "<br/>";
    }

    echo "pension prix : ===>" .    $pension_prix . "$<br/>";



    /////////////// get data children

        /// data bebe
    $bebe= $_POST["bebe"];
    $bebe_choix = "";
    $bebe_prix = 0;
    if(isset($_POST["bebe_choix"])){
        $bebe_choix = $_POST["bebe_choix"];
    }
    for($i = 0 ; $i < $bebe ; $i++){
        $bebe_tarif = new bebe();
        $bebe_prix += $bebe_tarif->bebe_tarif($bebe_choix);
    }



    echo  $bebe . " bebe  with choix ". $bebe_choix  ." and tarif is ===> ".$bebe_prix . "$<br/>";


    /// data enfants
    $enfant = $_POST["enfant"];
    $enfant_prix = 0;
    for($i = 0 ; $i < $enfant ; $i++){
        $enfant_tarif = new enfants();
        $enfant_prix += $enfant_tarif->enfants_tarif();
    }


    echo  $enfant . " enfants  with tarif  ===> ".$enfant_prix . "$<br/>";



        /// data adulte
        $adulte = $_POST["adulte"];
        $adulte_choix = "";
        $adulte_prix = 0;
        if(isset($_POST["bebe_choix"])){
            $adulte_choix = $_POST["adulte_choix"];
        }
        for($i = 0 ; $i < $adulte ; $i++){
            $adulte_tarif = new adulte();
            $adulte_prix += $adulte_tarif->adulte_tarif($adulte_choix);
        }

        echo  $adulte . " adulte  with tarif  ===> ".$adulte_prix . "$<br/>";
        echo $adulte_choix;






    // $enfant = $_POST["enfant"];
    // $adulte = $_POST["adulte"];
    // echo "he has " .$enfant. " enfant <br/>";
    // echo "he has " .$adulte. " adulte <br/>";

// if(isset($_POST["bebe"])){
//     $bebe= $_POST["bebe"];
//     echo "he has " .$bebe. " bebe";
//     echo "<br/>";
// }
// if(isset($_POST["enfant"]) != 0){
//     $enfant = $_POST["enfant"];
//     echo $enfant;
//     echo "<br/>";
// }
// if(isset($_POST["adulte"])){
//     $adulte = $_POST["adulte"];
//     echo $adulte;
// }


}

?>
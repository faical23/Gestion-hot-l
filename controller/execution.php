<?php
session_start();

include "class.php";

if(isset($_POST['valide_reserve']))
{

    if(isset($_POST['verified'])){

    

    /////////////// get chambre data;

    $chambre = $_POST["chambre"];
    $type_chambre = $_POST["type_chambre"];
    $type_chambre_double  = "NULL";
    $execution = new $chambre($chambre,$type_chambre);

    if(isset($_POST["type_chambre_double"])){
        $type_chambre_double =  $_POST["type_chambre_double"];
    }
    if($chambre == "chambre_Double"){
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
    $pension_demi_type = "NULL";
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
    $bebe_choix = "NULL";
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
        $adulte_choix = "NULL";
        $adulte_prix = 0;
        if(isset($_POST["adulte_choix"])){
            $adulte_choix = $_POST["adulte_choix"];
        }
        for($i = 0 ; $i < $adulte ; $i++){
            $adulte_tarif = new adulte();
            $adulte_prix += $adulte_tarif->adulte_tarif($adulte_choix);
        }

        echo  $adulte . " adulte  with tarif  ===> ".$adulte_prix . "$<br/>";

        

        ///////////// get date
        $start_date = $_POST["start_date"];
        $end_date = $_POST["end_date"];
        $diff=date_diff(date_create($start_date),date_create($end_date));
        $days = $diff->format("%a");
        echo "duree ==> " .$days;
        echo "<br/>";




        $total = ($chambre_prix + $pension_prix + $bebe_prix + $enfant_prix + $adulte_prix ) * $days;

        echo "total : ".$total."$";



        for($i = 0 ; $i < 10 ; $i++){
            echo "<br/>";
        }






        $chambre = str_replace("_", "  ", $chambre);

        $duree = 7;

        $commande = ["id commande" => 'APD023',"choix" => $chambre,"type choix" => $type_chambre ,"choix items" => $type_chambre_double ,"pension" => $pension
        ,"type penstion" => $pension_demi_type,"bebe" => $bebe, "bebe choix" => $bebe_choix , "enfants" => $enfant , "adulte" => $adulte ,
        "adulte choix" => $adulte_choix ,"start date " => $start_date,"end date" => $end_date,"duree" => $days,"total" => $total ];





        foreach($commande as $key => $value) {
            echo $key . " => " . $value;
            echo "<br/>";
        }        


        $_SESSION["valide_book"] = "valide_book";
        $_SESSION["total"] = $total;
        header('Location:../vue/index.php');




    }
}

?>
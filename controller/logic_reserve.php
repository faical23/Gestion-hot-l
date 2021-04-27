<?php
session_start();
include '../model/db.php';


if(empty($_SESSION['login_users'])){
    // header('Location:../vue/home.php');
    $_SESSION["not_login"] ="not_login";
    echo "u are not login";
}
else{
    $Fname = "";
    $Lname = "";

    $id = $_SESSION['id'];
    $user = $_SESSION['role'];
    $execustion = new CRUD($user);
    $result =  $execustion->select("",["id" => $id]);
    foreach($result as $value){
        $Fname = $value["Fname"];
        $Lname = $value["Lname"];

    } 
    
    $lengh_1 = strlen($Fname);
    $lengh_2 = strlen($Lname);
    $First_char_1 =strtoupper($Fname[0]); 
    $First_char_2 = strtoupper($Lname[0]); 
    $Last_char_1 =strtoupper($Fname[$lengh_1-1]); 
    $Last_char_2 = strtoupper($Lname[$lengh_2-1]); 
    $id_commnade = $First_char_1 . $First_char_2 . $lengh_1 . $lengh_2 .$Last_char_1 . $Last_char_2 .$id;
    echo  $id_commnade;

    // echo "<br/>";
    // echo   $First_char_1;
    // echo "<br/>";
    // echo $lengh_1;
    // echo "<br/>";
    // echo $lengh_2;
    // echo "<br/>";
    // echo   $First_char_2;
    // echo "<br/>";
    // echo  $Last_char_1;
    // echo "<br/>";
    // echo  $Last_char_2;
    // echo "<br/>";
    // echo $id;
    






    // include '../model/db.php';
    include '../controller/chambre_class.php';
    include '../controller/enfants_class.php';
    include '../controller/pension_class.php';
    
    
    
    
    if(isset($_POST['valide_reserve']))
    {
    
        if(isset($_POST['verified'])){
    
        // $Lname = $Lname;
        // $Fname = $Fname;
        // $id_commnade = "V.13";
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////// chambre
    
    
    
    
    
    
    
    
    
        $number_choix = $_POST["number_chambre"];
        $chambre_prix = 0;
        $chambre_total_insert = "";
        
    for($i = 0 ; $i<$number_choix ; $i++){
        $chambre = $_POST["chambre_".$i];
        $type_chambre = $_POST["type_chambre_".$i];
        $type_chambre_double  = "NULL";
        if(isset($_POST["type_chambre_double_".$i])){
            $type_chambre_double =  $_POST["type_chambre_double_".$i];
        }
    
    
        $chambre = str_replace("_$i", "", $chambre);
        $type_chambre = str_replace("_$i", "", $type_chambre);
        $type_chambre_double = str_replace("_$i", "", $type_chambre_double);
    
        $execution = new $chambre($chambre,$type_chambre);
    
        if($chambre == "chambre_Double"){
            $chambre_prix += $execution->tarif_chambre($type_chambre_double);
        }
    
        else{
            $chambre_prix += $execution->tarif_chambre();
        }
    
        $bient= ["choix" => $chambre , "type_choix" => $type_chambre ,"second_type_choix" => $type_chambre_double , "id_commande" => $id_commnade ];
        $execution = new CRUD("bients");
        $execution->insert($bient);
    
        $chambre_total_insert .= $chambre . " ===> " . $type_chambre . " ===> " . $type_chambre_double  . "<br/>";
        
        
    
    }
    echo $chambre_total_insert; //// chambre insert db
    echo "total prix chambre ==> " . $chambre_prix;
    
    
    
    
    
    
    // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////PENSION
    
    
            echo "<br/>";
        //// get pension data
    
        $pension = $_POST["pension"];
        $pension_demi_type = "NULL";
        $pension_prix = 0;
    
    
        if(isset($_POST["pension_demi_type"])){
            $pension_demi_type = $_POST["pension_demi_type"];
            $execution = new $pension($pension_demi_type);
            $pension_prix = $execution->food();
            echo $pension .": ".$pension_demi_type. " ==> " .$pension_prix ;
        }
        else{
            $execution = new $pension();
            $pension_prix =$execution->food();
            echo $pension ." ==> " .$pension_prix;
        }
    
        
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// CHILDREN
    
    
    
        /// data bebe
    
        $bebe = $_POST["bebe"];
        $bebe_choix = "NULL";
        $bebe_prix = 0;
    
        for($i = 1 ; $i <= $bebe ; $i++){
            
            if(isset($_POST["bebe_choix_" . $i])){
                $bebe_choix = $_POST["bebe_choix_" . $i];
            }
            echo "bebe $i ==> " . $bebe_choix;
            echo "<br/>";
             $bebe_tarif = new bebe($bebe_choix);
            $bebe_prix += $bebe_tarif->tarif();
            $execution = new CRUD("child");
            $execution->insert(["child" => "bebe"  ,"id_commande " => $id_commnade, "type_choix" => $bebe_choix]);
        }
    
        echo $bebe_prix;
    
        for($i ; $i < 10 ; $i++){
            echo "<br/>";
        }
    
    
    
        /// data enfants
        $enfant = $_POST["enfant"];
        $enfant_choix = "NULL";
        $enfant_prix = 0;
    
        echo "enafnat ==>" .$enfant;
        for($i = 0 ; $i < $enfant ; $i++){
            $enfant_tarif = new enfants();
            $enfant_prix += $enfant_tarif->tarif();
            $execution = new CRUD("child");
            $execution->insert(["child" => "enfant"  ,"id_commande " => $id_commnade, "type_choix" => $enfant_choix]);
        }
        echo "<br/>";
        echo $enfant_prix;
        echo "<br/>";
    
        for($i ; $i < 10 ; $i++){
            echo "<br/>";
        }
    
    
    
            /// data adulte
            $adulte = $_POST["adulte"];
            $adulte_choix = "NULL";
            $adulte_prix = 0;
    
            for($i = 1 ; $i <= $adulte; $i++){    
                if(isset($_POST["adulte_choix_" . $i])){
                    $adulte_choix = $_POST["adulte_choix_" . $i];
                }
                $adulte_tarif = new adulte($adulte_choix);
                $adulte_prix += $adulte_tarif->tarif();
                $execution = new CRUD("child");
                $execution->insert(["child" => "adulte" ,"id_commande " => $id_commnade, "type_choix" => $adulte_choix]);
                echo "adulte $i ==> " . $adulte_choix;
                echo "<br/>";
            }
            echo $adulte_prix;
    
    
            $total_prix_child = $adulte_prix + $enfant_prix + $bebe_prix;
            echo "<br/>";
            echo $total_prix_child;
    
    
    
    
    
    
    
    
    
        // for($i = 0 ; $i < $bebe ; $i++){
        //     $bebe_tarif = new bebe($bebe_choix);
        //     $bebe_prix += $bebe_tarif->tarif();
        // }
    
    
        // $bebe_total =  $bebe . " ==> " .$bebe_choix . "<br/>";
        // echo $bebe_total;  //// insert bebe DB
    
    
        // /// data enfants
        // $enfant = $_POST["enfant"];
        // $enfant_choix = "NULL";
        // $enfant_prix = 0;
        // for($i = 0 ; $i < $enfant ; $i++){
        //     $enfant_tarif = new enfants();
        //     $enfant_prix += $enfant_tarif->tarif();
        // }
    
        // echo $enfant_total = $enfant; //// insert enfant db 
        // echo "<br/>";    
    
        //     /// data adulte
        //     $adulte = $_POST["adulte"];
        //     $adulte_choix = "NULL";
        //     $adulte_prix = 0;
        //     if(isset($_POST["adulte_choix"])){
        //         $adulte_choix = $_POST["adulte_choix"];
        //     }
        //     for($i = 0 ; $i < $adulte ; $i++){
        //         $adulte_tarif = new adulte($adulte_choix);
        //         $adulte_prix += $adulte_tarif->tarif();
        //     }
    
        //     $adule_total = $adulte . " ==> " . $adulte_choix;
        //     echo $adule_total;
        //     // echo  $adulte . " adulte  with tarif  ===> ".$adulte_prix . "$<br/>";
    
        //     echo "<br/>";
    
    
    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// DATE / DAYS
    
    
    $start_date = $_POST["start_date"];
            $end_date = $_POST["end_date"];
            $diff=date_diff(date_create($start_date),date_create($end_date));
            $days = $diff->format("%a");
    
            echo $start_date;
            echo "<br/>";
            echo $end_date;
            echo "<br/>";
            echo $days;
    
    
    
            echo "<br/>";
    
    
    
    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// TOTAL
    
    
    
            $total = ($chambre_prix + $pension_prix + $total_prix_child ) * $days;   //// insert total prix in db
    
            echo "total : ".$total."$";
    
    
    
            $commandes = ["id_commande" => $id_commnade ,"pension"=> $pension ,"pension_choix"=>$pension_demi_type ,"date_start" => 
            $start_date,"date_end" => $end_date,"days" => $days,"total" => $total];
    
            $execution = new CRUD("commnades");
            $execution->insert($commandes);
    
            $date_client = ["id_commande" => $id_commnade ,"Fname"=> $Fname , "Lname" => $Lname];
            $execution = new CRUD("client");
            $execution->insert($date_client);
    
    
        }
    }
}



?>
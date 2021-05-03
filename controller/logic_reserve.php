<?php
session_start();
    include '../model/db.php';
    include '../controller/chambre_class.php';
    include '../controller/enfants_class.php';
    include '../controller/pension_class.php';


if(empty($_SESSION['login_users'])){
    header('Location:../vue/home.php');
    $_SESSION["not_login"] = "not_login";
}
else{

    if(!empty($_POST["chambre_0"]) && !empty($_POST["type_chambre_0"]) && !empty($_POST["pension_0"]) &&
    !empty($_POST["start_date"]) && !empty($_POST["end_date"]) )
    {

        
        $Fname = "";
        $Lname = "";

        ////// get data users id and Lname and Fname

        $id = $_SESSION['id'];
        $user = $_SESSION['role'];
        $execustion = new CRUD($user);
        $result =  $execustion->select("",["ID_client" => $id]);
        foreach($result as $value){
            $Fname = $value["Fname"];
            $Lname = $value["Lname"];

        } 


        /////// craete logic ID_commande
        
        $lengh_1 = strlen($Fname);
        $lengh_2 = strlen($Lname);
        $First_char_1 =strtoupper($Fname[0]); 
        $First_char_2 = strtoupper($Lname[0]); 
        $Last_char_1 =strtoupper($Fname[$lengh_1-1]); 
        $Last_char_2 = strtoupper($Lname[$lengh_2-1]); 
        $RD = rand(1, 100);
        $id_commnade = $First_char_1 . $First_char_2 . $lengh_1 . $lengh_2 .$Last_char_1 . $Last_char_2 .$id . $RD;
        echo  $id_commnade;



        for($i=0; $i < 4 ; $i++){
            echo "<br/>";
        }







        
        
        
        
        if(isset($_POST['valide_reserve']))
        {
        
            if(isset($_POST['verified'])){

                echo $Fname;
                echo "<br/>";
                echo $Lname;
                echo "<br/>";
                echo $id_commnade;
                echo "<br/>";



        //////////// start  insert data users

        $clients = ["Fname" => $Fname , "Lname" => $Lname ,"ID_client" => $id_commnade];

        $insert_client = new CRUD("clients");
        $insert_client->insert($clients);


        //////// end insert data client




        
        

        
        
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////// chambre and pesion
        
        
        
        
        
        
            /////////////////////// chambre
        
            //// get chambre data


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



            //////////////// pension

            // get pension data

            $pension_prix = 0;
            $pension_prix_total = 0;
            $pension = $_POST["pension_".$i];
            $pension_demi_type = "NULL";

            if(isset($_POST["pension_demi_type_".$i])){
                $pension_demi_type = $_POST["pension_demi_type_".$i];
                $execution = new $pension($pension_demi_type);
                $pension_prix = $execution->food();


            }
            else{
                $execution = new $pension();
                $pension_prix =$execution->food();

            }

            $pension_prix_total += $pension_prix;

            $client_service = ["chambre" => $chambre, "Type_Chambre" => $type_chambre , "Second_Type_Chambre" => $type_chambre_double ,
            "Pension" => $pension , "Pension_Choix" => $pension_demi_type, "ID_commande" => $id_commnade];

            $insert_client = new CRUD("client_service");
            $insert_client->insert($client_service);

            
        }

        
                    for($i=0; $i < 4 ; $i++){
                        echo "<br/>";
                    }



        
        // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// CHILDREN
        
        
        
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
                $execution = new CRUD("client_child");
                $execution->insert(["Name" => "bebe"  ,"Type_Choix" => $bebe_choix , "ID_commande" => $id_commnade]);
            }
        
            echo $bebe_prix;
            echo "<br/>";
        
        
        
        // data enfants

            $enfant = $_POST["enfant"];
            $enfant_choix = "Add lit";
            $enfant_prix = 0;
        
            for($i = 0 ; $i < $enfant ; $i++){
                $enfant_tarif = new enfants();
                $enfant_prix += $enfant_tarif->tarif();
                $execution = new CRUD("client_child");
                $execution->insert(["Name" => "Enfant"  ,"Type_Choix" => $enfant_choix , "ID_commande" => $id_commnade]);
            }
            echo "enfant "  . $enfant ." ===> ".$enfant_prix;
            echo "<br/>";

        
            
            // data adulte

                $adulte = $_POST["adulte"];
                $adulte_choix = "NULL";
                $adulte_prix = 0;
        
                for($i = 1 ; $i <= $adulte; $i++){    
                    if(isset($_POST["adulte_choix_" . $i])){
                        $adulte_choix = $_POST["adulte_choix_" . $i];
                    }
                    $adulte_tarif = new adulte($adulte_choix);
                    $adulte_prix += $adulte_tarif->tarif();
                    $execution = new CRUD("client_child");
                    $execution->insert(["Name" => "Adulte"  ,"Type_Choix" => $adulte_choix , "ID_commande" => $id_commnade]);
                    echo "adulte $i ==> " . $adulte_choix;
                    echo "<br/>";
                }
                echo $adulte_prix;
        
        
                $total_prix_child = $adulte_prix + $enfant_prix + $bebe_prix;
                echo "<br/>";
                echo "total prix child ===>".$total_prix_child;
        
        
        
        
        
        
        // // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// DATE / DAYS
        
        
        
        $start_date = $_POST["start_date"];
                $end_date = $_POST["end_date"];
                $diff=date_diff(date_create($start_date),date_create($end_date));
                $days = $diff->format("%a");
        
                echo $start_date;
                echo "<br/>";
                echo $end_date;
                echo "<br/>";
                echo $days;

                $reservation = ["Date_start" => $start_date,"Date_end" => $end_date,"Day" => $days,"ID_commande" => $id_commnade];
        
                $insert_client = new CRUD("reservation");
                $insert_client->insert($reservation);     
        
        

        
        // // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// TOTAL
        
        
        
                $total = ($chambre_prix + $pension_prix_total + $total_prix_child ) * $days;   //// insert total prix in db
        
                echo "total : ".$total."$";
                echo "<br/>";
        
                $insert_client = new CRUD("clients");
                $insert_client->update(["Total_Prix" => $total] , $id_commnade ,"ID_client");       
                
                


                ///// open session finish reserve
                $_SESSION["finish_reserve"] = "finish_reserve";
                $_SESSION["total"] = $total;

                header('Location:../vue/home.php');

            }
        }
    }
    else{
        header('Location:../vue/home.php');
        $_SESSION["some_fiald_empty"] = "some_fiald_empty";
    }
}




?>
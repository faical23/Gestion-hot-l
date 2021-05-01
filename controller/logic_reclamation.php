<?php
session_start();

include 'fonctions.php';

if(isset($_POST['valide_message'])){
    $Fname =  $_POST['Name'];
    $Email =  $_POST['Email'];
    $Subject =  $_POST['Subject'];
    $Message =  $_POST['Messsage'];
    $table='reclamation';

    $data_users =["name" => $Fname, "Email" => $Email
    ,"sujet" => $Subject,"reclamation" => $Message];

    foreach ($data_users as $key => $value) {
        echo $key ." ==> ". $value;
        echo "<br/>";
    }
    $RG_VALIDE = VALIDE($table,$data_users);

    if($RG_VALIDE){

         INSERT($table,$data_users);
         $_SESSION['reclamation_sent']='reclamation_sent';
         header('Location:../vue/home.php');

    }
     else{
         $_SESSION['reclamation_not_sent']="reclamation_not_sent";
        //  header('Location:../vue/home.php');
         echo "not";
     }


}
?>
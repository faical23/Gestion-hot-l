<?php

include 'fonctions.php';

if(isset($_POST['valide_message'])){
    $Fname =  $_POST['Name'];
    $Email =  $_POST['Email'];
    $Subject =  $_POST['Subject'];
    $Message =  $_POST['Messsage'];
    $table='contact';

    $data_users =["name" => $Fname, "Email" => $Email
    ,"subject" => $Subject,"message" => $Message];

    foreach ($data_users as $key => $value) {
        echo $key ." ==> ". $value;
        echo "<br/>";
    }
    $RG_VALIDE = VALIDE($table,$data_users);

    if($RG_VALIDE){

         echo "message suscce";
         INSERT($table,$data_users);
         // $_SESSION['inscription']="inscription";
    }
     else{
         echo "message  not send";
         // $_SESSION['email_exist']="email_exist";
     }


}
?>
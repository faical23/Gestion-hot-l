<?php

// include '../model/db.php';
include 'fonctions.php';



if(isset($_POST["valide"]))
{
    if(isset($_POST['agree'])){
        $Fname =  $_POST['FirstName'];
        $Lname =  $_POST['LastName'];
        $Email =  $_POST['Email'];
        $NumberPhone =  $_POST['PhoneNumber'];
        $Password =  $_POST['Password'];
        $table = 'users';

        $data_users =["Fname" => $Fname,"Lname" => $Lname, "Email" => $Email
        ,"PhoneNumber" => $NumberPhone,"Password" => $Password];

        foreach ($data_users as $key => $value) {
            echo $key ." ==> ". $value;
            echo "<br/>";
        }

        $RG_VALIDE = VALIDE($table,$data_users);

       if($RG_VALIDE){
        $exist_email = CHECK($table,["Email" => $Email]);
        if($exist_email == 0 )
        {
            echo "valide inscription";
            INSERT($table,$data_users);
            // $_SESSION['inscription']="inscription";
        }
        else{
            echo "email deja exist";
            // $_SESSION['email_exist']="email_exist";
        }
    }
    else{
        echo "regix not valide";
    }



    }
}

?>
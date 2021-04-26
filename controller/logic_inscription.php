<?php

session_start();
include 'fonctions.php';



if(isset($_POST["sign_up"]))
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
            //// fetch again for get the id and conexion
            $execetion = new CRUD($table);
            $result =  $execetion->select("",$data_users);
             foreach($result as $value){
                 $_SESSION['id'] = $value["id"];
             }
             $_SESSION['user_login']="user_login";
             header('Location:../vue/home.php');

        }
        else{
            echo "email deja exist";
        }
    }
    else{
        echo "regix not valide";
    }



    }
}

?>
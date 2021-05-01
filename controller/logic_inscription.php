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
        $role = "users";

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
            $id ="";
            echo "valide inscription";
            INSERT("users",$data_users);
            $execetion = new CRUD("users");
             $result =  $execetion->select("",$data_users);
              foreach($result as $value){
                  $id = $value["id"];
              }

            //// fetch again for get the id and conexion
            $data_users =["id" => $id ,"Email" => $Email ,"Password" => $Password , "role" => $role];
             INSERT("position",$data_users);
              header('Location:../vue/home.php?login=login');


        }
        else{
            $_SESSION["Email_exist"] = "email_exist";
            header('Location:../vue/home.php?login=inscription');

        }
    }
    else{
        $_SESSION["some_filed_empty"] = "some_filed_empty";
        header('Location:../vue/home.php?login=inscription');

    }



    }
}

?>
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
        $table = 'positions';
        $role = "user_account";

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
            foreach($data_users as $value){
                echo $value;
                echo "<br/>";
            }

            //// insrt to table posiitons
            $data_positon =["Email" => $Email ,"Password" => $Password , "role" => $role];
            INSERT("positions",$data_positon);

            //// fetch unique id in table pisitions

            $execetion = new CRUD("positions");
            $result =  $execetion->select("",$data_positon);
            $id = "";
            foreach($result as $value){
                $id = $value["id"];
            }

            // echo "<br/>";

            //// insert to table users
            $data_users =["Fname" => $Fname ,"Lname" => $Lname ,"PhoneNumber" => $NumberPhone ,"Email" => $Email ,"Password" => $Password ,"ID_client" => $id ];
            INSERT("user_account",$data_users);
            echo "valide inscription";

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
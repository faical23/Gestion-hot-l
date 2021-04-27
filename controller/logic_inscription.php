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


            // $id="";
            // $role="";

            //  $execetion = new CRUD("position");
            //  $result =  $execetion->select("",["Email" => $Email , "Password" => $Password]);
            //   foreach($result as $value){
            //       $id = $value["id"];
            //       $role = $value["role"];
            //   }
            //   $_SESSION['login_users']="'login_users'";

            //   $_SESSION['id'] = $id;
            //   $_SESSION['role'] = $role;

            //   echo $_SESSION['id'] ;
            //   echo "<br/>";
            //   echo $_SESSION['role'];
              header('Location:../vue/home.php?login=login');

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
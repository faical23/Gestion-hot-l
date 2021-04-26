<?php
session_start();
include 'fonctions.php';

if(isset($_POST['valide_login'])){

    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $table = "position";
    $user_data = ["Email" => $Email  , "Password" => $Password ];
    $_SESSION['id'] = "";
    $_SESSION['login']="";
    $_SESSION['role'] = "";

    $RG_VALIDE = VALIDE($table,$user_data);
    if($RG_VALIDE){
        $exist_email = CHECK($table,$user_data);
        if( $exist_email == 1)
        {

            $execetion = new CRUD($table);
           $result =  $execetion->select("",$user_data);

            $execetion = new CRUD($table);
           $result =  $execetion->select("",$user_data);
            foreach($result as $value){
                $_SESSION['id'] = $value["id"];
                $_SESSION['role'] = $value["role"];


            }
            $_SESSION['login_users']="login_users";
            echo $_SESSION['id'];
            echo $_SESSION['role'];
             header('Location:../../vue/home.php');

        }
        else{
            echo "error email or password";
        }

    }
    else{
        echo "invalide regix";
    }
}

?>
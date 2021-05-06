<?php
session_start();
include 'fonctions.php';

if(isset($_POST['valide_login'])){

    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $table = "positions";
    $user_data = ["Email" => $Email  , "Password" => $Password ];
    $_SESSION['id'] = "";
    $_SESSION['login']="";
    $_SESSION['role'] = "";

    $RG_VALIDE = VALIDE($table,$user_data);
    if($RG_VALIDE){
        $exist_email = CHECK($table,$user_data);
        if( $exist_email)
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


            if($_SESSION['role'] == "admine"){
                $_SESSION["admine"] ="admine_open";
            }
            header('Location:../vue/book.php');

    

        }
        else{
            $_SESSION["Email_not_exist"] = "Email_not_exist";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            // header('Location:../vue/home.php?login=login');
        }

    }
    else{
        $_SESSION["empty_field"] = "empty_field";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        // header('Location:../vue/home.php?login=login');
    }
}

?>
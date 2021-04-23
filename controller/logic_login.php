<?php
include 'fonctions.php';

if(isset($_POST['valide_login'])){

    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $table = "users";
    $user_data = ["Email" => $Email  , "Password" => $Password ];

    $RG_VALIDE = VALIDE($table,$user_data);
    if($RG_VALIDE){
        $exist_email = CHECK($table,$user_data);
        if( $exist_email == 1)
        {
            echo "email exist";
            $_SESSION['login']="login";
        }
        else{
            echo "error email or password";
            $_SESSION['email_password_wrong']='email_password_wrong';
        }

    }
    else{
        echo "invalide regix";
    }
}

?>
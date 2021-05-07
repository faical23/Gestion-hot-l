<?php

    include "../model/db.php";
    interface RG{

        const RG_NAME = '/^[a-zA-Z0-9]\w{3,}+$/';
        const RG_PASS ='/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
        const RG_EMAIL ='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        const RG_PHONE = '/^[0-9\-\(\)\/\+\s]*$/';
        const RG_TEXT = '/^[^<,\"@{}()*$%?=>:|;#]*$/';
        public function INFORMATIONS($table,$arr);  

    }

    class VALIDE_RG implements RG{

        public function INFORMATIONS($table,$arr){
            $GLOBALS["arr_2"] = $arr;
            $valide = true;

            foreach($arr as $key => $value){
                if(!empty($value)){
                    if($key == "name" || $key == "Fname" || $key == "Lname")
                    {
                        if(!preg_match(self::RG_NAME , $value))
                        {
                            $valide = false;
                        }
                      
                    }
                    else if($key == "Email" || $key == "email")
                    {
                        if(!preg_match(self::RG_EMAIL, $value))
                        {
                            $valide = false;
                        }
                    }  
                    else if($key == "Password")
                    {
                        if(!preg_match(self::RG_PASS , $value))
                        {
                            $valide = false;
                        }
                    }   
                    else if($key == "PhoneNumber")
                    {
                        if(!preg_match(self::RG_PHONE , $value))
                        {
                            $valide = false;
                        }
                    }  
                  else if($key == "subject" || $key == "message"|| $key == "reclamation" || $key == "sujet")
                    {
                        if(!preg_match(self::RG_TEXT , $value))
                        {
                            $valide = false;
                        }
                    }
                }
                else{
                    $valide = false;
                }
            }
            return $valide;
        }
    }
    class INSER_DATA implements RG{
        public function INFORMATIONS($table,$arr){
            $TO_INSERT = new CRUD($table);
            $TO_INSERT->insert($arr);

            /// u should change this path 
            // header('Location:../vue/index.php');
        }  
    }

?>

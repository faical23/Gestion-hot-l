<?php


$chambreSimpleVueInteriuerPrix  = 0;
$chambreDoubleVueInteriuerPrix = 0;
$AppartementVueInteriuerPrix = 0;
$BangloawVueInteriuerPrix = 0;


$execution = new CRUD("chambres");

$GetchambreSimpleVueInteriuer = ["name" => "Chambre simple","type" => "Vue interieur"];
$GetchambreDoubleVueInteriuer = ["name" => "chambre double","type" => "lit double" , "second_type" => "Vue interiuer"];
$GetAppartementVueInteriuer = ["name" => "appartement","type" => "Vue interieur"];
$GetBangloawVueInteriuer = ["name" => "bangloaw","type" => "Vue interieur"];


$SetChambreSimple  = $execution->select("",$GetchambreSimpleVueInteriuer);
foreach($SetChambreSimple as $value){
    $chambreSimpleVueInteriuerPrix  = $value['prix'];

}



$SethambreDouble  = $execution->select("",$GetchambreDoubleVueInteriuer);
foreach($SethambreDouble as $value){
    $chambreDoubleVueInteriuerPrix  = $value['prix'];
}



$SetAppartement = $execution->select("",$GetAppartementVueInteriuer  );
foreach($SetAppartement as $value){
    $AppartementVueInteriuerPrix = $value['prix'];
}




$SetAppartement = $execution->select("",$GetBangloawVueInteriuer);
foreach($SetAppartement as $value){
    $BangloawVueInteriuerPrix = $value['prix'];
}





chambre_Simple:: $chambre_simple_prix = $chambreSimpleVueInteriuerPrix ;
chambre_Double::$chambre_Double_prix = $chambreDoubleVueInteriuerPrix;
appartement::$appartement_prix = $AppartementVueInteriuerPrix;
bungalow::$bangloaw_prix = $BangloawVueInteriuerPrix;






class chambre{
    public $name;
    public $type;
    public static $prix;

    public function __construct($name,$type)    {   
           $this->name = $name;
           $this->type = $type; 
    }
}

class chambre_Simple extends chambre{
    public static $chambre_simple_prix;
    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 

    }

    public function tarif_chambre($prix = 30){
        if($this->type =="Vue interieur")
        {
            return chambre_Simple::$chambre_simple_prix;
        }
        else if($this->type =="Vue exterieur"){
            chambre_Simple::$chambre_simple_prix += chambre_Simple::$chambre_simple_prix * 0.2;
            return chambre_Simple::$chambre_simple_prix;
        }
    }

}

class chambre_Double extends chambre{
    public static $chambre_Double_prix;

    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 
    }
    public function tarif_chambre($type_lit){
        if($this->type == "lit double")
        {
            if($type_lit =="Vue interieur")
            {
                return chambre_Double::$chambre_Double_prix;
            }
            else if($type_lit =="Vue exterieur"){
                chambre_Double::$chambre_Double_prix+= chambre_Double::$chambre_Double_prix * 0.2;
                return chambre_Double::$chambre_Double_prix;
            }
        }
        else{
            return chambre_Double::$chambre_Double_prix;
        }
    }

}


class bungalow extends chambre{
    public static $bangloaw_prix;
    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 
    }

    public function tarif_chambre(){
        if($this->type =="Vue interieur")
        {
            return bungalow::$bangloaw_prix;
        }
        else if($this->type =="Vue exterieur"){
            bungalow::$bangloaw_prix+= bungalow::$bangloaw_prix * 0.2;
            return bungalow::$bangloaw_prix;
        }
    }

}



class appartement extends chambre{
    public static $appartement_prix;

    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 

    }

    public function tarif_chambre(){
        if($this->type =="Vue interieur")
        {
            return appartement::$appartement_prix ;
        }
        else if($this->type =="Vue exterieur"){
            appartement::$appartement_prix += appartement::$appartement_prix  * 0.2;
            return appartement::$appartement_prix ;
        }
    }

}



?>
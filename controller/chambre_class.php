<?php

$chambreSimplePrix = 0;
$chambreDoubleePrix = 0;
$AppartementPrix = 0;
$BangloawPrix = 0;


$execution = new CRUD("chambre_prix");

$GetchambreSimple = ["name" => "chambre simple"];
$GetchambreDouble = ["name" => "chambre double"];
$GetAppartement = ["name" => "appartement"];
$GetBangloaw = ["name" => "banglaow"];


$SetChambreSimple  = $execution->select("",$GetchambreSimple);
foreach($SetChambreSimple as $value){
    $chambreSimplePrix  = $value['Prix'];
}

$SethambreDouble  = $execution->select("",$GetchambreDouble);
foreach($SethambreDouble as $value){
    $chambreDoubleePrix   = $value['Prix'];
}

$SetAppartement = $execution->select("",$GetAppartement );
foreach($SetAppartement as $value){
    $AppartementPrix  = $value['Prix'];
}

$SetBangloaw  = $execution->select("",$GetBangloaw  );
foreach($SetBangloaw as $value){
    $BangloawPrix = $value['Prix'];
}


chambre_Simple:: $chambre_simple_prix = $chambreSimplePrix;
chambre_Double::$chambre_Double_prix = $chambreDoubleePrix;
appartement::$appartement_prix = $AppartementPrix;
bungalow::$bangloaw_prix = $BangloawPrix;

///////////////////// class chambre;





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
        //    $this->prix = $prix; 
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
<?php


///////////////////// class chambre;

class chambre{
    public $name;
    public $type;
    public $prix;

    public function __construct($name,$type,$prix)
    {   
           $this->name = $name;
           $this->type = $type; 
           $this->prix = $prix; 
    }
}

class chambre_Simple extends chambre{
    
    public function __construct($name,$type,$prix = 30)
    {   
           $this->name = $name;
           $this->type = $type; 
           $this->prix = $prix; 

    }

    public function tarif_chambre(){
        if($this->type =="Vue interieur")
        {
            return $this->prix;
        }
        else if($this->type =="Vue exterieur"){
            $this->prix += $this->prix * 0.2;
            return $this->prix;
        }
    }

}
class chambre_Double extends chambre{
    // public $type_lit;
    public function __construct($name,$type,$prix = 70)
    {   
           $this->name = $name;
           $this->type = $type; 
           $this->prix = $prix; 
        //    $type_lit = $type_lit;
    }
    public function tarif_chambre($type_lit){
        if($this->type == "lit double")
        {
            if($type_lit =="Vue interieur")
            {
                return $this->prix;
            }
            else if($type_lit =="Vue exterieur"){
                $this->prix += $this->prix * 0.2;
                return $this->prix;
            }
        }
        else{
            return $this->prix;
        }
    }

}

class bungalow extends chambre{
    
    public function __construct($name,$type,$prix = 90)
    {   
           $this->name = $name;
           $this->type = $type; 
           $this->prix = $prix; 

    }

    public function tarif_chambre(){
        if($this->type =="Vue interieur")
        {
            return $this->prix;
        }
        else if($this->type =="Vue exterieur"){
            $this->prix += $this->prix * 0.2;
            return $this->prix;
        }
    }

}
class appartement extends chambre{
    
    public function __construct($name,$type,$prix = 140)
    {   
           $this->name = $name;
           $this->type = $type; 
           $this->prix = $prix; 

    }

    public function tarif_chambre(){
        if($this->type =="Vue interieur")
        {
            return $this->prix;
        }
        else if($this->type =="Vue exterieur"){
            $this->prix += $this->prix * 0.2;
            return $this->prix;
        }
    }

}




// function chambre($chambre){
//     $chambre_prix = 0;
//     if($chambre == "chambre simple"){
//         $chambe_simple = new chambre_simple("chambre simple" , "exterieur" , 60);
//         $chambre_prix = $chambe_simple->tarif_chambre();
//     }
//     else if ($chambre == "chambre double"){
//         $chambe_simple = new chambre_double("chambre simple" , "exterieur" , 100,"1 lit double");
//         $chambre_prix =  $chambe_simple->tarif_chambre();
//     }
//     return $chambre_prix;
// }





////////////// class pension

class penstion{

    // public $type;
    public $prix ;
    
    public function __construct($prix)
    {
        // $this->type = $type;
        $this->prix = $prix;
    }
}

class Complete extends penstion{
    public function __construct($prix = 80)
    {
        $this->prix = $prix;
    }
    function food(){
        return $this->prix;
    }
}
class Sans extends penstion{
    public function __construct($prix = 0)
    {
        // $this->type = $type;
        $this->prix = $prix;
    }
    function food(){
        return $this->prix * 0;
    }
}
class Demi extends penstion{
    public $type_demi;
    public function __construct($prix = 60)
    {
        $this->prix = $prix;
    }
    function food($demi){
        if($demi == "Petit dej/dej")
        {
            echo "work 1";
            return $this->prix;
        }
        else if($demi == "Petit dej/din"){
            echo "work 2";
            return $this->prix * 0.7;
        }
    }
}


// function makla($type){
//     $prix_makla = 0;
//     if($type == "complete"){
//         $complete = new compléte("complete",78);
//         $prix_makla = $complete->makla();
//     }
//     else if($type == "sans"){
//         $complete = new sans("sans",0);
//         $prix_makla = $complete->makla();
//     }
//     else if($type == "demi"){
//         $complete = new demi("demi",40,"dej/dej");
//         $prix_makla = $complete->makla();
//     }
//     return $prix_makla;
// }



class enfant{
    public $age;
    public function __construct($age)
    {
        $this->age = $age;
    }
}

class bebe extends enfant{
    public function __construct()
    {
        // $this->age = $age;
    }

    public function bebe_tarif($type_lit){
    $bebe_prix = 0;
        if($type_lit == "Add lit")
        {
         $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
         $bebe_prix = $chambe_simple->tarif_chambre() * 0.25;
         return $bebe_prix;
        }
        else if($type_lit == "Without lit"){
            return $bebe_prix;
        }
    }
}

class enfants extends enfant{
    public function __construct()
    {
        // $this->age = $age;
    }

    public function enfants_tarif(){
         $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
         $enfants_prix = $chambe_simple->tarif_chambre() * 0.50;
        return $enfants_prix;
    }
}


class adulte extends enfant{
    public function __construct()
    {
        // $this->age = $age;
    }

    public function adulte_tarif($type_chambre){
        $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
        $adulte_prix = 0;
        if($type_chambre == "Add Chambre")
        {
            $adulte_prix = $chambe_simple->tarif_chambre();
           return $adulte_prix;
        }
        else if($type_chambre == "Add Lit")
        {
            $adulte_prix = $chambe_simple->tarif_chambre() * 0.7;
            return $adulte_prix;
        }

    }
}


    // $enfants_type = new bebe(2);
    // $enfant_price = $enfants_type->bebe_tarif("lit enfant");

    // $chambre_price =  chambre("chambre simple");
    // $makla_price = makla("demi");

    // $total = $chambre_price  + $makla_price + $enfant_price;
    // echo $total;




?>
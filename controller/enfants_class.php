<?php
// include "chambre_class.php";

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



?>
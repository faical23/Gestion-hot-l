<?php

abstract class enfant{

    public $type;
    public function __construct($type) {
      $this->tyep = $type;
    }
    abstract public function tarif();
}

class bebe extends enfant{

    public function __construct($type) {
        $this->type = $type;
      }

    public function tarif(){
    $bebe_prix = 0;
        if($this->type == "Add lit")
        {
         $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
         $bebe_prix = $chambe_simple->tarif_chambre() * 0.25;
         return $bebe_prix;
        }
        else if($this->type == "Without lit"){
            return $bebe_prix;
        }
    }
}

class enfants extends enfant{
    public function __construct($type = "") {
        $this->type = $type;
      }

    public function tarif(){
         $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
         $enfants_prix = $chambe_simple->tarif_chambre() * 0.50;
        return $enfants_prix;
    }
}


class adulte extends enfant{
    public function __construct($type) {
        $this->type = $type;
      }

    public function tarif(){
        $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
        $adulte_prix = 0;
        if($this->type == "Add Chambre")
        {
            $adulte_prix = $chambe_simple->tarif_chambre();
           return $adulte_prix;
        }
        else if($this->type == "Add Lit")
        {
            $adulte_prix = $chambe_simple->tarif_chambre() * 0.7;
            return $adulte_prix;
        }

    }
}



?>
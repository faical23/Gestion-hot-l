<?php


$PensionCompletePrix = 0;
$PensionDemiDejDejPrix = 0;
$PensionDemiDejDinPrix = 0;
$PensionSansPrix = 0;

$execution = new CRUD("pension");


$GetPensionComplete = ["name" => "Complete"];
$GetPensionDemidej_dej = ["name" => "Demi" , "second_choix" => "Petit dej/dej"];
$GetPensionDemidej_din = ["name" => "Demi" , "second_choix" => "Petit dej/din"];
$GetPensionSans = ["name" => "sans"];


$SetPensionComplete  = $execution->select("",$GetPensionComplete);
foreach($SetPensionComplete as $value){
    $PensionCompletePrix   = $value['prix'];
}


$SetPensionComplete  = $execution->select("",$GetPensionDemidej_dej);
foreach($SetPensionComplete as $value){
    $PensionDemiDejDejPrix   = $value['prix'];
}

$SetPensionComplete  = $execution->select("",$GetPensionDemidej_din);
foreach($SetPensionComplete as $value){
    $PensionDemiDejDinPrix   = $value['prix'];
}

$SetPensionSans  = $execution->select("",$GetPensionSans);
foreach($SetPensionSans as $value){
    $PensionSansPrix   = $value['prix'];
}


Complete::$Pension_Complete_Prix = $PensionCompletePrix ;
Demi::$PensionDemi_Dej_Dej_Prix = $PensionDemiDejDejPrix ;
Demi:: $PensionDemi_Dej_Din_Prix = $PensionDemiDejDinPrix ;
Sans::$Pension_Sans_Prix = $PensionSansPrix ;





abstract class pension {
    abstract public function food() ;
}

  class Complete extends pension {
    public static $Pension_Complete_Prix;
    public function food() {
        return Complete::$Pension_Complete_Prix;
    }
  }


  class Sans extends pension{
    public static $Pension_Sans_Prix;
    public function food() {
        return Sans::$Pension_Sans_Prix;
    }
  }
  class Demi extends pension{
    public static $PensionDemi_Dej_Dej_Prix;
    public static $PensionDemi_Dej_Din_Prix;

    public $demi;
    public function __construct($demi)
    {
     $this->Demi = $demi;   
    }
    function food(){
        if($this->Demi == "Petit dej/dej")
        {
            return Demi::$PensionDemi_Dej_Dej_Prix;
        }
        else if($this->Demi == "Petit dej/din"){
            return Demi:: $PensionDemi_Dej_Din_Prix;
        }
    }
  }



?>
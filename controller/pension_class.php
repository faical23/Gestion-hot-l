<?php
// include "../model/db.php";


$PensionCompletePrix = 0;
$PensionDemiPrix = 0;
$PensionSansPrix = 0;

$execution = new CRUD("pension_prix");


$GetPensionComplete = ["name" => "Complete"];
$GetPensionDemi = ["name" => "Demi"];
$GetPensionSans = ["name" => "Sans"];


$SetPensionComplete  = $execution->select("",$GetPensionComplete);
foreach($SetPensionComplete as $value){
    $PensionCompletePrix   = $value['prix'];
}
$SetPensionDemi  = $execution->select("",$GetPensionDemi);
foreach($SetPensionDemi as $value){
    $PensionDemiPrix   = $value['prix'];
}
$SetPensionSans  = $execution->select("",$GetPensionSans);
foreach($SetPensionSans as $value){
    $PensionSansPrix   = $value['prix'];
}


Complete::$Pension_Complete_Prix = $PensionCompletePrix ;
Sans::$Pension_Sans_Prix = $PensionSansPrix ;
Demi::$Pension_Demi_Prix = $PensionDemiPrix;


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
    public static $Pension_Demi_Prix;
    public $demi;
    public function __construct($demi)
    {
     $this->Demi = $demi;   
    }
    function food(){
        if($this->Demi == "Petit dej/dej")
        {
            return Demi::$Pension_Demi_Prix;
        }
        else if($this->Demi == "Petit dej/din"){
            return Demi::$Pension_Demi_Prix * 0.7;
        }
    }
  }


    // $complete = new Complete();
    // echo $complete->food();
    // echo "<br/>";
    // $complete = new Sans();
    // echo $complete->food();
    // echo "<br/>";
    // $complete = new Demi("Petit dej/din");
    // echo $complete->food();
    // echo "<br/>";



// abstract class penstion{

//     // public $prix ;
    
//     // public function __construct($prix)
//     // {
//     //     $this->prix = $prix;
//     // }
//     abstrcat function food :  () ;
// }




// class Complete extends penstion{
//     public static $Pension_Complete_Prix;

//     // public function __construct($prix = 80)
//     // {
//     //     $this->prix = $prix;
//     // }
//     function food(){
//         return $this->prix;
//     }
// }
// class Sans extends penstion{
//     public static $Pension_Demi_Prix;

//     // public function __construct($prix = 0)
//     // {
//     //     // $this->type = $type;
//     //     $this->prix = $prix;
//     // }
//     function food(){
//         return $this->prix * 0;
//     }
// }
// class Demi extends penstion{
//     public static $Pension_Sans_Prix;
//     public $type_demi;
//     // public function __construct($prix = 60)
//     // {
//     //     $this->prix = $prix;
//     // }
//     function food($demi){
//         if($demi == "Petit dej/dej")
//         {
//             return $this->prix;
//         }
//         else if($demi == "Petit dej/din"){
//             return $this->prix * 0.7;
//         }
//     }
// }


?>
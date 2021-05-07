<?php
// include "../model/db.php";
    $ID_client = $_GET["ID_client"];
        // header('Location:../vue/home.php?ID_client='.$ID_client);
?>

<?php 
    
    /////// get client informatios


    $id="ID_client";
    $new_data = new CRUD("clients");
    $client_data=["Fname", "Lname","Total_Prix"];
    $result = $new_data->get_data($client_data,$ID_client,$id);
    foreach($result as $value)
    {
        $Fname = $value["Fname"];
        $Lname = $value["Lname"];
        $Total = $value["Total_Prix"] ;
    }




////// get client reservation


$new_data = new CRUD("reservation");
$id="ID_commande ";
$client_reservation=["Date_start", "Date_end", "Day"];
$result = $new_data->get_data($client_reservation,$ID_client,$id);


foreach($result as $value)
{
    $date_start = $value["Date_start"];
    $date_end = $value["Date_end"];
    $days = $value["Day"];
}


?>

<section class="zone_client_informations container">
<div class="card">
    <h1>Client informations</h1>
    <div class="client_name">
        <h4>Name : <?php echo $Fname ." " . $Lname?></h4>
    </div>
    <div class="client_service">
         <h4>ROOM</h4>
        <table  cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Num</th>
                        <th>Room</th>
                        <th>Room Vue</th>
                        <th>Room Type</th>
                        <th>Pension</th>
                        <th>Pension Choix</th>
                    </tr>
        <?php
            $new_data = new CRUD("client_service");
            $id="ID_commande ";
            $client_service_data=["chambre", "Type_Chambre","Second_Type_Chambre","Pension","Pension_Choix"];
            $result_service_client = $new_data->get_data($client_service_data,$ID_client,$id);
            $i = 1;
            foreach($result_service_client  as $value)
            {

        
        ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $value["chambre"]?></td>
                        <td><?php echo $value["Type_Chambre"]?></td>
                        <td><?php echo $value["Second_Type_Chambre"]?></td>
                        <td><?php echo $value["Pension"]?></td>
                        <td><?php echo $value["Pension_Choix"]?></td>
                    </tr>
            <?php
            $i++;
            
         }
            ?>
        
        </table>
    </div>
    <div class="client_child">
        <h4>CHILDREN</h4>
        <table  cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Num</th>
                        <th>Child</th>
                        <th>Child choix</th>
                    </tr>
        <?php

            $new_data = new CRUD("client_child");
            $id="ID_commande ";
            $client_child=["Name", "Type_Choix"];
            $result_client_child = $new_data->get_data($client_child,$ID_client,$id);
            $i=1;

            foreach($result_client_child  as $value)
            {
        ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $value["Name"]?></td>
                        <td><?php echo $value["Type_Choix"]?></td>
                    </tr>
        <?php

        $i++;
        }
        
        ?>

        </table>
    </div>
    <div class="client_date">
        <h4>DATE</h4>
        <table  cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Date start</th>
                        <th>Date end</th>
                        <th>DAYS</th>
                    </tr>
                    <tr>
                        <td><?php echo $date_start?></td>
                        <td><?php echo $date_end?></td>
                        <td><?php echo $days . " Days"?></td>
                    </tr>
        
        </table>
    </div>
    <div class="client_prix">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-12">
                <div class="prix_text">
                        <h3>TOTAL </h3>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12">
                <div class="prix_text">
                        <h3><?php  echo $Total . " $"?></h3>
                </div>
            </div>

        </div>
    </div>
</div>

</section>
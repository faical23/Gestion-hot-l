<?php
    $ID_client = $_GET["ID_client"];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <title>Client Informations</title>
    </head>
<body class="page_client_info">


    <section class="hero_navbar">

        <?php 
            include  '../includes/navbar.php';
            if($_SESSION["admine"] != "admine_open"){
                header('Location:../vue/index.php');
            }
            
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

    </section>

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












<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/navbar.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/popup.js"></script>

</body>
</html>

<?php




//     /////// get client informatios
//     echo "===============================   client informations ==================================";
//     echo "<br/>";

//     $id="ID_client";
//     $new_data = new CRUD("clients");
//     $client_data=["Fname", "Lname","Total_Prix"];
//     $result = $new_data->get_data($client_data,$ID_client,$id);
//     foreach($result as $value)
//     {
//         $Fname = $value["Fname"];
//         echo "First name  :" .$value["Fname"];
//         echo "<br/>";
//         echo "Last name  :" .$value["Lname"];
//         echo "<br/>"; 
//        echo "Prix total :" .$value["Total_Prix"] . "$";
//         echo "<br/>";
//     }

// ////// get client service

//     echo "===============================   client service ==================================";
//     echo "<br/>";

//     $new_data = new CRUD("client_service");
//     $id="ID_commande ";
//     $client_service_data=["chambre", "Type_Chambre","Second_Type_Chambre","Pension","Pension_Choix"];
//     $result = $new_data->get_data($client_service_data,$ID_client,$id);


//     foreach($result as $value)
//     {
//         echo  "chambre  :" . $value["chambre"];
//         echo "<br/>";
//         echo "type chambre  :" .$value["Type_Chambre"];
//         echo "<br/>"; 
//         echo "second type chambre  :" .$value["Second_Type_Chambre"];
//         echo "<br/>";
//         echo "pension  :" .$value["Pension"];
//         echo "<br/>"; 
//         echo "pesion choix  :" .$value["Pension_Choix"];
//         echo "<br/>";
//     }



//     ////// get client child

//     echo "===============================   client child ==================================";
//     echo "<br/>";

//     $new_data = new CRUD("client_child");
//     $id="ID_commande ";
//     $client_child=["Name", "Type_Choix"];
//     $result = $new_data->get_data($client_child,$ID_client,$id);


//     foreach($result as $value)
//     {
//         echo  "Child  :" . $value["Name"];
//         echo "<br/>";
//         echo "Child choix  :" .$value["Type_Choix"];
//         echo "<br/>"; 
//     }

//         ////// get client reservation

//         echo "===============================   client reservation ==================================";
//         echo "<br/>";
    
//         $new_data = new CRUD("reservation");
//         $id="ID_commande ";
//         $client_reservation=["Date_start", "Date_end", "Day"];
//         $result = $new_data->get_data($client_reservation,$ID_client,$id);
    
    
//         foreach($result as $value)
//         {
//             echo  "date start :" . $value["Date_start"];
//             echo "<br/>";
//             echo  "date end :" . $value["Date_end"];
//             echo "<br/>";
//             echo "days :" .$value["Day"];
//             echo "<br/>"; 
//         }


?>
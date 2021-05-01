<?php
    session_start();
    include "../model/db.php";

    /// get how many users we have today?
    $execution = new CRUD("clients");
    $client_numbers = $execution->select("yes");

    /// get how many chambre we use  today?
    $execution = new CRUD("client_service");
    $chambres_numbers = $execution->select("yes");

     /// get totatl prix?
     $execution = new CRUD("clients");
     $total_prix = $execution->get_total("Total_Prix");
     
     foreach($total_prix as $value){
         $price_total_commande = $value["SUM(Total_Prix)"];
     } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>
<section class="dashboard">
    <div class="sidebar">
                <a href="dashboard.php?manage=tarifs" >
                    <div class="item_menu">Manage tarifs</div>
                </a">
                <a href="dashboard.php?manage=clients"  >
                    <div class="item_menu">Manage clients</div>
                </a>
                <a href="dashboard.php?manage=users" >
                    <div class="item_menu">Manage users</div>
                </a>
                <a href="dashboard.php?manage=reclamation"  >
                    <div class="item_menu">reclamation</div>
                </a>
    </div>
<div class="managment">
    <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card">
                <h3>Client</h3>
                <h3><?php echo $client_numbers;?></h3>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card">
                <h3>Chambre</h3>
                <h3><?php echo $chambres_numbers?></h3>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card">
                <h3>Total</h3>
                <h3><?Php echo $price_total_commande . "$"?></h3>
            </div>
        </div>
    </div>
    <div class="section_managment">
        <h2>Managmnet <?php echo $_GET["manage"]?></h2>

    
        <div class="zone_table">
            <?php
            
                if($_GET["manage"] == "tarifs")
                {

            ?>
            <div class='row'>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                    <h4>Chambre Prix</h4>
                    <table  cellspacing="0" cellpadding="0">
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Second Type</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        <?php
                        $table = 'chambres';
                            $execution = new CRUD($table);
                            $result = $execution->select();
                            foreach($result as $value){
                        ?>
                        <tr>
                            <td><?php echo $value["name"]?></td>
                            <td><?php echo $value["type"]?></td>
                            <td><?php echo $value["second_type"]?></td>
                            <td><?php echo $value["prix"] . "$"?></td>
                            <td>
                                    <div class="icon_crud">
                                        <a hred="#"  onclick="update_chambre_prix(<?php echo $value['id'];?>,'<?php echo $value['name'];?>','<?php echo $table;?>')">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg>   
                                        </a>
                                    </div>
                             </td>

                        </tr>
                        <?php
                            }
                        ?>

                    </table>
                </div>
                <div class="col-xxl-6 col-xl-6col-lg-6 col-md-6 col-12">
                    <h4>Pension Prix</h4>
                    <table  cellspacing="0" cellpadding="0">
                            <tr>
                                <th>Name</th>
                                <th>Second choix</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        <?php
                            $table = "pension";
                            $execution = new CRUD($table);
                            $result = $execution->select();
                            foreach($result as $value){
                        ?>
                            <tr>
                                <td><?php echo $value["name"]?></td>
                                <td><?php echo $value["second_choix"]?></td>
                                <td><?php echo $value["prix"] . "$"?></td>
                                <td>
                                <div class="icon_crud">
                                        <a hred="#" onclick="update_chambre_prix(<?php echo $value['id'];?>,'<?php echo $value['name'];?>','<?php echo $table;?>')">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg>   
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>

                    </table>
                </div>

            </div>

            <?php
                }

            
            if($_GET["manage"] == "clients")
            {
                $table = "clients";
                $execution = new CRUD($table);

                if(isset($_GET["name"])){
                    $name = $_GET["name"]; 
                    if( $name != ""){
                        $result = $execution->select("",["Fname" => $name]);
                    }
                    else{
                        $result = $execution->select();
                    }
                }
                else{
                    $result = $execution->select();
                }


            ?>
                <input type="text" placeholder="Search client" value="" id="zone_search">
                <button class="btn"  id="search" onclick="search('<?php echo $table?>')">Search</button>

                <table  cellspacing="0" cellpadding="0">
                            <tr>
                                <th>First Name</th>
                                <th>FLast Name</th>
                                <th>Prix</th>
                                <th>ID client</th>
                                <th>Action</th>
                            </tr>
            <?php
            foreach($result as $value)
            {
            
            ?>

                            <tr>
                                <td><?php echo $value["Fname"] ?></td>
                                <td><?php echo $value["Lname"] ?></td>
                                <td><?php echo $value["Total_Prix"] ?></td>
                                <td><?php echo $value["ID_client"] ?></td>
                                <td>
                                    <div class="icon_crud">
                                         <a href="#" >
                                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                        </a>
                                        <a hred="#" onclick="delete_data(<?php echo $value['ID_client']?> , '<?php echo $table?>')">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg> 
                                        </a>
                                    </div>
                                </td>
                            </tr>


            <?php
            }
            ?>
            </table>
            <?php
            }            
            if($_GET["manage"] == "users")
            {

            ?>
                <input type="text" placeholder="Search client" value="">
                <table  cellspacing="0" cellpadding="0">
                            <tr>
                                <th>First Name</th>
                                <th>FLast Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>

                            <?php
                                $table = "users";
                                $execution = new CRUD($table);
                                $result = $execution->select();
                                foreach($result as $value)
                                {
                            
                            ?>

                            <tr>
                                <td><?php echo $value["Fname"] ?></td>
                                <td><?php echo $value["Lname"] ?></td>
                                <td><?php echo $value["Email"] ?></td>
                                <td><?php echo $value["PhoneNumber"] ?></td>
                                <td>
                                    <div class="icon_crud">
                                        <a hred="#" onclick="delete_data(<?php echo $value['id']?> , '<?php echo $table?>')">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg> 
                                        </a>
                                    </div>
                                </td>
                            </tr>


            <?php
            }
            ?>
            </table>
            <?php
            }
            ?>





<!--- manage reclamation -->


            <?php
                if($_GET["manage"] == "reclamation")
                {

            ?>
                <input type="text" placeholder="Search client" value="">
                <table  cellspacing="0" cellpadding="0">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>

                            <?php
                                $table = "reclamation";
                                $execution = new CRUD($table);
                                $result = $execution->select();
                                foreach($result as $value)
                                {
                            
                            ?>

                            <tr>
                                <td><?php echo $value["name"] ?></td>
                                <td><?php echo $value["email"] ?></td>
                                <td><?php echo $value["sujet"] ?></td>
                                <td><?php echo $value["reclamation"] ?></td>
                                <td>
                                    <div class="icon_crud">
                                        <a href="#" onclick="show_data_client(<?php echo $value['id']?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>


            <?php
            }
            ?>
            </table>
            <?php
            }
            ?>









         </div>

        <div class="back_to_home">
                    <a href="home.php">back to home <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	width="30px" height="30px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
			c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
			l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
			c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a>
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




<!-- pop up if message Not sent -->

<?php
    if(!empty($_SESSION["update_not_success"])){
?>
    <script>
        error("error in update please repeat your update");
    </script>
<?php
        unset($_SESSION["update_not_success"]);
    }
?>



<script>
    var search = (table) =>{
        let name = document.querySelector("#zone_search").value
        console.log(table);
        console.log(name);


	window.location ="dashboard.php?manage=" + table + "&name=" + name;
}
</script>

</body>
</html>
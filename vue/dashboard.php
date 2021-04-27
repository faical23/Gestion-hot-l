<?php
    session_start();
    include "../model/db.php";
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
                <a href="dashboard.php?manage=client"  >
                    <div class="item_menu">Manage clients</div>
                </a>
                <a href="dashboard.php?manage=users" >
                    <div class="item_menu">Manage users</div>
                </a>
                <a href="dashboard.php?manage=employes"  >
                    <div class="item_menu">Manage employes</div>
                </a>
        
    </div>
<div class="managment">
    <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card">
                <h3>Client</h3>
                <h3>50</h3>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card">
                <h3>Chambre</h3>
                <h3>80</h3>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card">
                <h3>Total</h3>
                <h3>50</h3>
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
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        <?php
                        $table = 'chambre_prix';
                            $execution = new CRUD($table);
                            $result = $execution->select();
                            foreach($result as $value){
                        ?>
                            <tr>
                                <td><?php echo $value["name"]?></td>
                                <td><?php echo $value["Prix"] . "$"?></td>
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
                <div class="col-xxl-6 col-xl-6col-lg-6 col-md-6 col-12">
                    <h4>Pension Prix</h4>
                    <table  cellspacing="0" cellpadding="0">
                            <tr>
                                <th>Name</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        <?php
                            $table = "pension_prix";
                            $execution = new CRUD($table);
                            $result = $execution->select();
                            foreach($result as $value){
                        ?>
                            <tr>
                                <td><?php echo $value["name"]?></td>
                                <td><?php echo $value["Prix"] . "$"?></td>
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

            
            if($_GET["manage"] == "client")
            {

            ?>
                <input type="text" placeholder="Search client" value="">
                <table  cellspacing="0" cellpadding="0">
                            <tr>
                                <th>ID commande</th>
                                <th>First Name</th>
                                <th>FLast Name</th>
                                <th>Action</th>
                            </tr>
            <?php
            $table = "client";
            $execution = new CRUD($table);
            $result = $execution->select();
            foreach($result as $value)
            {
            
            ?>

                            <tr>
                                <td><?php echo $value["id_commande"]?></td>
                                <td><?php echo $value["Fname"] ?></td>
                                <td><?php echo $value["Lname"] ?></td>
                                <td>
                                    <div class="icon_crud">
                                         <a href="#" onclick="show_data_client(<?php echo $value['id']?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                        </a>
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


<script>

const update_chambre_prix = (id,name,table) =>{

    swal(`prix : ${name}`, {
    content: "input",
    })
    .then((value) => {
        swal(`${name} : ${value} $`);
        window.location.href = `../controller/update.php?id=${id}&prix=${value}&table=${table}`;
    });

}

// const show_data_client = (id) =>{
//     swal(`id = ${id}`);
// }

const delete_data = (id,table) =>{

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location.href = `../controller/delete.php?id=${id}&table=${table}`;
        } else {
            swal("Your imaginary file is safe!");
        }
        });


}

</script>

</body>
</html>
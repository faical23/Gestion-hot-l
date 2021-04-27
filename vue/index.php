<?php
session_start();


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Reservaion</title>
</head>

<body >

  <section class="navbar_hero">

  
  </section>
    <form action="../controller/logic_reserve.php" method="POST">


        <!-- chambre choix-->
<div id="all_choix" style="margin-bottom:20px">
<input type="number" value="1" id="number_chambre" name="number_chambre">
<!-- <h1 id="number_chambre" name="number_chambre">1</h1> -->
    <div id="choix">
          <label style=" margin:20px 0px; display: block;">Selcet Your Chambre</label>
            <select id="options" name="chambre_0">
                <option value="Select an option " disabled selected>Select an option</option>
                <option value="chambre_Simple">Chambre simple</option>
                <option value="chambre_Double">Chambre Double</option>
                <option value="Appartement">Appartement</option>
                <option value="bungalow">bungalow</option>

            </select>

            <select id="choix_option" name="type_chambre_0">
                <option value="Select an option 1" disabled  selected>Type Chambre</option>
              </select>

              <select id="choix_chambre_double" style="display: none;" name="type_chambre_double_0">
                <option value="Select an option" disabled  selected>Please select an option</option>
              </select>
    </div> 
</div>


      <a style="padding:10px; border:1px solid red; cursor:pointer;" id="add_chambre">+</a>
      <a style="padding:10px; border:1px solid red; cursor:pointer;" id="moins_chambre">-</a>




      <a style="padding:10px; border:1px solid red; cursor:pointer; display:block;" id="valide_chambre">Valide chambres</a>

























        <!-- pension choix-->

        <label style=" margin:20px 0px; display: block;">Selcet Your pension</label>
        <select id="options_pension" name="pension">
            <option value="Select an option" disabled selected>Select an option</option>
            <option value="complete">Complete</option>
            <option value="Demi">demi</option>
            <option value="sans">sans</option>
          </select>
        <select id="choices_demi_pension" style="display:none;" name="pension_demi_type">
            <option value="Select an option" disabled  selected>Please select an option</option>
        </select>


















        <!-- children-->
        <label style=" margin:20px 0px; display: block;">les enfants</label>
        <label for="" style="display: block;">Bebe less then 2years</label>
        <input type="number" id="bebe" value="0" min="0" max="30" name="bebe">
        <select id="choixes_bebe" style="display: none;" name="bebe_choix">
            <option value="Select an option " disabled  selected style="display: none;">Please select an option</option>
            <option value="Add lit">Add Lit</option>
            <option value="Without lit">Without lit</option>
        </select>

        <label for=" " style="display: block; ">Enfant betwen 2years and 14 years</label>
        <input type="number" id="enfant " value="0" min="0" max="30" name="enfant">
        <label for=" " style="display: block; ">adulte more than 14years</label>
        <input type="number" id="adulte" value="0" min="0" max="30" name="adulte">
        <select id="choixes_adulte" style="display: none;" name="adulte_choix">
            <option value="Select an option " disabled  selected >Please select an option</option>
            <option value="Add Lit">Add Lit</option>
            <option value="Add Chambre">add Chambre</option>
        </select>

      <!-- date -->

      <div class="date">
           <input type="date" name="start_date" id="start_date">
           <input type="date" name="end_date" id="end_date">
      </div>

      <input type="checkbox" name="verified">
      <label for="">i verified all choix</label>




        <button class="validation" type="submit" name="valide_reserve" style="display: block;">c'est Partie</button>
    </form>
    <img id="img_chmabre" src="../assets/img/appartement.jpg" style="width:30%; ">






    <script src="../node_modules/jquery/dist/jquery.min.js "></script>
    <script src="../assets/js/main.js"></script>
    <script>



    </script>
</body>

</html>
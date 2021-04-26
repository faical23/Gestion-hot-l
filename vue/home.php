<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <title>Home</title> -->
</head>

<body>
    
    <!-- start navbar-->
<section class="hero_page">

    <section class="hero_navbar">

    <?php 
        include  '../includes/navbar.php';
    ?>

    <!-- form -->
    <div class="hero">
        <div class="container">
            <div class="form__image">
            <div class="zone_form">
                <form action="../controller/logic_reserve.php" method="POST">


        <!-- chambre choix-->

<div id="all_choix" >
    <input type="number" value="1" id="number_chambre" name="number_chambre" hidden>
    <h3>Book Your Room now !</h3>


    <div id="choix">
          <label style=" margin:20px 0px; display: block;">Selcet Your Room</label>
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

<div class="add_moins">
        <a  id="add_chambre" class="btn">+</a>
      <a  id="moins_chambre" class="btn">-</a>
</div>

<div class="pension_choix">
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

</div>

<label >Children</label>
<div class="children">
    <div class="child_zone">
            <div class="plus_moix_chlid">
                <label style="display:block">Bebe(-2years)</label>
                <div class="zone_plus_moins_chlid">
                    <a class="btn" id="moins">-</a>
                    <input type="text" id="bebe" value="0" class="child" style="background-color:white;" name="bebe">
                    <a class="btn" id="plus">+</a>
                </div>
            </div>
            <select id="choixes_bebe" name="bebe_choix">
                <option value="Select an option " disabled  selected >options</option>
                <option value="Add lit">Add Lit</option>
                <option value="Without lit">Without lit</option>
            </select>
    </div>
    <div class="child_zone">
        <div class="plus_moix_chlid">
            <label style="display:block">Enfant</label>
            <a class="btn" id="moins">-</a>
            <input type="text" id="enfant" value="0" class="child"  style="background-color:white;" name="enfant">
            <a class="btn" id="plus">+</a>
        </div>
    </div>

    <div class="child_zone">
         <div class="plus_moix_chlid">
            <label style="display:block">Adulte(+14years)</label>
            <a class="btn" id="moins">-</a>
            <input type="text" id="adulte" value="0" class="child"  style="background-color:white;" name="adulte">
            <a class="btn" id="plus">+</a>

        </div>
        <select id="choixes_adulte"name="adulte_choix">
            <option value="Select an option " disabled  selected >options</option>
            <option value="Add Lit">Add Lit</option>
            <option value="Add Chambre">add Chambre</option>
        </select>

    </div>

</div>



<!-- <div class="children_choix">
    <label style=" margin:20px 0px; display: block;">Children</label>
        <label for="" style="display: block;">-2years</label>


        <input type="number" id="bebe" value="0" min="0" max="30" name="bebe">
        <select id="choixes_bebe" style="display: none;" name="bebe_choix">
            <option value="Select an option " disabled  selected style="display: none;">Please select an option</option>
            <option value="Add lit">Add Lit</option>
            <option value="Without lit">Without lit</option>
        </select>

        <label for=" " style="display: block; ">betwen 2 and 14 years</label>
        <input type="number" id="enfant " value="0" min="0" max="30" name="enfant">
        <label for=" " style="display: block; ">+14years</label>
        <input type="number" id="adulte" value="0" min="0" max="30" name="adulte">
        <select id="choixes_adulte" style="display: none;" name="adulte_choix">
            <option value="Select an option " disabled  selected >Please select an option</option>
            <option value="Add Lit">Add Lit</option>
            <option value="Add Chambre">add Chambre</option>
        </select>
</div> -->







      <div class="date">
           <input type="date" name="start_date" id="start_date">
           <input type="date" name="end_date" id="end_date">
      </div>

<div class="chickbox_input">
    <input type="checkbox" name="verified">
      <label for="">i verified all choix</label>
</div>





       <button class="validation" type="submit" name="valide_reserve" style="display: block;">c'est Partie</button>
    </form>
</div>

<div class="blob" >

</div>
<!-- <div class="image_chambres">
<img id="img_chmabre"  src="../assets/img/Chambre_Simple.jpg">
</div> -->
</section>
    </div>
    </div>
 </div>
 


 </section>



 <section class="features py-5">
        <div class="container">
            <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-121 col-12">
                    <div class="features_content">
                        <h2>See what can you find whith us?</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti, cumque voluptates nobis reiciendis minima quibusdam.</P>
                        <button type="button" class="btn btn-primary start_free">Book</button>

                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="item_1">
                        <div class="card">
                            <div class="card-body">
                            <svg id="Capa_1" enable-background="new 0 0 512 512" height="100" viewBox="0 0 512 512" width="100" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_1750_"><g id="XMLID_831_"><path id="XMLID_834_" d="m354.404 344.404h-30.689l-15.942-7.095v-19.357c22.321-12.297 39.832-32.285 48.944-56.368h13.676c32.567 0 59.063-26.496 59.063-59.063 0-21.029-11.056-39.515-27.652-49.982v-6.735c.001-80.397-65.407-145.804-145.804-145.804s-145.805 65.407-145.805 145.805v6.73c-16.6 10.467-27.659 28.954-27.659 49.986 0 32.567 26.496 59.063 59.063 59.063h13.683c9.112 24.083 26.623 44.071 48.944 56.368v19.277l-16.121 7.174h-30.51c-86.898.001-157.595 70.699-157.595 157.597 0 5.522 4.477 10 10 10h201c5.523 0 10-4.478 10-10s-4.477-10-10-10h-190.641c4.986-69.108 61.239-124.232 130.816-127.444-.026.084-.062.164-.086.248-.811 2.85-.316 5.912 1.35 8.362l47.305 69.544c1.676 2.464 4.363 4.052 7.329 4.332.314.029.628.044.941.044 2.639 0 5.186-1.045 7.07-2.929l40.827-40.827 40.826 40.827c1.884 1.884 4.432 2.929 7.07 2.929.312 0 .626-.015.94-.044 2.967-.28 5.654-1.868 7.33-4.332l47.306-69.544c1.666-2.449 2.16-5.513 1.35-8.362-.025-.087-.061-.168-.088-.254 69.66 3.125 126.006 58.284 130.996 127.451h-190.641c-5.522 0-10 4.478-10 10s4.478 10 10 10h201c5.522 0 10-4.478 10-10 0-86.899-70.697-157.597-157.596-157.597zm-10.967-188.787c-20.545-2.821-39.825-11.007-56.206-23.967-3.591-2.842-8.656-2.88-12.291-.091-21.482 16.482-47.18 25.194-74.314 25.194-10.89 0-21.628-1.451-32.029-4.27v-5.084c0-48.192 39.207-87.399 87.399-87.399s87.4 39.207 87.4 87.399c.001 0 .02 7.95.041 8.218zm26.957 85.968h-6.757v-78.127h6.757c21.54 0 39.063 17.523 39.063 39.064 0 21.539-17.523 39.063-39.063 39.063zm-114.394-221.585c68.957 0 125.124 55.769 125.789 124.572-3.689-.724-7.497-1.114-11.396-1.114h-7.077c-2.082-57.401-49.419-103.458-107.32-103.458s-105.238 46.057-107.32 103.458h-7.076c-3.896 0-7.701.389-11.389 1.113.666-68.802 56.833-124.571 125.789-124.571zm-107.644 221.585h-6.756c-21.54 0-39.063-17.524-39.063-39.064s17.523-39.064 39.063-39.064h6.757v78.128zm20-17.98v-50.54c10.536 2.448 21.341 3.688 32.27 3.688 29.018 0 56.629-8.565 80.319-24.845 18.62 13.124 40.042 21.272 62.691 23.886v48.349c-.057 9.374-1.593 18.403-4.386 26.866h-47.754c-4.132-11.684-15.284-20.08-28.364-20.08h-13.387c-16.586 0-30.079 13.494-30.079 30.08s13.493 30.08 30.079 30.08h13.387c13.081 0 24.233-8.396 28.364-20.08h38.188c-15.615 24.191-42.81 40.239-73.684 40.239-48.327 0-87.644-39.316-87.644-87.643zm104.857 37.404c0 5.559-4.521 10.08-10.08 10.08h-13.387c-5.558 0-10.079-4.521-10.079-10.08s4.521-10.08 10.079-10.08h13.387c5.558 0 10.08 4.521 10.08 10.08zm-17.213 70.239c11.056 0 21.726-1.678 31.773-4.788v16.722l-31.862 31.862-31.685-31.684v-16.9c10.048 3.11 20.718 4.788 31.774 4.788zm-46.515 90.223-33.778-49.658 33.692-14.994 32.369 32.369zm92.851 0-32.283-32.283 32.369-32.369 33.693 14.994z"/><path id="XMLID_843_" d="m256 492c-2.63 0-5.21 1.069-7.07 2.93-1.86 1.86-2.93 4.44-2.93 7.07s1.069 5.21 2.93 7.069c1.86 1.86 4.44 2.931 7.07 2.931s5.21-1.07 7.069-2.931c1.861-1.859 2.931-4.439 2.931-7.069s-1.07-5.21-2.931-7.07c-1.859-1.861-4.439-2.93-7.069-2.93z"/></g></g></svg>
                                <h5 class="card-title">Qualité</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat incidunt alias perferendis! Repudiandae, incidunt. Quia, eaque doloribus magnam adipisci quos voluptatibus. Ducimus repellendus animi expedita necessitatibus
                                    tenetur. Eveniet, ipsa labore.</p>
                                <a href="#" class="btn btn-primary">See more</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                            <svg id="Layer_1" enable-background="new 0 0 128 128" height="100" viewBox="0 0 128 128" width="100" xmlns="http://www.w3.org/2000/svg"><g><path d="m51.7 27.8-2.3 13.5c-.2 1.4 1.3 2.5 2.5 1.8l12.1-6.3 12.1 6.4c1.3.7 2.8-.4 2.5-1.8l-2.3-13.5 9.8-9.5c1-1 .4-2.8-1-3l-13.5-2-6-12.4c-.6-1.3-2.5-1.3-3.1 0l-6.1 12.3-13.5 2c-1.4.2-2 2-1 3zm6.1-11.2c.6-.1 1.1-.4 1.3-1l4.9-9.8 4.9 9.9c.3.5.7.9 1.3 1l10.9 1.6-7.9 7.7c-.4.4-.6 1-.5 1.5l1.9 10.9-9.8-5.1c-.5-.3-1.1-.3-1.6 0l-9.8 5.1 1.9-10.9c.1-.6-.1-1.1-.5-1.5l-7.9-7.7z"/><path d="m126.4 29.1-10.7-1.6-4.8-9.7c-.6-1.3-2.5-1.3-3.1 0l-4.8 9.7-10.7 1.6c-1.4.2-2 2-1 3l7.8 7.6-1.8 10.7c-.3 1.4 1.3 2.5 2.5 1.8l9.6-5 9.6 5c1.3.7 2.8-.4 2.5-1.8l-1.8-10.7 7.8-7.6c.9-1 .3-2.8-1.1-3zm-9.9 8.7c-.4.4-.6 1-.5 1.5l1.4 8.1-7.3-3.8c-.5-.3-1.1-.3-1.6 0l-7.3 3.8 1.4-8.1c.1-.6-.1-1.1-.5-1.5l-5.9-5.7 8.1-1.2c.6-.1 1.1-.4 1.3-1l3.6-7.4 3.8 7.5c.3.5.7.9 1.3 1l8.1 1.2z"/><path d="m30.8 50.3-1.8-10.6 7.8-7.6c1-1 .4-2.8-1-3l-10.8-1.5-4.8-9.7c-.6-1.3-2.5-1.3-3.1 0l-4.8 9.7-10.7 1.5c-1.4.2-2 2-1 3l7.8 7.6-1.9 10.6c-.3 1.4 1.3 2.5 2.5 1.8l9.6-5 9.6 5c1.3.8 2.8-.3 2.6-1.8zm-5.4-10.9 1.4 8.1-7.3-3.8c-.5-.3-1.1-.3-1.6 0l-7.3 3.8 1.4-8.1c.1-.6-.1-1.1-.5-1.5l-5.9-5.7 8.1-1.2c.6-.1 1.1-.4 1.3-1l3.6-7.4 3.6 7.4c.3.5.7.9 1.3 1l8.1 1.2-5.9 5.7c-.3.3-.4.9-.3 1.5z"/><path d="m64.1 83.4h1.2c1 0 1.7-.8 1.7-1.7s-.8-1.7-1.7-1.7h-.3l.3-1.9c.2-1-.5-1.9-1.4-2-1-.2-1.9.5-2 1.4v.1l-.4 2.8c-.3 1.5 1 3 2.6 3z"/><path d="m70.6 78.2c1.8 0 3.2-1.4 3.2-3.2s-1.4-3.2-3.2-3.2-3.2 1.4-3.2 3.2c0 1.7 1.4 3.2 3.2 3.2z"/><path d="m58.8 84.7c-.7.6-.9 1.7-.2 2.5 2.9 2.9 7.6 3 10.5.1.7-.7.7-2-.2-2.6-.7-.6-1.8-.5-2.4.2-1.5 1.3-3.8 1.3-5.3 0-.5-.7-1.6-.8-2.4-.2z"/><path d="m60.6 75c0-1.8-1.4-3.2-3.2-3.2s-3.2 1.4-3.2 3.2 1.4 3.2 3.2 3.2c1.8 0 3.2-1.5 3.2-3.2z"/><path d="m87.7 102.4c-3.4-.8-6.4-.8-10.5-1.2-1.7-.3-2.8-.7-3.1-2.2l-.5-4.1c3.3-2.8 4.7-6.4 5.5-10.7 3.8 0 6.1-2.9 6.1-5.8 0-2.7-1.8-5-4.5-5.7v-5.3c0-9.2-7.5-16.6-16.6-16.7-9.2 0-16.7 7.5-16.7 16.7v5.3c-3.1.7-5.2 3.7-4.5 6.9.6 2.8 3.1 4.8 6.1 4.6.7 4.4 2.2 7.9 5.5 10.7 0 0-.4 3-.5 4-.1.6-.5 1.2-.9 1.6-1.6 1.4-6.2.4-12.7 2-6.6 1.8-11.1 7.8-11.1 14.6v9.2c0 1 .8 1.7 1.7 1.7h66.2c1 0 1.7-.8 1.7-1.7v-9.3c-.1-6.8-4.6-12.8-11.2-14.6zm-13.8 1.4c.7.3 1.5.6 2.3.7l-3 7.6-6-3.2c.1 0 7.1-5.4 6.7-5.1zm7.7-25.5c0 1.1-.8 2-1.8 2.2l.5-2.3c.1-.6.2-1.2.3-1.8.6.4 1 1.1 1 1.9zm-26.9-20.3c2.5-2.5 5.8-3.9 9.3-3.9 7.3 0 13.1 5.9 13.2 13.2v.7h-9.5c-1.7 0-3.3-.8-4.3-2.2l-2-2.8c-.7-1-2.2-1-2.9 0l-1.9 2.7c-1 1.4-2.6 2.2-4.3 2.2h-1.6v-.7c.1-3.4 1.5-6.8 4-9.2zm-8.5 20.3c0-.8.5-1.6 1.2-2 0 .7.1 1.3.3 1.9l.5 2.4c-1.2-.2-2-1.2-2-2.3zm4.6-3.2v-3.6h1.6c2.9 0 5.5-1.4 7.2-3.7l.5-.7.5.7c1.6 2.3 4.3 3.7 7.2 3.7h9.5v3.6c0 2.4-1.1 5.8-1.5 8.2-.3 1.6-.7 3.1-1.2 4.6-3.8 9.4-17.4 9.4-21 0-.6-1.5-.9-2.9-1.2-4.5-.6-2.7-1.6-5.9-1.6-8.3zm13.2 23.2c2.2 0 4.4-.5 6.4-1.4l.3 2.5c.1 1 .4 1.6.7 2l-7.4 5.6-7.4-5.7c.4-.8.7-1.6.7-2l.3-2.5c2 1.1 4.2 1.6 6.4 1.5zm-9.9 5.6 6.6 5.1-6 3.2-3-7.5c.9-.2 1.7-.4 2.4-.8zm41.3 20.5h-62.8v-7.4c0-5.2 3.5-9.8 8.6-11.2 3.3-.8 5.4-.8 6.9-.9l4.1 10.3c.4 1 1.5 1.4 2.4.9l9.4-4.9 9.4 4.9c.9.5 2.1.1 2.4-.9l4.1-10.3c3.6.3 4.8.3 7 .8 5 1.4 8.5 6 8.6 11.2z"/></g></svg>
                                <h5 class="card-title">Service</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat incidunt alias perferendis! Repudiandae, incidunt. Quia, eaque doloribus magnam adipisci quos voluptatibus. Ducimus repellendus animi expedita necessitatibus
                                    tenetur. Eveniet, ipsa labore.</p> <a href="#" class="btn btn-primary">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="item_2">
                        <div class="card card_1">
                            <div class="card-body">
                                <svg id="Layer_5" enable-background="new 0 0 64 64" height="100" viewBox="0 0 64 64" width="100" xmlns="http://www.w3.org/2000/svg"><path d="m43.303 25.925-.701-1.873c-.627.235-1.263.45-1.891.64l.578 1.914c.669-.202 1.347-.431 2.014-.681z"/><path d="m37 30.28v-2.688c.742-.119 1.487-.265 2.226-.435l-.451-1.949c-.964.224-1.941.4-2.904.527l-.871.115v4.431c0 .268.006.535.02.801l1.998-.102c-.012-.233-.018-.465-.018-.7z"/><path d="m19 13c-3.309 0-6 2.691-6 6s2.691 6 6 6 6-2.691 6-6-2.691-6-6-6zm0 10c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z"/><path d="m45.478 18.788-.477-.259-.477.259c-3.828 2.074-8.161 3.185-12.53 3.211l-.994.006v8.275c0 8.677 5.489 16.495 13.659 19.453l.341.123.341-.123c8.17-2.958 13.659-10.776 13.659-19.453v-8.275l-.994-.006c-4.366-.026-8.698-1.137-12.528-3.211zm11.522 11.492c0 7.717-4.807 14.682-12 17.445-7.193-2.764-12-9.729-12-17.445v-6.305c4.178-.171 8.297-1.261 12.001-3.177 3.705 1.916 7.823 3.006 11.999 3.177z"/><path d="m41 31.586-4.414 4.414 6.414 6.414 12.414-12.414-4.414-4.414-8 8zm11.586-1.586-9.586 9.586-3.586-3.586 1.586-1.586 2 2 8-8z"/><path d="m63 18h-4.829c-4.494 0-8.845-1.317-12.622-3.836l-.587-.341-.551.367c-2.277 1.519-4.784 2.595-7.411 3.209v-2.191l-2.635-.62c-.332-1.159-.795-2.275-1.381-3.332l1.426-2.303-5.363-5.363-2.303 1.426c-1.057-.586-2.173-1.049-3.332-1.381l-.62-2.635h-7.584l-.62 2.635c-1.159.332-2.275.795-3.332 1.381l-2.303-1.426-5.363 5.363 1.426 2.303c-.586 1.057-1.049 2.173-1.381 3.332l-2.635.62v7.584l2.635.62c.332 1.159.795 2.275 1.381 3.332l-1.426 2.303 5.363 5.363 2.303-1.426c1.057.586 2.173 1.049 3.332 1.381l.62 2.635h7.584l.62-2.635c1.159-.332 2.275-.795 3.332-1.381l.461.285c.536 4.323 2.198 8.378 4.745 11.78l-3.364 12.335 4.938-1.235 3.737 6.229 3.353-10.059c1.304.659 2.671 1.217 4.104 1.639l.282.084.282-.083c1.433-.422 2.8-.98 4.104-1.639l3.353 10.059 3.737-6.229 4.938 1.235-3.364-12.335c3.127-4.178 4.95-9.332 4.95-14.77zm-36.234 12.646-.523.318c-1.215.736-2.527 1.281-3.903 1.617l-.596.146-.536 2.273h-4.416l-.535-2.273-.596-.146c-1.376-.336-2.688-.881-3.903-1.617l-.523-.318-1.986 1.229-3.123-3.123 1.229-1.986-.318-.523c-.736-1.215-1.281-2.527-1.617-3.903l-.146-.596-2.274-.536v-4.416l2.273-.535.146-.596c.336-1.376.881-2.688 1.617-3.903l.318-.523-1.229-1.987 3.123-3.123 1.986 1.229.523-.318c1.215-.736 2.527-1.281 3.903-1.617l.596-.146.536-2.273h4.416l.535 2.273.596.146c1.376.336 2.688.881 3.903 1.617l.523.318 1.986-1.229 3.123 3.123-1.229 1.986.318.523c.736 1.215 1.281 2.527 1.617 3.903l.146.596 2.274.536v.982c-1.045.146-2.103.226-3.171.226h-.88c-.511-6.15-5.669-11-11.949-11-6.617 0-12 5.383-12 12s5.383 12 12 12c2.98 0 5.82-1.119 8-3.068v2.349c0 .176.018.349.022.524zm.234-12.646v6.979c-1.887 2.518-4.849 4.021-8 4.021-5.514 0-10-4.486-10-10s4.486-10 10-10c5.176 0 9.446 3.954 9.949 9zm9.739 39.621-2.263-3.771-3.062.765 2.099-7.698c1.552 1.701 3.34 3.189 5.324 4.409zm21.847-3.006-3.062-.765-2.263 3.771-2.098-6.295c1.984-1.22 3.772-2.708 5.324-4.409zm2.414-24.335c0 9.894-6.564 18.765-16 21.676-9.436-2.911-16-11.782-16-21.676v-10.28h2.829c4.673 0 9.203-1.309 13.17-3.808 3.948 2.494 8.489 3.808 13.172 3.808h2.829z"/></svg>  
                                    <h5 class="card-title">Disponiblité</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat incidunt alias perferendis! Repudiandae, incidunt. Quia, eaque doloribus magnam adipisci quos voluptatibus. Ducimus repellendus animi expedita necessitatibus
                                    tenetur. Eveniet, ipsa labore.</p> <a href="#" class="btn btn-primary">See more</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                            <svg id="Layer_5" enable-background="new 0 0 64 64" height="100" viewBox="0 0 64 64" width="100" xmlns="http://www.w3.org/2000/svg"><path d="m43.303 25.925-.701-1.873c-.627.235-1.263.45-1.891.64l.578 1.914c.669-.202 1.347-.431 2.014-.681z"/><path d="m37 30.28v-2.688c.742-.119 1.487-.265 2.226-.435l-.451-1.949c-.964.224-1.941.4-2.904.527l-.871.115v4.431c0 .268.006.535.02.801l1.998-.102c-.012-.233-.018-.465-.018-.7z"/><path d="m19 13c-3.309 0-6 2.691-6 6s2.691 6 6 6 6-2.691 6-6-2.691-6-6-6zm0 10c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z"/><path d="m45.478 18.788-.477-.259-.477.259c-3.828 2.074-8.161 3.185-12.53 3.211l-.994.006v8.275c0 8.677 5.489 16.495 13.659 19.453l.341.123.341-.123c8.17-2.958 13.659-10.776 13.659-19.453v-8.275l-.994-.006c-4.366-.026-8.698-1.137-12.528-3.211zm11.522 11.492c0 7.717-4.807 14.682-12 17.445-7.193-2.764-12-9.729-12-17.445v-6.305c4.178-.171 8.297-1.261 12.001-3.177 3.705 1.916 7.823 3.006 11.999 3.177z"/><path d="m41 31.586-4.414 4.414 6.414 6.414 12.414-12.414-4.414-4.414-8 8zm11.586-1.586-9.586 9.586-3.586-3.586 1.586-1.586 2 2 8-8z"/><path d="m63 18h-4.829c-4.494 0-8.845-1.317-12.622-3.836l-.587-.341-.551.367c-2.277 1.519-4.784 2.595-7.411 3.209v-2.191l-2.635-.62c-.332-1.159-.795-2.275-1.381-3.332l1.426-2.303-5.363-5.363-2.303 1.426c-1.057-.586-2.173-1.049-3.332-1.381l-.62-2.635h-7.584l-.62 2.635c-1.159.332-2.275.795-3.332 1.381l-2.303-1.426-5.363 5.363 1.426 2.303c-.586 1.057-1.049 2.173-1.381 3.332l-2.635.62v7.584l2.635.62c.332 1.159.795 2.275 1.381 3.332l-1.426 2.303 5.363 5.363 2.303-1.426c1.057.586 2.173 1.049 3.332 1.381l.62 2.635h7.584l.62-2.635c1.159-.332 2.275-.795 3.332-1.381l.461.285c.536 4.323 2.198 8.378 4.745 11.78l-3.364 12.335 4.938-1.235 3.737 6.229 3.353-10.059c1.304.659 2.671 1.217 4.104 1.639l.282.084.282-.083c1.433-.422 2.8-.98 4.104-1.639l3.353 10.059 3.737-6.229 4.938 1.235-3.364-12.335c3.127-4.178 4.95-9.332 4.95-14.77zm-36.234 12.646-.523.318c-1.215.736-2.527 1.281-3.903 1.617l-.596.146-.536 2.273h-4.416l-.535-2.273-.596-.146c-1.376-.336-2.688-.881-3.903-1.617l-.523-.318-1.986 1.229-3.123-3.123 1.229-1.986-.318-.523c-.736-1.215-1.281-2.527-1.617-3.903l-.146-.596-2.274-.536v-4.416l2.273-.535.146-.596c.336-1.376.881-2.688 1.617-3.903l.318-.523-1.229-1.987 3.123-3.123 1.986 1.229.523-.318c1.215-.736 2.527-1.281 3.903-1.617l.596-.146.536-2.273h4.416l.535 2.273.596.146c1.376.336 2.688.881 3.903 1.617l.523.318 1.986-1.229 3.123 3.123-1.229 1.986.318.523c.736 1.215 1.281 2.527 1.617 3.903l.146.596 2.274.536v.982c-1.045.146-2.103.226-3.171.226h-.88c-.511-6.15-5.669-11-11.949-11-6.617 0-12 5.383-12 12s5.383 12 12 12c2.98 0 5.82-1.119 8-3.068v2.349c0 .176.018.349.022.524zm.234-12.646v6.979c-1.887 2.518-4.849 4.021-8 4.021-5.514 0-10-4.486-10-10s4.486-10 10-10c5.176 0 9.446 3.954 9.949 9zm9.739 39.621-2.263-3.771-3.062.765 2.099-7.698c1.552 1.701 3.34 3.189 5.324 4.409zm21.847-3.006-3.062-.765-2.263 3.771-2.098-6.295c1.984-1.22 3.772-2.708 5.324-4.409zm2.414-24.335c0 9.894-6.564 18.765-16 21.676-9.436-2.911-16-11.782-16-21.676v-10.28h2.829c4.673 0 9.203-1.309 13.17-3.808 3.948 2.494 8.489 3.808 13.172 3.808h2.829z"/></svg>     
                                <h5 class="card-title">Food and Drink</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat incidunt alias perferendis! Repudiandae, incidunt. Quia, eaque doloribus magnam adipisci quos voluptatibus. Ducimus repellendus animi expedita necessitatibus
                                    tenetur. Eveniet, ipsa labore.</p>
                                <a href="#" class="btn btn-primary">See more</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        </div>
</section>

<section class="video_secion">
    <div class="container">
        <div class="video_&_content">
            <div class="row">
            <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-6 col-12">
            <video  autoplay loop muted >
                        <source src="../assets/video/video_1.mp4" 
                                type="video/mp4">
                    </video>
            </div>
            <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-6 col-12">
                <div class="conetnt">
                          <h2>Lorem Lorem</h2>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti, cumque voluptates nobis reiciendis minima quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti, cumque voluptates nobis reiciendis minima quibusdam.</P>
                        <button type="button" class="btn btn-primary start_free">Book</button>
                </div>

            </div>

            </div>
        </div>
    </div>
</section>


<section class="secstion_4 py-5">
    <div class="container">
        <div class="row">
        <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-6 col-12">
            <div class="section4__content">
                <h2>In</h2>
                <h2> our hotels</h2>
                <h3> you can feel very comfortable</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quisquam nam quas quibusdam ullam laborum eos harum nostrum nesciunt perferendis, illo sequi ea voluptate, quae fugit recusandae inventore magni itaque.</p>
                <div class='section_4__btn'>
                    <button class="btn">Book</button>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-6 col-12">
            <div class="section4__img">
                <img src="../assets/img/hotel_img/christian-lambert-vmIWr0NnpCQ-unsplash.jpg">
            </div>
        </div>


        </div>
    </div>

</section>


<footer >
    <div class="container">
        <div class="row">

        <div class="col-xxl-4 col-xl-4 col-sm-4 col-md-6 col-12">
             <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 192.756 192.756"><g fill-rule="evenodd" clip-rule="evenodd"><path fill="transparent" d="M0 0h192.756v192.756H0V0z"/><path d="M96.24 33.679c8.364 14.086 14.967 25.531 22.999 39.286.551.33.441.99.881 1.43 3.852 6.713 8.254 13.976 11.775 20.028l-.33.22-72.959.11c-.22-.771.44-1.101.66-1.761 12.325-20.688 23.55-40.386 35.654-60.634.77-.109.99.991 1.32 1.321z" fill="#e52e52"/><path d="M101.742 70.543l24.209 19.147 1.982 1.761h-.662l-25.859-15.626c-2.531-1.101-4.622-3.852-7.813-2.421-10.674 6.384-21.238 12.876-31.912 19.259h-.44c2.091-2.201 4.622-3.961 6.933-5.833l24.1-18.817c1.32-.77 3.081-1.101 4.731-.77 1.87.44 3.19 2.2 4.731 3.3z" fill="#fff"/><path d="M101.303 78.247c8.582 4.512 17.275 9.024 25.859 13.536l.109.22h-.879c-9.684-3.632-19.479-7.263-29.162-10.895-1.101-.44-2.42-.22-3.411 0L63.227 92.663h-.33l1.21-.991c10.014-4.952 19.698-10.344 29.602-15.516 2.971-1.21 5.172 1.1 7.594 2.091z" fill="#fff"/><path d="M101.521 85.18l25.75 7.593c.332.22.771.33.992.55l-4.402-.33-27.401-3.632h-3.191l-30.702 4.292c-.11-.11-.331 0-.44-.11.22-.22.66-.55 1.101-.66 9.904-2.751 19.698-5.722 29.602-8.694 3.08-.33 6.051.11 8.691.991z" fill="#fff"/><path fill="#e52e52" d="M65.863 109.834h4.584v4.41h2.917v-4.41h4.584v13.09h-4.584v-4.549h-2.917v4.549h-4.584v-13.09zM94.094 116.414c0 4.201-3.247 6.719-7.24 6.719-3.994 0-7.24-2.518-7.24-6.719 0-4.115 3.264-6.789 7.24-6.789 3.976 0 7.24 2.674 7.24 6.789zm-9.688.068c0 1.494 1.007 2.518 2.448 2.518s2.448-1.023 2.448-2.518c0-1.389-.937-2.553-2.448-2.553-1.51.001-2.448 1.165-2.448 2.553zM94.875 109.834h10v4.252l-2.623-.121v8.959h-4.756v-8.959l-2.621.121v-4.252zM106.057 109.834h8.802v3.576h-4.011v1.25h3.664v3.402h-3.664v1.286h4.15v3.576h-8.941v-13.09zM116.957 109.834h4.758v8.889h3.992v4.201h-8.75v-13.09z"/><path fill="#e52e52" d="M2.834 138.68h7.573l-.17 9.275h.17c.17-.881.652-1.646 1.078-2.412l3.744-6.863h8.48l-6.693 10.408 7.402 10.977h-9.019l-3.687-6.467c-.454-.822-1.134-1.617-1.304-2.496h-.17l.17 8.963H2.834V138.68z" fill="#e52e52"/><path d="M32.36 160.064h-8.225l7.43-21.385h8.593l7.629 21.385h-8.225l-.709-2.666h-5.871l-.622 2.666zm5.133-7.742l-.907-3.771c-.227-.908-.369-1.844-.511-2.752h-.283l-1.418 6.523h3.119zM50.688 152.406l.397.312c1.39 1.078 3.063 1.957 4.85 1.957.766 0 1.985-.312 1.985-1.277 0-.963-1.021-1.049-1.73-1.189l-1.56-.285c-3.034-.537-5.586-2.324-5.586-5.672 0-5.076 4.623-7.912 9.273-7.912 2.439 0 4.68.596 6.778 1.871l-2.099 5.475c-1.333-.908-2.836-1.617-4.509-1.617-.681 0-1.673.256-1.673 1.135 0 .795.964.908 1.56 1.049l1.758.398c3.29.736 5.672 2.494 5.672 6.125 0 5.105-4.651 7.629-9.274 7.629-2.694 0-5.814-.736-8.224-1.957l2.382-6.042zM68.216 138.68h9.841c4.991 0 8.678 2.553 8.678 7.857 0 4.367-2.723 7.09-7.062 7.09h-3.971v6.438h-7.487V138.68h.001zm7.487 9.558h.766c1.361 0 2.836-.227 2.836-1.957 0-1.674-1.588-1.758-2.864-1.758h-.738v3.715zM88.863 138.68h9.387c4.82 0 8.904 2.043 8.904 7.432 0 3.232-1.248 4.594-4.141 5.559v.17c.398.312.879.652 1.305 1.275l4.652 6.949h-8.963l-3.403-6.863h-.142v6.863h-7.6V138.68h.001zm7.6 9.472h.539c1.275 0 2.553-.197 2.553-1.787 0-1.645-1.164-1.842-2.496-1.842h-.596v3.629zM133.221 149.43c0 6.863-5.305 10.975-11.826 10.975-6.523 0-11.828-4.111-11.828-10.975 0-6.723 5.332-11.09 11.828-11.09 6.494 0 11.826 4.367 11.826 11.09zm-15.826.113c0 2.438 1.645 4.111 4 4.111 2.354 0 3.998-1.674 3.998-4.111 0-2.27-1.531-4.17-3.998-4.17-2.469 0-4 1.9-4 4.17zM142.213 138.68l2.693 12.764h.17c.143-1.305.312-2.666.652-3.943l2.27-8.82h5.955l2.922 12.764h.17c.113-1.248.256-2.553.539-3.773l2.156-8.99h8.082l-7.543 21.385H153.5l-2.439-11.629h-.254c-.086 1.107-.143 2.186-.398 3.234l-2.154 8.395h-6.609l-7.486-21.385h8.053v-.002z" fill="#e52e52"/><path d="M176.336 138.68l2.383 5.588h.227c.227-.682.426-1.361.709-2.014l1.531-3.574h8.736l-7.318 12.168v9.217h-7.6v-9.217l-7.459-12.168h8.791z" fill="#e52e52"/></g></svg>                   
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quas rem. Officiis illum eum laborum excepturi? Voluptas nihil dicta in aspernatur veritatis? Laboriosam dignissimos corporis aliquid sapiente nobis consequuntur vitae.</p>
        </div>
        <div class="col-xxl-4 col-xl-4 col-sm-4 col-md-6 col-12">
            <ul>
                <li><h3>Link</h3></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Our offers</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Connexion</a></li>
                <li><button class="btn">Book</button></li>

            </ul>
        </div>
        <div class="col-xxl-4 col-xl-4 col-sm-4 col-md-6 col-12">
        <ul>
                <li><h3>Contact</h3></li>
                <li>faissalabr@gmail.com</li>
                <li>+54365234352</li>
                <li>Ait amira , Chtouka ait baha</li>
            </ul>
        </div>

        </div>
        <div class="coiecl_media__reclamation">
        <div class="row">
        <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-12 col-12">
        <div class="follow_us">
                        <h3>Follow us</h3>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
	 viewBox="0 0 382 382" style="enable-background:new 0 0 382 382;" xml:space="preserve">
<path style="fill:#0077B7;" d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
	C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
	H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
	c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
	s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
	c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
	c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
	c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
	L341.91,330.654L341.91,330.654z"/>
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
<svg enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)" gradientUnits="userSpaceOnUse" x1="-37.106" x2="-26.555" y1="-72.705" y2="-84.047"><stop offset="0" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></linearGradient><path d="m1.5 1.633c-1.886 1.959-1.5 4.04-1.5 10.362 0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091-.559-.081-.671-.105-3.539-.11-10.173.005-12.403-.448-14.41 1.633z" fill="url(#SVGID_1_)"/><path d="m11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471c-.587 0-1.063.476-1.063 1.063s.476 1.063 1.063 1.063 1.063-.476 1.063-1.063-.476-1.063-1.063-1.063zm-4.73 1.243c-2.513 0-4.55 2.038-4.55 4.551s2.037 4.55 4.55 4.55 4.549-2.037 4.549-4.55-2.036-4.551-4.549-4.551zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z" fill="#fff"/></svg>
<svg height="40px" viewBox="0 0 512 512.00038" width="40px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="169.9940010834" x2="299.4934135904" y1="71.98622701" y2="349.0548448864"><stop offset="0" stop-color="#00c3ff"/><stop offset="1" stop-color="#00b0ed"/></linearGradient><linearGradient id="b"><stop offset="0" stop-color="#00b0ed" stop-opacity="0"/><stop offset="1" stop-color="#00a2ce"/></linearGradient><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="364.2825237824" x2="-379.5864327114" xlink:href="#b" y1="314.0868361356" y2="-84.9521808166"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="256.0003" x2="256.0003" xlink:href="#b" y1="437.383215389" y2="504.4720097064"/><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="489.4209995136" x2="239.2937328214" xlink:href="#b" y1="482.0724016502" y2="231.945134958"/><path d="m420.421875 503.234375c-109.503906 11.6875-219.339844 11.6875-328.84375 0-43.664063-4.660156-78.152344-39.148437-82.8125-82.816406-11.6875-109.503907-11.6875-219.335938 0-328.839844 4.660156-43.664063 39.148437-78.152344 82.8125-82.8125 109.503906-11.6875 219.335937-11.6875 328.839844 0 43.667969 4.660156 78.15625 39.148437 82.816406 82.8125 11.6875 109.503906 11.6875 219.335937 0 328.839844-4.660156 43.667969-39.144531 78.15625-82.8125 82.816406zm0 0" fill="url(#a)"/><path d="m475.386719 110.097656c-4.132813-38.746094-34.734375-69.351562-73.484375-73.488281-97.171875-10.367187-194.632813-10.367187-291.804688 0-38.746094 4.136719-69.351562 34.742187-73.488281 73.488281-10.367187 97.171875-10.367187 194.632813 0 291.800782 4.136719 38.75 34.742187 69.355468 73.488281 73.488281 97.171875 10.371093 194.632813 10.371093 291.800782 0 38.75-4.132813 69.355468-34.738281 73.488281-73.488281 10.371093-97.167969 10.371093-194.628907 0-291.800782zm0 0" fill="url(#c)"/><path d="m7.671875 409.804688c.351563 3.539062.714844 7.078124 1.09375 10.617187 4.660156 43.664063 39.148437 78.152344 82.816406 82.8125 109.503907 11.6875 219.335938 11.6875 328.839844 0 43.667969-4.660156 78.152344-39.148437 82.8125-82.8125.378906-3.539063.742187-7.078125 1.097656-10.617187zm0 0" fill="url(#d)"/><path d="m511.890625 238.007812-106.277344-106.273437c-11.910156 6.808594-22.40625 10.585937-30.3125 12.679687-4.445312 1.191407-8.074219 1.839844-10.683593 2.195313-11.984376-12.285156-28.71875-19.914063-47.242188-19.914063-36.445312 0-65.996094 29.546876-65.996094 66 0 1.316407.035156 2.617188.121094 3.914063.175781 3.160156.578125 6.265625 1.199219 9.285156-15.214844-.226562-64.667969-4.289062-111.832031-44.71875-.003907 0-.003907-.003906-.003907-.003906h-.003906l-22.242187-22.246094s-26.09375 45.542969 12.269531 80.101563c1.683593 1.878906 3.535156 3.734375 5.5625 5.558594.160156.179687.328125.355468.488281.535156-5.035156-.339844-20.179688-1.847656-28.945312-8.039063 0 0-1.761719 27.835938 21.429687 48.328125l18.726563 18.886719c-5.703126.472656-12.011719.359375-16.398438-1.5625 0 0 3.882812 16.488281 18.890625 29.683594l26.234375 26.371093c-15.738281 9.167969-43.289062 20.640626-79.554688 17.710938l159.144532 155.5c54.679687-.015625 109.359375-2.9375 163.957031-8.765625 43.667969-4.660156 78.15625-39.148437 82.816406-82.8125 6.480469-60.742187 9.359375-121.585937 8.652344-182.414063zm0 0" fill="url(#e)"/><path d="m414.683594 157.367188c-11.328125 5.925781-28.390625 8.664062-34.046875 9.453124-.046875-.273437-.09375-.535156-.140625-.796874 19.230468-11.894532 25.117187-34.289063 25.117187-34.289063-11.910156 6.808594-22.40625 10.585937-30.3125 12.679687-4.445312 1.191407-8.074219 1.835938-10.683593 2.195313-11.984376-12.289063-28.71875-19.914063-47.242188-19.914063-36.445312 0-65.996094 29.542969-65.996094 66 0 1.3125.035156 2.617188.121094 3.910157.175781 3.160156.578125 6.265625 1.199219 9.285156-17.640625-.261719-81.316407-5.671875-134.082031-66.964844 0 0-29.382813 51.265625 20.015624 86.285157 0 0-20.015624-.625-30.640624-8.128907 0 0-3.125 49.398438 53.769531 65.023438 0 0-20.003907 5.007812-30.015625.628906 0 0 10.007812 42.515625 60.027344 45.648437 0 0-35.875 32.84375-94.457032 28.117188 28.8125 18.242188 62.972656 28.800781 99.597656 28.800781 102.980469 0 186.464844-83.480469 186.464844-186.460937 0-1.285156-.011718-2.570313-.039062-3.855469.027344-.761719.039062-1.519531.039062-2.289063 0-.535156-.011718-1.070312-.019531-1.605468 19.039063-12.6875 31.324219-33.722656 31.324219-33.722656zm0 0" fill="#fff"/></svg>
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#1976D2;" d="M448,0H64C28.704,0,0,28.704,0,64v384c0,35.296,28.704,64,64,64h384c35.296,0,64-28.704,64-64V64
	C512,28.704,483.296,0,448,0z"/>
<path style="fill:#FAFAFA;" d="M432,256h-80v-64c0-17.664,14.336-16,32-16h32V96h-64l0,0c-53.024,0-96,42.976-96,96v64h-64v80h64
	v176h96V336h48L432,256z"/>
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
   
                </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-12 col-12">
            <div class="reclamation_policy_faq">
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Reclamation</a></li>
                </ul>
            </div>

        </div>
        </div>

        </div>
    </div>
</footer>
<section class="copyright">
    <p>© Copyright 2020 DisputeWizard.com, All Rights Reserved.</p>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../assets/js/navbar.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
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


    <div class="choix">
          <label style=" margin:20px 0px; display: block;">Selcet Your Room</label>
          <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-112 col-12">
                     <div class="choix_chambre">
                         <span style="display:block">*</span>
                            <select id="options" name="chambre_0">
                                <option value="Select an option" disabled selected>Select an option</option>
                                <option value="chambre_Simple">Chambre simple</option>
                                <option value="chambre_Double">Chambre Double</option>
                                <option value="Appartement">Appartement</option>
                                <option value="bungalow">bungalow</option>
                            </select>
                     </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-112 col-12">
                    <div class="second_choix_chambre">
                        <span style="display:block">*</span>
                        <select id="choix_option" name="type_chambre_0">
                            <option value="Select an option" disabled  selected>Type Chambre</option>
                        </select>

                    </div>
                </div>
          </div>




          <div class="third_choix_chambre" style="display: none;">
            <span style="display:block">*</span>
            <select id="choix_chambre_double"  name="type_chambre_double_0">
                <option value="Select an option" disabled  selected>Please select an option</option>
            </select>

          </div>



              <div class="pension_choix"  style="border-bottom:1px solid black">
                    <label style=" margin:20px 0px; display: block;">Selcet Your pension</label>
                        <span style="display:block">*</span>
                        <select class="options_pension" name="pension_0" value="Select an option">
                            <option value="Select an option" disabled selected>Select an option</option>
                            <option value="complete">Complete</option>
                            <option value="Demi">demi</option>
                            <option value="sans">sans</option>
                        </select>
                        <div class="pesion_choix" style="display:none;" >
                            <span style="display:block">*</span>
                            <select class="choices_demi_pension" id="choices_demi_pension" name="pension_demi_type_0">
                                <option value="Select an option" disabled  selected>Please select an option</option>
                            </select>
                        </div>


            </div>
    </div> 
</div>



<div class="add_moins">
        <a  id="add_chambre" class="btn">+</a>
      <a  id="moins_chambre" class="btn">-</a>
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
            <div class="zone_choix_child">
            </div>


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
        <div class="zone_choix_child">
        </div>



    </div>

</div>





      <div class="date">
          <div class="row">
                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-112 col-12">
                    <span style="display:block">*</span>
                    <input type="date" name="start_date" id="start_date" class="date_start" value="jj-mm-aaaa">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-112 col-12">
                    <span style="display:block">*</span>
                    <input type="date" name="end_date" id="end_date"  value="jj-mm-aaaa">
                </div>
          </div>
      </div>

<div class="chickbox_input">
    <input type="checkbox" name="verified" id="virified">
      <label for="">i verified all choix</label>
</div>





       <button class="validation" type="submit" name="valide_reserve" style="display: block;" disabled>c'est Partie</button>
    </form>
</div>

<div class="blob" >

</div>
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

<?php
include '../includes/footer.php';
include '../includes/connexion.php';
include '../includes/reclamation.php';
?>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/navbar.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/popup.js"></script>



<!-- popup if reserve without login -->

<?php
    if(!empty($_SESSION["not_login"])){
?>
    <script>
        error("You are not login please you should to login first")
    </script>
<?php
        unset($_SESSION["not_login"]);
    }
?>

<!-- popup if reserve with empty some field -->


<?php
    if(!empty($_SESSION["some_fiald_empty"] )){
?>
    <script>
        error("Some filied is emty please check all field  is full")
    </script>
<?php
        unset($_SESSION["some_fiald_empty"] );
    }
?>


<!-- pop up if reclamation sent -->

<?php
    if(!empty($_SESSION['reclamation_sent'])){
?>
    <script>
        success("Reclamation success");
    </script>
<?php
        unset($_SESSION['reclamation_sent']);
    }
?>



<!-- pop up if reclamation Not sent -->

<?php
    if(!empty($_SESSION['reclamation_not_sent'])){
?>
    <script>
        error("Reclamation not send please check if all field is Full");
    </script>
<?php
        unset($_SESSION['reclamation_not_sent']);
    }
?>



<!-- pop up if inscription regix not valide -->

<?php
    if(!empty($_SESSION["some_filed_empty"])){
?>
    <script>
        error("Some field is empty please check all field  is full")
    </script>
<?php
        unset($_SESSION["some_filed_empty"]);
    }
?>

<!-- pop up if inscription email existing-->

<?php
    if(!empty($_SESSION["Email_exist"] )){
?>
    <script>
        error("Email exist please choose another email")
    </script>
<?php
        unset($_SESSION["Email_exist"] );
    }
?>




<!-- pop up if login not exist-->

<?php
    if(!empty($_SESSION["Email_not_exist"] )){
?>
    <script>
        error("Email or password not exist please repeat again")
    </script>
<?php
        unset($_SESSION["Email_not_exist"] );
    }
?>

<!-- pop up if login field emty -->

<?php
    if(!empty($_SESSION["empty_field"] )){
?>
    <script>
        error("Some field is empty please check all field  is full")
    </script>
<?php
        unset($_SESSION["empty_field"]);
    }
?>

</body>
</html>
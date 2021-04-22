///////////////  chambre choix script
var type_chambre = {
    'chambre_Simple': ['chambre Simple', 30],
    'chambre_Double': ['chambre Double', 70],
    'Appartement': ['Appartement', 130],
    'bungalow': ['bungalow', 190],

};
var type_chambre = {
    'chambre_Simple': ['Vue interieur', 'Vue exterieur'],
    'chambre_Double': ['lit double', '2 lit simple'],
    'Appartement': ['Vue interieur', 'Vue exterieur'],
    'bungalow': ['Vue interieur', 'Vue exterieur'],

};
var type_chambre_double = {
    'lit double': ['Vue interieur', 'Vue exterieur'],
    '2 lit simple': ['Vue interieur']
};

function choix_chambre() {
    var all_chambre = document.querySelectorAll("#choix");
    all_chambre.forEach(element => {
        var options = element.querySelector("#options")

        options.addEventListener('change', () => {
            var selectValue = options.value;
            $('#img_chmabre').attr('src', '../assets/img/' + selectValue + '.jpg');
            var choix_option = element.querySelector("#choix_option")
            choix_option.innerHTML = `<option value='Select an option' disabled selected>Select an option</option>`
            for (i = 0; i < type_chambre[selectValue].length; i++) {
                choix_option.innerHTML += `<option value='${type_chambre[selectValue][i]}'> ${type_chambre[selectValue][i]} </option>`
            }

            var choix_option_double = element.querySelector("#choix_chambre_double")
            if (selectValue == "chambre_Double") {
                choix_option.addEventListener("change", () => {
                    choix_options = choix_option.value
                    choix_option_double.innerHTML = `<option value='Select an option' disabled selected>Select an option</option>`
                    console.log(choix_options)
                    for (i = 0; i < type_chambre_double[choix_options].length; i++) {
                        console.log(i);
                        choix_option_double.innerHTML += `<option value='${type_chambre_double[choix_options][i]}'> ${type_chambre_double[choix_options][i]} </option>`

                    }
                })
                choix_option_double.style = "display:block;"
            } else {
                choix_option_double.style = 'display:none;';
            }


        })
    })
}

choix_chambre();

$("#add_chambre").on('click', function() {
    $("#all_choix").append(` 
           <div id="choix">
                <label style=" margin:20px 0px; display: block;">Selcet Your Chambre</label>
                  <select id="options" name="chambre">
                      <option value="Select an option " disabled selected>Select an option</option>
                      <option value="chambre_Simple">Chambre simple</option>
                      <option value="chambre_Double">Chambre Double</option>
                      <option value="Appartement">Appartement</option>
                      <option value="bungalow">bungalow</option>

                  </select>

                  <select id="choix_option" name="type_chambre">
                      <option value="Select an option 1" disabled  selected>Type Chambre</option>
                    </select>

                    <select id="choix_chambre_double" style="display: none;" name="type_chambre_double">
                      <option value="Select an option" disabled  selected>Please select an option</option>
                    </select>
          </div>`)
    choix_chambre();

})

$("#moins_chambre").on('click', function() {
    var all_choix = document.querySelectorAll('#choix').length
    if (all_choix > 1) {
        $("#all_choix").children().last().remove();
    }
})


$('#valide_chambre').on('click', () => {



})








///////////////  enfant choix chambre

var choix_bebe = ["with lit", "without lit"]
var choix_adulte = ["add chambre simple", "add lit"]
$('#bebe').on('change', function() {
    var bebe = $(this).val();
    if (bebe >= 1) {
        $('#choixes_bebe').show();
    } else {
        $('#choixes_bebe').hide();
    }
})
$('#adulte').on('change', function() {
    var adulte = $(this).val();
    if (adulte >= 1) {
        $('#choixes_adulte').show();
    } else if (adulte == 0) {
        $('#choixes_adulte').hide();
    }
})

///// pension choix script

var demi_type_pension = ["Petit dej/dej", "Petit dej/din"];
$('#options_pension').on('change', function() {
    var select_pension = $(this).val();
    if (select_pension == "Demi") {
        $('#choices_demi_pension').show()
        $('#choices_demi_pension').empty();
        $('#choices_demi_pension').append("<option value='Select an option' disabled  selected> Select an option </option>");
        for (i = 0; i < demi_type_pension.length; i++) {
            $('#choices_demi_pension').append("<option value='" + demi_type_pension[i] + "'>" + demi_type_pension[i] + "</option>");
        }
    } else {
        $('#choices_demi_pension').hide()
    }
});
///////////////  chambre choix script

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
    var all_chambre = document.querySelectorAll(".choix");
    all_chambre.forEach(element => {
        var options = element.querySelector("#options")

        options.addEventListener('change', () => {
            var selectValue = options.value;
            var choix_option = element.querySelector("#choix_option")
            choix_option.innerHTML = `<option value='Select an option' disabled selected>Select an option</option>`
            for (i = 0; i < type_chambre[selectValue].length; i++) {
                choix_option.innerHTML += `<option value='${type_chambre[selectValue][i]}'> ${type_chambre[selectValue][i]} </option>`
            }

            var choix_option_double = element.querySelector("#choix_chambre_double")
            var third_choix_chambre = element.querySelector('.third_choix_chambre');
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
                third_choix_chambre.style = "display:block;"
            } else {
                third_choix_chambre.style = 'display:none;';
            }


        })
    })
}



const pension = () => {
    var pension = document.querySelectorAll(".pension_choix")
    var demi_type_pension = ["Petit dej/dej", "Petit dej/din"];

    pension.forEach(element => {
        var opstions_pension = element.querySelector(".options_pension");
        var choices_demi_pension = element.querySelector(".choices_demi_pension");
        var pesion_choix = element.querySelector(".pesion_choix");
        opstions_pension.addEventListener("change", () => {

            if (opstions_pension.value == "Demi") {
                pesion_choix.style = "display: initial;";
                choices_demi_pension.innerHTML = "";
                choices_demi_pension.innerHTML += `<option value="Select an option" disabled selected>Select an option</option>`
                for (i = 0; i < demi_type_pension.length; i++) {
                    let div = `<option value='${demi_type_pension[i]}'>${demi_type_pension[i]}</option>`
                    choices_demi_pension.innerHTML += div
                }
            } else {
                pesion_choix.style = "display:none";
            }
        })
    })
}





pension();
choix_chambre();
new_choix = 1;
var number_chambre = document.querySelector("#number_chambre");
console.log(number_chambre);
$("#add_chambre").on('click', function() {
    $("#all_choix").append(` 
            <div class="choix">
            <label style=" margin:20px 0px; display: block;">Selcet Your Room ${new_choix +1}</label>
            <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-112 col-12">
                       <div class="choix_chambre">
                           <span style="display:block">*</span>
                              <select id="options" name="chambre_${new_choix}">
                                  <option value="Select an option " disabled selected>Select an option</option>
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
                          <select id="choix_option" name="type_chambre_${new_choix}">
                              <option value="Select an option 1" disabled  selected>Type Chambre</option>
                          </select>
  
                      </div>
                  </div>
            </div>
  
  
  
  
            <div class="third_choix_chambre" style="display: none;">
              <span style="display:block">*</span>
              <select id="choix_chambre_double"  name="type_chambre_double_${new_choix}">
                  <option value="Select an option" disabled  selected>Please select an option</option>
              </select>
  
            </div>
  
  
  
                <div class="pension_choix"  style="border-bottom:1px solid black">
                      <label style=" margin:20px 0px; display: block;">Selcet Your pension</label>
                         <span style="display:block">*</span>
                          <select class="options_pension" name="pension_${new_choix}">
                              <option value="Select an option" disabled selected>Select an option</option>
                              <option value="complete">Complete</option>
                              <option value="Demi">demi</option>
                              <option value="sans">sans</option>
                          </select>
                          <div class="pesion_choix" style="display:none;" >
                          <span style="display:block">*</span>
                                <select class="choices_demi_pension" id="choices_demi_pension" name="pension_demi_type_${new_choix}">
                              <option value="Select an option" disabled  selected>Please select an option</option>
                          </select>
                      </div>
              </div>
      </div> 
          
          `)

    choix_chambre();
    new_choix++;
    number_chambre.value = new_choix;
    console.log(number_chambre.value)
    document.querySelector(".validation").disabled = true;





    //////////////// pension
    pension();



})

$("#moins_chambre").on('click', function() {
    var all_choix = document.querySelectorAll('.choix').length
    if (all_choix > 1) {
        $("#all_choix").children().last().remove();
        new_choix--;
        number_chambre.value = new_choix;
        console.log(number_chambre.value)

    }
})













/////////////// child script




var all_child = document.querySelectorAll(".child_zone")

all_child.forEach(element => {
    var plus = element.querySelector("#plus");
    var child = element.querySelector(".child");
    var choix = element.querySelector(".choix_zone")
    var moins = element.querySelector("#moins");
    var zone_choix_child = element.querySelector(".zone_choix_child");
    var name = element.querySelector("label").innerHTML;


    var i = 0;

    plus.addEventListener("click", () => {
        i++;
        child.value = i;
        if (name == "Adulte(+14years)") {

            zone_choix_child.innerHTML += `
                        <div class='choix_zone'>
                            <label>Adulte ${i}</label>
                            <select id='choixes_bebe' name='adulte_choix_${i}'>
                                <option value='Select an option ' disabled  selected >options</option>
                                <option value='Add Lit'>Add Lit</option>
                                <option value='Add Chambre'>add Chambre</option>

                            </select>
                </div>`;
        } else if (name == "Bebe(-2years)") {

            zone_choix_child.innerHTML += `
                <div class="choix_zone">
                    <label>Bebe ${i}</label>
                    <select id="choixes_bebe" name="bebe_choix_${i}">
                        <option value="Select an option " disabled  selected >options</option>
                        <option value="Add lit">Add Lit</option>
                        <option value="Without lit">Without lit</option>
                    </select>
                </div>`;
        }
    })
    moins.addEventListener("click", () => {
        if (i >= 1) {
            i--;
            child.value = i;
            zone_choix_child.removeChild(zone_choix_child.lastElementChild);
        }

    })
})
moins.addEventListener("click", () => {
    if (i >= 1) {
        i--;
        child.value = i;
        zone_choix_child.removeChild(zone_choix_child.lastElementChild);
    }

})



/////////// validation form if not empty

var virified = document.querySelector("#virified");

virified.addEventListener('click', () => {

    var choix = document.querySelectorAll('.choix');
    let valide = true;

    choix.forEach(element => {

        let chambre_choix = element.querySelector("#options").value
        let second_choix_chambre = element.querySelector("#choix_option").value
        let choix_chambre_double = element.querySelector("#choix_chambre_double").value
        let options_pension = element.querySelector(".options_pension").value
        let choices_demi_pension = element.querySelector(".choices_demi_pension ").value;


        let arr = [chambre_choix, second_choix_chambre, options_pension];


        for (i = 0; i < arr.length; i++) {

            if (arr[i] == "Select an option") {
                valide = false
            }
        }

        if (second_choix_chambre == "chambre_Double") {
            if (choix_chambre_double == "Select an option") {
                valide = false
            }
        }
        if (options_pension == "Demi") {
            if (choices_demi_pension == "Select an option") {
                valide = false
            }
        }
        console.log(valide);
    })
    var btn_reserve = document.querySelector(".validation");
    if (valide == true) {
        btn_reserve.style = "cursor: pointer ;"
        btn_reserve.disabled = false;
    } else {
        btn_reserve.disabled = true;
        btn_reserve.style = "cursor: no-drop ;"

    }

})
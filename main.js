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



        ///////////////  chambre choix script
        var type_chambre = {
            'Simple': ['Vue interieur', 'Vue exterieur'],
            'Double': ['lit double', '2 lit simple'],
            'Appartement': ['Vue interieur', 'Vue exterieur'],
            'bungalow': ['Vue interieur', 'Vue exterieur'],

        };
        var type_chambre_double = {
            'lit double': ['Vue interieur', 'Vue exterieur'],
            '2 lit simple': ['Vue interieur']
        };

        $('#options').on('change', function() {
            var selectValue = $(this).val();

            $('#img_chmabre').attr('src', 'img/' + selectValue + '.jpg');



            $('#choices').empty();
            $('#choices').append("<option value='Select an option' disabled  selected> Select an option </option>");

            for (i = 0; i < type_chambre[selectValue].length; i++) {
                $('#choices').append("<option value='" + type_chambre[selectValue][i] + "'>" + type_chambre[selectValue][i] + "</option>");
            }
            if (selectValue == "Double") {
                $('#choices_chambre_double').show();
                $('#choices').on("change", function() {
                    var selectTypeValue = $(this).val()
                    $('#choices_chambre_double').empty();
                    $('#choices_chambre_double').append("<option value='Select an option' disabled  selected> Select an option </option>");

                    for (i = 0; i < type_chambre_double[selectTypeValue].length; i++) {
                        $('#choices_chambre_double').append("<option value='" + type_chambre_double[selectTypeValue][i] + "'>" + type_chambre_double[selectTypeValue][i] + "</option>");
                    }
                })


            } else {
                $('#choices_chambre_double').hide();
                console.log(selectValue)

            }
        });


        ///////////////  enfant choix chambre
        var choix_bebe = ["with lit", "without lit"]
        var choix_adulte = ["add chambre simple", "wadd lit"]
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
$(function () {

    $('#btnToggle').on('click', function () {

        // Toggle la classe "allumee" sur la lampe
        $('.lampe').toggleClass('allumee');

        // Vérifier si la lampe a la classe "allumee"
        if ($('.lampe').hasClass('allumee')) {
            // Lampe allumée
            $(this).text('Éteindre');
            $('#status').html('État : <strong style="color: #ffeb3b;">Allumée</strong>');
        } else {
            // Lampe éteinte
            $(this).text('Allumer');
            $('#status').html('État : <strong style="color: #adb5bd;">Éteinte</strong>');
        }
    });

});
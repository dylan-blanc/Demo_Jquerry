$(function () {

    // Au clic sur le bouton
    $('#btnChanger').on('click', function () {

        // Sélectionner par ID et changer le texte
        $('#titre').text('Titre modifié avec jQuery !');

        // Sélectionner par classe (TOUS les éléments)
        $('.message').text('Texte changé pour TOUS les .message');

        // Modifier avec HTML (balises interprétées)
        $('#info').html('<strong>Info modifiée</strong> avec <em>HTML</em>');

        // Changer le texte du bouton lui-même
        $(this).text(' Textes changés !');
    });

});
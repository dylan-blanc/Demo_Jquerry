$(function () {

    // Attacher événement sur TOUS les boutons
    $('button').on('click', function () {

        // Récupérer la couleur depuis l'attribut data-couleur
        const couleur = $(this).data('couleur');

        // Récupérer le texte du bouton
        const texte = $(this).text();

        // Afficher le résultat
        $('#resultat').html(`
            <strong>Vous avez cliqué sur :</strong> ${texte}<br>
            <strong>Couleur :</strong> ${couleur}
        `);

        // Afficher avec effet
        $('#resultat').fadeIn();
    });

});
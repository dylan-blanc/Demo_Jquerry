$(function () {

    $('#formulaire').on('submit', function (e) {
        e.preventDefault(); // Empêcher le rechargement de la page

        // Cacher tous les messages d'erreur au début
        $('.message-erreur').hide();
        $('input').removeClass('erreur');

        let erreurs = 0;

        // Validation du nom
        const nom = $('#nom').val().trim();
        if (nom === '') {
            $('#nom').addClass('erreur');
            $('#erreur-nom').show();
            erreurs++;
        }

        // Validation de l'email (simple)
        const email = $('#email').val().trim();
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '' || !regexEmail.test(email)) {
            $('#email').addClass('erreur');
            $('#erreur-email').show();
            erreurs++;
        }

        // Si pas d'erreurs, afficher succès
        if (erreurs === 0) {
            $('#resultat').html(`
                <strong> Inscription réussie !</strong><br>
                Nom : ${nom}<br>
                Email : ${email}
            `).fadeIn();

            // Réinitialiser le formulaire
            $('#formulaire')[0].reset();
        }
    });

});
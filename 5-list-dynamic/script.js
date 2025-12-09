$(function () {

    // Ajouter une tâche
    $('#btnAjouter').on('click', function () {
        ajouterTache();
    });

    // Ajouter aussi avec Entrée
    $('#tache').on('keypress', function (e) {
        if (e.which === 13) { // Touche Entrée
            ajouterTache();
        }
    });

    // Fonction pour ajouter une tâche
    function ajouterTache() {
        const texte = $('#tache').val().trim();

        if (texte !== '') {
            // Créer le HTML de la tâche
            const tacheHTML = `
                <li>
                    <span>${texte}</span>
                    <button class="btnSupprimer">Supprimer</button>
                </li>
            `;

            // Ajouter à la liste avec effet
            $('#liste').append(tacheHTML);
            $('#liste li:last-child').hide().fadeIn();

            // Vider l'input
            $('#tache').val('').focus();
        }
    }

    // Supprimer une tâche (délégation d'événement)
    $('#liste').on('click', '.btnSupprimer', function () {
        $(this).parent().fadeOut(function () {
            $(this).remove();
        });
    });

});
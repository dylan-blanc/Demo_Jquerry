$(function () {

    // === EFFETS FADE ===
    $('#fadeOut').on('click', function () {
        $('#boite1').fadeOut(1000); // 1 seconde
    });

    $('#fadeIn').on('click', function () {
        $('#boite1').fadeIn(1000);
    });

    $('#fadeToggle').on('click', function () {
        $('#boite1').fadeToggle(1000);
    });

    // === EFFETS SLIDE ===
    $('#slideUp').on('click', function () {
        $('#boite2').slideUp(1000);
    });

    $('#slideDown').on('click', function () {
        $('#boite2').slideDown(1000);
    });

    $('#slideToggle').on('click', function () {
        $('#boite2').slideToggle(1000);
    });

    // === ANIMATION PERSONNALISÉE ===
    $('#animate').on('click', function () {
        $('#boite3').animate({
            opacity: 0.3,
            fontSize: '30px',
            marginLeft: '200px'
        }, 1000, function () {
            // Callback après animation
            $(this).animate({
                opacity: 1,
                fontSize: '20px',
                marginLeft: '0px'
            }, 1000);
        });
    });

});
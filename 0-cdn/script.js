$(document).ready(function () {
    // OU version courte : $(function() { ... });

    // Test : changer le texte si jQuery fonctionne
    $('#test').text(' jQuery fonctionne parfaitement !');
    $('#test').css('color', 'green');

    console.log('jQuery version:', $.fn.jquery);
});
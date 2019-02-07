(function($) {
    $(document).on( 'click', '.next-button', function( e ) {
        e.preventDefault();
        /* Initialiser l'objet xhttp */
        var xhttp = new XMLHttpRequest();

        let id = $('.id-container').text();
        var idArray = [];
        idArray.push(id);
        //let backgroundColor = $('.fact-menu .fact-menu-element').css('backgroundColor');

        //vérifier si XMLHttpRequest() est interprété par tous les navigateurs cf; activeXObject()...
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                /* Afficher le contenu du traitement php dans une div */
                document.getElementById("ajax-container").innerHTML = this.responseText;
            }
        };
        /* Paramétrer le fichier de traitement php et lui passer des variables*/
        xhttp.open("GET", "wp-content/themes/music_fact/traitement-ajax.php?id="+id, true);
        xhttp.send();
    })
})(jQuery);
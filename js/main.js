jQuery(document).ready(function ($) {
    //-------------------------
    // HEADER
    //-------------------------

    window.onresize = function (event) {
        // Il est nécessaire de recharger la page, lorsqu'on teste le responsive et qu'on passe au-dessus ou en dessous d'une largeur de 1024px. Sinon le menu burger ne fonctionne pas !
        // Actualisation automatique de la page lorsque la taille de la fenêtre change 
        document.location.reload(true);
    }

    if (window.matchMedia("(max-width: 1024px)").matches) {

        // Créer du menu burger, en ajoutant une balise <menu></menu> autour de la balise <nav></nav>
        $("#header nav").wrapAll("<menu></menu>");
        //Déplace le place btn#close comme premier enfant de <menu></menu>> 
        $("#close").prependTo("#header menu");
        //Déplace le place .social-media comme dernier enfant de <menu></menu>> 
        $("#header .social-media").insertAfter("#header menu nav");

        // état à l'ouverture du menu
        $("#open").click(function () {
            $("#header menu").addClass("open")
        });

        // état à la fermeture du menu
        $("#close, #header ul li a").click(function () {
            $("#header menu").removeClass("open");
        });
    }

    //-------------------------
    // PROJETS Filtres
    //-------------------------
    if ($('.filter-buttons').length) {
        const filterButtons = document.querySelector("#filter-btns").children;
        const items = document.querySelector(".portfolio-gallery").children;

        for (let i = 0; i < filterButtons.length; i++) {
            filterButtons[i].addEventListener("click", function () {
                for (let j = 0; j < filterButtons.length; j++) {
                    filterButtons[j].classList.remove("active")
                }
                this.classList.add("active");
                const target = this.getAttribute("data-target")

                for (let k = 0; k < items.length; k++) {
                    // Items DISABLED
                    items[k].style.opacity = ".5";
                    items[k].style.pointerEvents = "none";
                    items[k].style.background = "lightgrey";
                    items[k].style.borderTop = "2px solid black";;

                    if (target == items[k].getAttribute("data-id")) {
                        // Items ACTIF
                        items[k].style.opacity = "1";
                        items[k].style.pointerEvents = "auto";
                        items[k].style.background = "black";
                        items[k].style.borderTop = "2px solid white";
                    }
                    if (target == "all") {
                        items[k].style.opacity = "1";
                        items[k].style.pointerEvents = "auto";
                        items[k].style.background = "white";
                        items[k].style.borderTop = "2px solid black";
                    }
                }
            })
        }
    }
});
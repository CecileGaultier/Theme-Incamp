var carte;
function initCarte() {
    //définir la position de la carte
    var position = new google.maps.LatLng(47.495373, 6.803898);

    //options de la carte
    var options = {
        center: position,          //position de centrage de la carte
        zoom : 18,                //Zoom -> taille quartier
        mapTypeId: 'roadmap',    //Type de carte
        style: [
            {
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            }
        ]//style de la carte
    };

    //Instanciation de la carte
    carte = new google.maps.Map(
        document.querySelector("#carte"),
        options
    );




    //Marqueur du parking
    //Position du marqueur
    var posParking = new google.maps.LatLng(47.496781, 6.804679);

    //Le marker
    var marqueurParking = new google.maps.Marker({

        position : posParking,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/parking.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });

    //Marqueur du velo 1
    //Position du marqueur
    var posVelo1 = new google.maps.LatLng(47.495904, 6.804346);

    //Le marker
    var marqueurVelo1 = new google.maps.Marker({

        position : posVelo1,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/Groupe_288.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });

    //Marqueur du velo 2
    //Position du marqueur
    var posVelo2 = new google.maps.LatLng(47.495555, 6.803466);

    //Le marker
    var marqueurVelo2 = new google.maps.Marker({

        position : posVelo2,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/velo-map.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });

    //Marqueur du velo 3
    //Position du marqueur
    var posVelo3 = new google.maps.LatLng(47.495925, 6.805270);

    //Le marker
    var marqueurVelo3 = new google.maps.Marker({

        position : posVelo3,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/velo-map.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });

    //Marqueur du velo 4
    //Position du marqueur
    var posVelo4 = new google.maps.LatLng(47.495012, 6.805776);

    //Le marker
    var marqueurVelo4 = new google.maps.Marker({

        position : posVelo4,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/velo-map.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });

    //Marqueur du velo 5
    //Position du marqueur
    var posVelo5 = new google.maps.LatLng(47.494950, 6.803426);

    //Le marker
    var marqueurVelo5 = new google.maps.Marker({

        position : posVelo5,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/velo-map.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });


    //Marqueur du jardin 1
    //Position du marqueur
    var posJardin1 = new google.maps.LatLng(47.495372, 6.804997);

    //Le marker
    var marqueurJardin1 = new google.maps.Marker({

        position : posJardin1,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/jardins.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });


    //Marqueur du jardin 2
    //Position du marqueur
    var posJardin2 = new google.maps.LatLng(47.494579, 6.803869);

    //Le marker
    var marqueurJardin2 = new google.maps.Marker({

        position : posJardin2,      //Position du marker
        map : carte,             //carte d'affichage
        icon: {
            url: "https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/jardins.svg",
            scaledSize: new google.maps.Size(64, 64)

        }

    });



    //Instanciation d'une Info-bulle / InfoWindow
    var infoparking = new google.maps.InfoWindow();
    //Charger le contenu
    var contenu2 =
        "<div><h4 class='h4'>Borne de rechargement</h4>"
        +"<p>Une borne de rechargement est disponible <br> pour recharger deux véhicules électriques <br>simultanément</p>"
        +"<a href='https://incamp.cecile-gaultier.fr/le-covoiturage-et-le-parking-connecte/'><img src='https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/DSC_0407-scaled.jpg' alt='Image parking' class='carte-img'></a>"
        +"</div>";
    infoparking.setContent(contenu2);

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le marqueur parking
    google.maps.event.addListener( marqueurParking, 'click', function () {
            //ouverture info bulle
            infoparking.open(carte, marqueurParking);
        }
    );



    //Instanciation d'une Info-bulle / InfoWindow
    var infovelo1 = new google.maps.InfoWindow();
    //Charger le contenu

    var contenu3a =
        "<div><h4 class='h4'>Station connectée</h4>"
        +"<p>Cette station contient des boxs avec recharge <br>électrique pour ranger et recharger vos vélos <br>électriques</p>"
        +"<a href='https://incamp.cecile-gaultier.fr/les-stations-velos/'><img src='https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/DSC_0394-scaled.jpg' alt='Image vélo' class='carte-img'></a>"
        +"</div>";
    infovelo1.setContent(contenu3a);


    var contenu3 =
        "<div><h4 class='h4'>Abris vélos</h4>"
        +"<p>Les abris vélos vous permettent de <br>ranger en sécurité vos vélos dans des boxs</p>"
        +"<a href='https://incamp.cecile-gaultier.fr/les-stations-velos/'><img src='https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/DSC_0394-scaled.jpg' alt='Image vélo' class='carte-img'></a>"
        +"</div>";

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le marqueur velo 1
    google.maps.event.addListener( marqueurVelo1, 'click', function () {
            //ouverture info bulle
        infovelo1.open(carte, marqueurVelo1);
        }
    );


    //Instanciation d'une Info-bulle / InfoWindow
    var infovelo2 = new google.maps.InfoWindow();

    //Charger le contenu
    infovelo2.setContent(contenu3);

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le marqueur velo 2
    google.maps.event.addListener( marqueurVelo2, 'click', function () {
            //ouverture info bulle
            infovelo2.open(carte, marqueurVelo2);
        }
    );


    //Instanciation d'une Info-bulle / InfoWindow
    var infovelo3 = new google.maps.InfoWindow();

    //Charger le contenu
    infovelo3.setContent(contenu3);

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le marqueur velo 3
    google.maps.event.addListener( marqueurVelo3, 'click', function () {
            //ouverture info bulle
            infovelo3.open(carte, marqueurVelo3);
        }
    );



    //Instanciation d'une Info-bulle / InfoWindow
    var infovelo4 = new google.maps.InfoWindow();

    //Charger le contenu
    infovelo4.setContent(contenu3);

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le marqueur velo 4
    google.maps.event.addListener( marqueurVelo4, 'click', function () {
            //ouverture info bulle
            infovelo4.open(carte, marqueurVelo4);
        }
    );



    //Instanciation d'une Info-bulle / InfoWindow
    var infovelo5 = new google.maps.InfoWindow();

    //Charger le contenu
    infovelo5.setContent(contenu3);

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le marqueur velo 5
    google.maps.event.addListener( marqueurVelo5, 'click', function () {
            //ouverture info bulle
            infovelo5.open(carte, marqueurVelo5);
        }
    );




    //Instanciation d'une Info-bulle / InfoWindow
    var infojardin1 = new google.maps.InfoWindow();

    //Charger le contenu
    var contenu4 =
        "<div><h4 class='h4'>Jardin de l’UFR STGI</h4>"
        +"<p>Les jardins de l’UFR STGI <br>regorgent de fruits et légumes délicieux</p>"
        +"<a href='https://incamp.cecile-gaultier.fr/vegetalisation-du-campus/'><img src='https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/DSC_0317-scaled.jpg' alt='Image jardin' class='carte-img'></a>"
        +"</div>";
    infojardin1.setContent(contenu4);

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le jardin 1
    google.maps.event.addListener( marqueurJardin1, 'click', function () {
            //ouverture info bulle
            infojardin1.open(carte, marqueurJardin1);
        }
    );


    //Instanciation d'une Info-bulle / InfoWindow
    var infojardin2 = new google.maps.InfoWindow();

    //Charger le contenu
    var contenu5 =
        "<div><h4 class='h4'>Jardins de la Mémo</h4>"
        +"<p>Les jardins partagés de la Mémo <br>regorgent de légumes et d’aromates</p>"
        +"<a href='https://incamp.cecile-gaultier.fr/vegetalisation-du-campus/'><img src='https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/DSC_0317-scaled.jpg' alt='Image jardin' class='carte-img'></a>"
        +"</div>";
    infojardin2.setContent(contenu5);

    //Affichage lors d'un clic sur le marqueur parking
    //Evenement click sur le jardin 2
    google.maps.event.addListener( marqueurJardin2, 'click', function () {
            //ouverture info bulle
            infojardin2.open(carte, marqueurJardin2);
        }
    );


}


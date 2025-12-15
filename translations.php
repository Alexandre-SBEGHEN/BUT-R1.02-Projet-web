<?php

//Initialiser le JSON
$translations_string = '{
    "en": {
        "docname": {
            "e404": "Error 404",
            "index": "Brainrot City",
            "history": "History - Brainrot City",
            "roster": "Roster - Brainrot City",
            "generator": "Generator - Brainrot City",
            "about": "About - Brainrot City"
        },
        "navbar": {
            "logo_alt": "Website\'s logo",

            "links": ["Home", "History", "Roster", "Generator", "About"],
            "flag-alt": ["Flag of the UK", "Flag of France"]
        },
        "pages": {
            "e404": {
                "meta_desc": "404 error: the page you are looking for does not exist or has been moved. Use the navigation to continue browsing the site.",

                "title": "404 :(",
                "subtitle": "Ressource not found.",

                "back_to_home": "Back to home",

                "sad_sahur_alt": "Picture of sad Tung Tung Tung Sahur"
            },
            "index": {
                "meta_desc": "A fanpage dedicated to the amazing world of Brainrots!",
                "title": "BRAINROT",
                "subtitle": "Welcome to our website!"
            },
            "history": {
                "meta_desc": "Learn more about the origin of Brainrots and their evolution.",

                "title": "WHAT,",
                "subtitle": "when, and where.",
                "learn_more": "Learn more",
                "browse": "Browse",

                "back_to_top": "Back to top"
            },
            "roster": {
                "meta_desc": "A wide selection of the best and most known Brainrots, each followed by a presentation.",

                "title": "ENJOY",
                "subtitle": "our catalog.",

                "card_alt": "Character "
            }
        }
    }
}';
$translations = json_decode($translations_string);

//Démarrer la session
session_start();

//Langage par défaut
define('DEFAULT_LANGUAGE', 'en');

//Langages supportés par le site
$lang_suppported = ['en'];

//Vérifier si le paramètre de langue existe et si sa valeur se trouve dans les langages supportés
if (isset($_GET['lang']) && in_array($_GET['lang'], $lang_suppported)) {
    $_SESSION['lang'] = $_GET['lang'];
}

//Changer la langue actuelle pour la 'lang' de la session, ou la langue par défaut si elle n'est pas définie
$lang_current = $_SESSION['lang'] ?? DEFAULT_LANGUAGE;

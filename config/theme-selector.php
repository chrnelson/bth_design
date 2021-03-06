<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/typography.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Cambay|Hammersmith+One"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/color.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colorful.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typography.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Cambay|Hammersmith+One"]
        ],

        "separator2" => "------------------------------------------------",

        "bgphoto"       => [
            "title"      => "Stort bakgrundsfoto och full bredd (kmom06/designelement)",
            "class"      => "bgimage",
            "stylesheets" => ["css/bgphoto.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Cambay|Hammersmith+One"]
        ],

        "texture"       => [
            "title"      => "Bakgrundsmönster (textur) och tydliga linjer (kmom06/designelement)",
            "class"      => "texture",
            "stylesheets" => ["css/texture.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Cambay|Hammersmith+One"]
        ],

        "bgcolours"       => [
            "title"      => "Bakgrundsfärger med toning och centrerat innehåll (kmom06/designelement)",
            "class"      => "bgcolours",
            "stylesheets" => ["css/bgcolours.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Cambay|Hammersmith+One"]
        ],

        "separator3" => "------------------------------------------------",

        "contrast"       => [
            "title"      => "Kontraster och betoning (kmom06/designprinciper)",
            "class"      => "contrast",
            "stylesheets" => ["css/contrast.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Cambay|Hammersmith+One"]
        ],

        "movement"       => [
            "title"      => "Rörelse, harmoni och betoning (kmom06/designprinciper)",
            "class"      => "movement",
            "stylesheets" => ["css/movement.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Cambay|Hammersmith+One"]
        ],

        /*
        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => []
        ],
        */

    ]

];

<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Design related analysis"),
                "mark-if-parent" => true,
            ],

            "themes" => [
                "text"  => t("Temata"),
                "url"   => $this->di->get("url")->create("themes"),
                "title" => t("Temata"),

                "submenu" => [

                    "items" => [

                        "theme" => [
                            "text"  => t("Färgtemata"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Färgemata"),
                        ],

                        "design-element" => [
                            "text"  => t("Designelement"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("Designelement")
                        ],

                        "design-principle" => [
                            "text"  => t("Designprinciper"),
                            "url"   => $this->di->get("url")->create("design-principle"),
                            "title" => t("Designprinciper")
                        ],
                    ],

                ],
            ],

            "theme-selector" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljare")
            ],

            "blog" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg")
            ],


            "test" => [
                "text"  => t("Testsidor"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsidor"),

                "submenu" => [

                    "items" => [

                        "test_markdown" => [
                            "text"  => t("Markdown-test"),
                            "url"   => $this->di->get("url")->create("test_markdown"),
                            "title" => t("Markdown-test")
                        ],

                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid?vgrid"),
                            "title" => t("Grid")
                        ],

                        "typography" => [
                            "text"  => t("Typografi"),
                            "url"   => $this->di->get("url")->create("typography?hgrid"),
                            "title" => t("Typography")
                        ],

                        "images" => [
                            "text"  => t("Bild"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Bild")
                        ],

                    ],

                ],
            ],

            "about2" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website"),
            ],

        ],

    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Design related analysis"),
                "mark-if-parent" => true,
            ],

            "themes" => [
                "text"  => t("Temata"),
                "url"   => $this->di->get("url")->create("themes"),
                "title" => t("Temata"),

                "submenu" => [

                    "items" => [

                        "theme" => [
                            "text"  => t("Färgtemata"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Färgemata"),
                        ],

                        "design-element" => [
                            "text"  => t("Designelement"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("Designelement")
                        ],

                        "design-principle" => [
                            "text"  => t("Designprinciper"),
                            "url"   => $this->di->get("url")->create("design-principle"),
                            "title" => t("Designprinciper")
                        ],
                    ],

                ],
            ],

            "theme-selector" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljare")
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg")
            ],

            "test" => [
                "text"  => t("Testsidor"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsidor"),

                "submenu" => [

                    "items" => [

                        "test_markdown" => [
                            "text"  => t("Markdown-test"),
                            "url"   => $this->di->get("url")->create("test_markdown"),
                            "title" => t("Markdown-test")
                        ],

                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid?vgrid"),
                            "title" => t("Grid")
                        ],

                        "typography" => [
                            "text"  => t("Typografi"),
                            "url"   => $this->di->get("url")->create("typography?hgrid"),
                            "title" => t("Typography")
                        ],

                        "images" => [
                            "text"  => t("Bild"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Bild")
                        ],

                    ],

                ],
            ],

            "about" => [
                "text"  => t("Om sidan"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om sidan")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];

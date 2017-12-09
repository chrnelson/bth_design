---
views:
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            title: Inlägg
            meta:
                type: copy
                view: blog-list

...
Min bildblogg
===========================

Välkommen till bildblogg! På bloggen visar jag mer eller mindre vackra byggnader i Vasa. För att visa upp bilderna på blogggen använder jag mig av Cimage. Hela idén med bloggen är egentligen att visa att jag lärt mig använda detta behändiga verktyg när det gäller att använda bilder på sin webbplats.

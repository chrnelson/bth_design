Analys av webbplatsers snabbhet (kmom05)
========================================

_"Den som väntar på något gott väntar alltid för länge."_

I denna uppgift har jag analyserat tre webbplatser med avseende på **snabbhet**, det vill säga hur länge det tar att ladda webbsidorna. De sidor som jag har valt är alla inom resebranschen: det svenska statliga järnvägsbolaget **SJ**, dess finländska motsvarighet **VR** samt det skandinaviska flygbolaget **SAS** svenska webbplats. Jag ville analysera webbsidor med likartat innehåll och valde därför sidor inom samma bransch. Webbplatser för företag i resebranschen används rimligen ofta mobilt och på ställen där uppkopplingen är begränsad, vilket betyder att hur snabbt sidorna laddar blir synnerligen viktigt.

Jag upplever VR:s sida som väldigt traditionell medan jag tycker att SJ:s sida är väldigt snygg och känns modern. Jag ville se om sidorna skiljer sig åt i snabbhet. SAS har en ny webbplats som enligt min egen erfarenhet och enligt diskussioner på forum såsom _businessclass.se_ har många problem i så väl funktionalitet som användarvänlighet. Jag ville testa om den nya sidan ur ett snabbhetsperspektiv är välgjord eller om det även brister där.

###Metod

För alla webbplatser analyserade jag tre olika sidor:

- första sidan
- en sida med reseinformation
- en sida med information om baggage ombord

I testet ingick inte testning av bokningsdialoger. Alla tester utfördes den 3.12.2017 i mitt trådlösa hemmanätverk.

För analysen använde jag mig av två olika verktyg: [Google Pagespeed](https://developers.google.com/speed/pagespeed/) och Devtools i webbläsaren Firefox. I Google Pagespeed testade jag varje sida både för desktop- och mobilanvändning. För varje sida antecknades hur många poäng (av max 100) som Google gav samt betyg. Google Pagespeed gav även förslag på förbättringsåtgärder vilka nämns nedan.

I Devtools testade jag varje sida tre gånger och beräknade medeltalet av laddningstiden. Varje laddningen gjorde så att hela sidan laddades om totalt (cache användes inte).

Testresultaten och länkarna till de sidor som testats  finns tillgängliga i detta [kalkylark](https://docs.google.com/spreadsheets/d/15O6tYVw-k2v2JoiUykre-8m0N3xhscJibsDoi5jZfhg/edit?usp=sharing).

---

SJ
--------------

[SJ:s webbplats](https://www.sj.se)

[FIGURE src="image/sj.jpeg?w=c14" class="center" alt="Skärmdump av SJ:s webbsida (första sidan)"]

Resultat i medeltal:

- Google Pagespeed: desktop 74 ("needs work") / mobil 53 ("poor")
- laddningstid: 10,5 sek.

Förättringsåtgärder:

JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten borde tas bort och synligt innehåll borde prioteras på webbsidan. Bilderna på sidan borde optimeras.

---

VR
--------------

[VR:s webbplats](https://www.vr.fi/cs/vr/sv/etusivu_sv)

[FIGURE src="image/vr.jpeg?w=c14" class="center" alt="Skärmdump av VR:s webbsida (första sidan)"]

Resultat i medeltal:

- Google Pagespeed: desktop 60 ("poor") / mobil 48 ("poor")
- laddningstid: 8,7 sek.


Förbättringsåtgärder:

Även här borde JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten tas bort. Bilderna borde optimeras och därtill borde HTML- och JavaScript-koden komprimeras för en snabbare sida.


---

SAS
----------------

[SAS svenska webbplats](https://www.sas.se)

[FIGURE src="image/sas.jpeg?w=c14" class="center" alt="Skärmdump av SAS:s webbsida (första sidan)"]

Resultat i medeltal:

- Google Pagespeed: desktop 57 ("poor") / mobil 54 ("poor")
- laddningstid: 9,5 sek.

Förbättringsåtgärdeder:

Bilderna på sidan borde optimeras och HTML- och JavaScript-koden borde förminskas. JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten borde avlägsnas och synligt innehåll på webbsidan borde prioriteras.

---

Sammanfattning
----------------

__Samtliga tre webbsidor som jag analyserade fungerade enligt Google Pagespeed fungerade förhållandevis dåligt.__ I desktopläge varierade medelpoängen från 57 för SAS till 74 för SJ. Mobilt fungerade alla testade sidor dåligt med poäng kring 50. Ingen sida fick ett gott betyg. Laddningstiden på sidorna var i medeltal kring 10 sekunder.

En göra en rättvis rangordning av sidorna gällande snabbhet är inte lätt då både Google Pagespeed-poängen och laddningstiderna är förhållandevis lika. Jag tycker ändock att SAS nya webbplats kan utses till testets jumbo, då inget medeltal nådde 60-gränsen. Laddning av SAS reseinfosida på desktop fick ett så lågt poäng som 35! SJ:s webbplats fungerar enligt Google Pagespeed något snabbare än VR:s på mobilen och betydligt snabbare än VR:s i desktopläge, varför jag är beredd att utse SJ till testets vinnare medan VR får andraplatsen. Detta trots att VR i min mätning var kring 1 sekund snabbare än SJ. Det är sannolikt att detta kan förklaras med att VR hade en snabbhetsfördel då sidladdningstestet utfördes i Finland.

Att sidorna är krävande sidor med många olika element, inklusive möjlighet att inleda bokningsdialog kan ha påverkat resultatet. Mer statiska sidor skulle säkert ha kunnat få ett högre betyg.

Trots de förhållandevis dåliga resultaten i Google Pagespeed upplever jag inte att dessa webbplatser fungerat särdeles långsamt. Att fastställa en absolut gräns för vad som är snabbt respektive långsamt för en webbsida är vanskligt, men kanske kunde gränsen sättas någonstans kring 10 sekunder, vilket i så fall skulle betyda att de testade webbsidorna här nätt och jämnt klarar testet. Sidorna fungerar alltså någorlunda tillfredsställande snabbt, men det står helt klart att det finns utrymme för betydande åtgärder för att förbättra samtliga tre webbplatsers snabbhet och tekniska funktion. Förmodligen fungerar dessa sidor inte smidigt för användare med långsammare nätförbindelse.

De __åtgärder__ som borde göras är i stort sett de samma på alla tre webbplatser:

- avlägsnande av JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
- optimering av bilder
- förminskning / minifiering av HTML- och JavaScript-kod

---

Slutligen
------------

Denna uppgift har utförts som en del av kursmoment 05 i kursen Teknisk webbdesign vid BTH. Jag har utfört uppgiften ensam.

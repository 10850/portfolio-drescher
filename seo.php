<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drescher Rijna's Læringsportfolio for 1.semester 2020, som mulitmediedesigner. Siden fortæller om alt jeg har lært gennem studiet og viser mine fremskridt og projekter...">
    <meta name="keywords" content="Multimedidesigner, 1. semester, læringsportfolio, Drescher Rijna, Design Thinking, Kodning, Kommunikation, Usability, Design, Videoproduktion, Fotografering, Refleksion, Projekter, Studieprojekt, Eksamensprojekt">
    <meta name="author" content="Drescher Rijna">
    <title>Drescher Rijna - Læringsportfolio</title>
    <!-- Logo ikon oppe i fanen -->
    <link href="closure-logo-black.png" rel="icon" type="image">
    <!-- Montserrat & Quimby Mayoral og Lora fra adobe fonts-->
    <link rel="stylesheet" href="https://use.typekit.net/rgm6her.css">
    <!-- Karma fra google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mit stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
    <body class="seo-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
        
        <?php include 'undermenu-html.inc' ?>
            
            <div id="mitgrid-seo">
                
                <h1 class="titel">SEO, Semantiske tags og Metadata</h1>
        
                <section id="seo-intro">
                    <h2 class="overskrift">SEO</h2>
                    <p class="body-text">
                        SEO står for Search Engine Optimization og er det som alle søgemaskiner (google) bruger til at rangere hjemmesider på internettet (W3schools, 2020). Det er for at give brugerne de bedste hjemmesider som følge standarderne på toppen, som er det man ser først (ibid). Derfor er det derfor man følge standarderne for SEO når man koder, som brugen af semantiske tags, have styr på sit meta-data, alternativ billedtekst, responsivt design, mobilvenlighed, lav billedstørrelse for hurtig loading osv. (ibid).
                    </p>
                </section> <!-- SEO -->
                
                <section id="metadata-intro">
                    <h2 class="overskrift">Metadata</h2>
                    <section id="hvad-er-head" class="mt">
                        <h3 class="underoverskrift">Hvad er head?</h3>
                        <p class="body-text">
                            Head tagget i HTML er hvor du putter alle parametrene der gælder for hele dokumentet (Nyrup &#38; Andreasen, 2020). Det inkluderer sidens titel, sprog, tegnsæt, opsætning og stylesheets (ibid).
                        </p>
                        <p class="body-text">
                            Det som står i title er det som vil blive vist i den fane der hører til siden i browseren (Nyrup &#38; Andreasen, 2020).
                        </p>
                        <p class="body-text">
                            Man kan med fordel sætte JavaScripts i bunden af dokumentet efter body, da det kan gøre kørslen af koden hurtigere (Nyrup &#38; Andreasen, 2020).
                        </p>
                    </section>
                    
                    <section id="metaogbase" class="mt">
                        <h3 class="underoverskrift">Hvad er head?</h3>
                        <p class="body-text">
                            Meta tagget definere alt metadata om HTML-dokumentet (Nyrup &#38; Andreasen, 2020). 
                        </p>
                        <p class="body-text">
                            Meta tags går altid inde i head-elementet og bruges typisk til at specificere karaktersæt, sidebeskrivelse, nøgleord, dokumentforfatter og visningsindstillinger (ibid). Det er supervigtigt at inkludere alt for god SEO-rangering (ibid).
                        </p>
                        
                        <div class="background-icons-kodning">
                            <img src="kodning/seo/metadata.png" alt="eksempel på metadata done right" id="meta-eksempel">
                        </div>
                        
                        <p id="skalinclude" class="body-text">
                            Man skal inkludere dette I sit metadata for viewport/visningsindstillinger for at ens side kan være responsiv (W3schools, 2020):
                        </p>
                        
                        <div class="background-icons-kodning">
                            <img src="kodning/seo/viewport.png" alt="viewport for responsiv side" id="viewport-img">
                        </div>
                    </section>
                </section> <!-- Metabase -->
        
                <section id="hvad-er-semantisk">
                    <section class="mt" id="semantisk-intro">
                        <h2 class="overskrift">Hvad er semantiske tags</h2>
                        
                        <p class="body-text">
                            Semantiske tags er karakteriseret som tags der fortæller noget om indholdet (Nyrup &#38; Andreasen, 2020). De er blevet mere og mere vigtigt gennem tiden, hvor man tidligere bare brugte ikke semantiske tags til at bygge sine sider (ibid). Det er på grund af den stor vækst i vigtigheden af SEO (ibid). Eksempler på semantiske tags er:
                        </p>
                    </section>
                    
                    <section class="mt" id="semantisk-tags-list">
                        <h3 class="underoverskrift">Semantiske tags</h3>
                        
                        <p class="body-text">
                            Overskrifter bruges til at skabe hierarki i din webside, det gøres ved at bruge de forskellige størrelser af overskrifter hensigtsmæssigt (Østergaard, 2020). 
                        </p>
                        
                        <p class="body-text">
                            Størrelserne går fra h1 , som er den største og op til h6, som er den mindste (ibid). 
                        </p>
                        
                        <p class="body-text">
                            <strong>Tommelfingerregel:</strong>brug aldrig mere end 1 h1 på en webside (Østergaard, 2020). 
                        </p>
                    </section>
                    
                    <section id="andre-tags-semantisk">
                    <h3 class="underoverskrift">Flere semantiske tags</h3>
                    
                    <h4 class="sub-skrift">&#60;p&#62;</h4>
                    <p class="body-text">
                        P tagget fortæller at det er en paragraph som er indholdet (Østergaard, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;header&#62;</h4>
                    <p class="body-text">
                        Header tagget fortæller at det et sidehoved og vil derfor by default placere i toppen af siden eller sectionen og bruges normalt til navigation, brand logoer osv. (W3schools, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;footer&#62;</h4>
                    <p class="body-text">
                        footer tagget fortæller at det en sidefod og vil derfor by default placere i bunden af siden eller sectionen (W3schools, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;section&#62;</h4>
                    <p class="body-text">
                        Section tagget fortæller at alt indholdet inden i tagget er sin egen sektion/gruppe/container på siden (Østergaard, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;article&#62;</h4>
                    <p class="body-text">
                        Article tagget fortæller at indholdet er en artikel og at det er en uafhængig gruppe af indhold (W3schools, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;aside&#62;</h4>
                    <p class="body-text">
                        Aside tagget fortæller at indholdet er en del af det omringende indhold, men er i sin egen container (W3schools, 2020). Det bruges tit til at placere noget indhold til siden for resten af indholdet på siden, som en sidebar navigation (ibid).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;img&#62;</h4>
                    <p class="body-text">
                        Img tagget fortæller at dette er et billede (Østergaard, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;ul&#62;, &#60;ol&#62; og &#60;li&#62;</h4>
                    <p class="body-text">
                        &#60;ul&#62; står for unordered list og fortæller at det er en liste uden nummerering (W3schools, 2020). 
                    </p>
                    
                    <p class="body-text">
                        &#60;ol&#62; står for ordered list og fortæller det er en liste som er organiseret med numre (ibid).  
                    </p>
                    
                    <p class="body-text">
                        &#60;li&#62; står for list item og fortæller at indholdet er et element i en given liste (ibid). 
                    </p>
                </section> <!-- Flere semantiske tags -->
                
                
                <img src="kodning/kodeskikke/godskikke.jpg" id="semantisk-html-struktur" class="background-icons-kodning"> 
                
                
                
                <section id="ik-semantisk">
                    <h3 class="underoverskrift">Ikke semantiske tags</h3>
                    
                    <p class="body-text">
                        Ikke semantiske tags er tags som ikke fortæller noget om indholdet (Østergaard, 2020). Disse burde kun bruges til når man har noget bestemt man gerne vil formater/style på en bestemt måde (ibid). Eksempler på disse er:
                    </p>
                    
                    <h4 class="sub-skrift">
                        &#60;div&#62; står for list item og fortæller at indholdet er et element i en given liste (ibid). 
                    </h4>
                    
                    <p class="body-text">
                        Division/inddeling anvendes typisk for at inddele noget som skal formateres på en bestemt måde (Østergaard, 2020). Dog fortæller det intet om indholdet og burde derfor udskiftes med et semantisk tag hvis muligt(ibid).
                    </p>
                    
                    <h4 class="sub-skrift">
                        &#60;span&#62; står for list item og fortæller at indholdet er et element i en given liste (ibid). 
                    </h4>
                    
                    <p class="body-text">
                        Minder om &#60;div&#62; og &#60;p&#62; og bruges typisk på enkelte linjer som skal formateres på en bestemt måde (Østergaard, 2020). &#60;span&#62; medfører ikke linjeskift (ibid).
                    </p>
                </section>
                </section> <!-- Hvad er semantiske tags -->
                
                
                
                
                <section id="fordele-semantisk">
                    <h2 class="overskrift">Fordelen ved semantiske tags</h2>
                    <p class="body-text">
                        Udover SEO som er den primær grund til at man skal bruge semantiske tags, da det gør det nemmere for serveren og søgemaskinerne at forstå din sides struktur (Nyrup &#38; Andreasen, 2020). Så er fordelen også at man kan bygge en mere overskuelig struktur af koden til når andre programmører skal kigge og fortolke ens kode (ibid). Det vil for eksempel være vigtigt til når man skal arbejde sammen med andre om at bygge en webside (ibid).
                    </p>
                </section>
                
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            Nyrup, K. S. &#38; Andreasen, F. I. N., 2020. Semantiske tags og head (meta/base). [Online] 
                            Available at: <a href="http://10854.apache.eadania.dk/semantisk/?fbclid=IwAR29j6hUMGbjaYR4mqHcNC-MS9G0StqHn0EOaALlvMmT_oUTTZORa1hIia4" target="_blank">http://10854.apache.eadania.dk/semantisk/?fbclid=IwAR29j6hUMGbjaYR4mqHcNC-MS9G0StqHn0EOaALlvMmT_oUTTZORa1hIia4</a> 
                            [Senest hentet eller vist den 7 december 2020].

                        </li>
                        <li>
                            W3schools, 2020. HTML - The Head Element. [Online] 
                            Available at: <a href="https://www.w3schools.com/html/html_head.asp" target="_blank">https://www.w3schools.com/html/html_head.asp</a> 
                            [Senest hentet eller vist den 10 december 2020].

                        </li>
                        <li>
                            W3schools, 2020. HTML Semantic Elements. [Online] 
                            Available at: <a href="https://www.w3schools.com/html/html5_semantic_elements.asp" target="_blank">https://www.w3schools.com/html/html5_semantic_elements.asp</a>
                            [Senest hentet eller vist den 9 december 2020].

                        </li>
                        <li>
                            W3schools, 2020. WEB - SEO. [Online] 
                            Available at: <a href="https://www.quanzhanketang.com/website/web_search.html" target="_blank">https://www.quanzhanketang.com/website/web_search.html</a>
                            [Senest hentet eller vist den 2 december 2020].

                        </li>
                        <li>
                            Østergaard, N., 10. september 2020. HTML. [Online] 
                            Available at: <a href="https://eadania.mrooms.net/" target="_blank">https://eadania.mrooms.net/</a> 
                            [Senest hentet eller vist den 2 december 2020].
                        </li>
                    </ul>
                </section>
                
            </div> <!-- MITGRID -->
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
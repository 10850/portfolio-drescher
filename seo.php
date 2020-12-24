<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drescher Rijna's Læringsportfolio for 1.semester 2020, som mulitmediedesigner. Siden fortæller om alt jeg har lært gennem studiet og viser mine fremskridt og projekter...">
    <meta name="keywords" content="Multimedidesigner, 1. semester, læringsportfolio, Drescher Rijna, Design Thinking, Kodning, Kommunikation, Usability, Design, Videoproduktion, Fotografering, Refleksion, Projekter, Studieprojekt, Eksamensprojekt">
    <meta name="author" content="Drescher Rijna">
    <title>Drescher Rijna - Læringsportfolio</title>
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
            
            <div id="mitgrid-seo">
                
                <h1 class="titel">SEO, Semantiske tags og Metadata</h1>
        
                <section class="seo-intro">
                    <h2 class="overskrift">SEO</h2>
                    <p class="body-text">
                        SEO står for Search Engine Optimization og er det som alle søgemaskiner (google) bruger til at rangere hjemmesider på internettet (W3schools, 2020). Det er for at give brugerne de bedste hjemmesider som følge standarderne på toppen, som er det man ser først (ibid). Derfor er det derfor man følge standarderne for SEO når man koder, som brugen af semantiske tags, have styr på sit meta-data, alternativ billedtekst, responsivt design, mobilvenlighed, lav billedstørrelse for hurtig loading osv. (ibid).
                    </p>
                </section> <!-- SEO -->
                
                <section class="metadata-intro">
                    <h2 class="overskrift">Metadata</h2>
                    <section id="hvad-er-head" class="mt">
                        <h3 class="underoverskrift">Hvad er head?</h3>
                        <p class="body-text">
                            Head tagget i HTML er hvor du putter alle parametrene der gælder for hele dokumentet (Nyrup & Andreasen, 2020). Det inkluderer sidens titel, sprog, tegnsæt, opsætning og stylesheets (ibid).
                        </p>
                        <p class="body-text">
                            Det som står i title er det som vil blive vist i den fane der hører til siden i browseren (Nyrup & Andreasen, 2020).
                        </p>
                        <p class="body-text">
                            Man kan med fordel sætte JavaScripts i bunden af dokumentet efter body, da det kan gøre kørslen af koden hurtigere (Nyrup & Andreasen, 2020).
                        </p>
                    </section>
                    
                    <section id="metaogbase" class="mt">
                        <h3 class="underoverskrift">Hvad er head?</h3>
                        <p class="body-text">
                            Meta tagget definere alt metadata om HTML-dokumentet (Nyrup & Andreasen, 2020). 
                        </p>
                        <p class="body-text">
                            Meta tags går altid inde i head-elementet og bruges typisk til at specificere karaktersæt, sidebeskrivelse, nøgleord, dokumentforfatter og visningsindstillinger (ibid). Det er supervigtigt at inkludere alt for god SEO-rangering (ibid).
                        </p>
                        
                        <img src="kodning/seo/metadata.jpg" alt="eksempel på metadata done right" id="meta-eksempel">
                        
                        <p class="body-text">
                            Man skal inkludere dette I sit metadata for viewport/visningsindstillinger for at ens side kan være responsiv (W3schools, 2020):
                        </p>
                        
                        <img src="kodning/seo/viewport.png" alt="viewport for responsiv side" id="viewport-img">
                    </section>
                </section> <!-- Metabase -->
        
                <section id="hvad-er-semantisk">
                    <section class="mt" id="semantisk-intro">
                        <h2 class="overskrift">Hvad er semantiske tags</h2>
                        
                        <p class="body-text">
                            Semantiske tags er karakteriseret som tags der fortæller noget om indholdet (Nyrup & Andreasen, 2020). De er blevet mere og mere vigtigt gennem tiden, hvor man tidligere bare brugte ikke semantiske tags til at bygge sine sider (ibid). Det er på grund af den stor vækst i vigtigheden af SEO (ibid). Eksempler på semantiske tags er:
                        </p>
                    </section>
                    
                    <section class="mt" id="semantisk-intro">
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
                </section> <!-- Hvad er semantiske tags -->
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>Gregersen, O. &#38; Wisler-Poulsen, I., 2017. Kortsortering. I: Usability - Testmetoder til mere brugbare websites. s.l.:Wislers Forlag, pp. 86-96.</li>
                        <li>Rijna, Drescher &#38; Lank, Nicolaj, 2020, 26. Oktober: <a class="pdf-link" href="usability/Usability%20testmetoder.pdf" target="_blank">Usability testmetoder</a></li>
                    </ul>
                </section>
            </div> <!-- MITGRID -->
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
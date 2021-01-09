<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drescher Rijna's Læringsportfolio for 1.semester 2020, som mulitmediedesigner. Siden fortæller om alt jeg har lært gennem studiet og viser mine fremskridt og projekter...">
    <meta name="keywords" content="Multimedidesigner, 1. semester, læringsportfolio, Drescher Rijna, Design Thinking, Kodning, Kommunikation, Usability, Design, Videoproduktion, Fotografering, Refleksion, Projekter, Studieprojekt, Eksamensprojekt">
    <meta name="author" content="Drescher Rijna">
    <title>HTML Formularer - Læringsportfolio</title>
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
    <body class="formularer-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
        
        <?php include 'undermenu-html.inc' ?>
            
            <div id="mitgrid-formularer">
                
                <h1 class="titel">Formularer, felttyper og formatering</h1>
        
                <section id="form-intro">
                    <h2 class="overskrift">HTML form tag</h2>
                    <p class="body-text">
                        HTML formularer bruges til at indsamle data, som oftest sendes til en server, hvor det bearbejdes (Knudsen &#38; Sørensen, 2020). Tagget &#60;form&#62;&#60;/form&#62; bruges til at oprette en HTML formularer og er beholderen til alle elementtyperne for forskellige typer af formularer (ibid).
                    </p>
                </section> <!-- form tag intro -->
                
                
                <section id="formularer-tags">
                    <h2 class="overskrift">Formular elementer</h2>
                    <h4 class="sub-skrift">&#60;form&#62;</h4>
                    <p class="body-text">
                        Dette tag er et semantisk tag som bruges til at oprette container til HTML formularer (Knudsen &#38; Sørensen, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">&#60;input&#62;</h4>
                    <p class="body-text">
                        Dette tag er et empty tag, altså et tag uden et end tag (Knudsen &#38; Sørensen, 2020). Det er det mest brugte tag til HTML formularer, og kan bruges til mange forskellige måder afhængigt af hvad attribute du giver den (ibid).
                    </p>
                    
                    <h4 class="sub-skrift">Type=</h4>
                    <p class="body-text">
                        Type specificerer hvad &#60;input&#62; tagget skal vises som (Knudsen &#38; Sørensen, 2020):
                    </p>
                    
                    <h4 class="sub-skrift">Name=</h4>
                    <p class="body-text">
                        Angiver navnet på et input tag og bruges til henvisninger (Knudsen &#38; Sørensen, 2020).
                    </p>
                </section>
                
                <section id="formular-attribures">
                    <h2 class="overskrift">Formular attributter</h2>
                    <h4 class="sub-skrift">Type</h4>
                    <p class="body-text">
                        Indikere hvilken type input man vil anvende (ibid). Skal altid benyttes (Knudsen &#38; Sørensen, 2020).
                    </p>
                    
                    <h4 class="sub-skrift">Placeholder</h4>
                    <p class="body-text">
                        Viser et eksempel på hvad der skal skrives i feltet (Knudsen &#38; Sørensen, 2020). Som når man skal skrive sin e-mail (ibid).
                    </p>
                    
                    <h4 class="sub-skrift">Required</h4>
                    <p class="body-text">
                        Angiver at feltet skal udfyldes inden formularen kan sendes (Knudsen &#38; Sørensen, 2020).
                    </p>
                </section>
                
                
                <section id="nyhedsbrev-formularer">
                    <section id="nyhedsbrev-formularer-intro">
                        <h2 class="overskrift">Nyhedsbrev</h2>
                        <p class="body-text">
                            På min Løbehjul website har jeg lavet en nyhedsbrev formularer ved brug af HTML forms. <a href="http://10850.apache.eadania.dk/scootershopv2/index.php">Du er velkommen til at tjekke siden ud.</a>
                        </p>
                    </section>
                    
                    <section id="nyhedsbrev-formularer-koden">
                        <figure id="koden-til-brevet">
                            <h4 class="sub-skrift">Koden</h4>
                            <img src="kodning/formularer/nyhedsbrev.png" id="nyhedsbrev-kode">
                        </figure>
                        
                        <h4 class="sub-skrift">
                            Nyhedsbrevet er bygget op af:
                        </h4>
                        <p class="body-text">
                            Et &#60;form&#62; som skal bruges når man laver formularer:
                        </p>
                        <p class="body-text">
                            Et &#60;input&#62; som har attributterne:
                        </p>
                        <ul class="liste" id="input-attributter-nyhedsbrev">
                            <li>
                                Type="text" for at der kan skrives tekst.
                            </li>
                            <li>
                                Placeholder="Email adresse" som en guide til hvad feltet skal udfyldes med.
                            </li>
                            <li>
                                Name="Indtast e-mail her.." required, for at formen ved at der skal skrives en e-mail for at der kan trykkes Subscribe.
                            </li>
                        </ul>

                        <p class="body-text">
                            Knappen "Subscribe" er et input som har attributterne type="submit" og value="Subscribe", det fortæller formulareren at knappen hedder subscribe og at dens værdi er at det til at Subscribe til nyhedsbrevet.
                        </p>
                    </section>
                    <div class="background-icons-kodning">
                        <img src="kodning/formularer/nyhedsbrev-screen.png" id="nyhedsbrev-screen">
                    </div>
                </section>
                
                
                <section id="searchbar">
                    <section id="searchbar-intro">
                        <h2 class="overskrift">Søgefelt</h2>
                        <p class="body-text">
                            Udover et nyhedsbrev har jeg også lavet et søgefelt på min Løbehjul website. <a href="http://10850.apache.eadania.dk/scootershopv2/index.php">Du er velkommen til at tjekke siden ud.</a>
                        </p>
                    </section>
                    
                    <section id="searchbar-kode">
                        <section id="steps-searchbar">
                            <h4 class="sub-skrift">Koden til søgefeltet</h4>
                            <img src="kodning/formularer/searchbar.png" id="koden-til-searchbar">
                            <p class="body-text">
                                Der er lavet et &#60;nav&#62; for at indikere det er noget navigation vi har at gøre med.
                            </p>
                            <p class="body-text">
                                Der er lavet et input="text" for at indikere, at der kan skrives i søgefeltet.
                            </p>
                            <p class="body-text">
                                Til sidst er der en placholder som siger "søg efter produkter eller brands..." for at fortælle brugeren hvad feltet bruges til.
                            </p>
                        </section>
                        <div class="background-icons-kodning">
                        <section id="searchbar-screen">
                            <h4 class="sub-skrift">Søgefeltet på Løbehjulsiden</h4>
                            <img src="kodning/formularer/s%C3%B8gefelt-screen.png" id="searchbar-img">
                        </section>
                        </div>
                    </section>
                </section>
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            Knudsen, V. A. &#38; Sørensen, A., 2020. Formularer, felttyper og formatering. [Online] 
                            Available at: <a href="http://10743.apache.eadania.dk/HTML%20Forms/Index.html" target="_blank">http://10743.apache.eadania.dk/HTML%20Forms/Index.html</a>
                            [Senest hentet eller vist den 7 december 2020].
                        </li>
                        <li>
                            Rijna, Drescher: <a href="http://10850.apache.eadania.dk/scootershopv2/index.php" target="_blank">Gisito Scooters</a>; Fra 23. Oktober 2020
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
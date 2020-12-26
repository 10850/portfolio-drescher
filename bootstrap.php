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
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mit stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
    <body class="bootstrap-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
            <div id="mitgrid-bootstrap">
                
                <h1 class="titel">Bootstrap</h1>
            
                <section id="hvad-er-bootstrap">
                    <h2 class="overskrift">Hvad er bootstrap?</h2>
                    
                    <p class="body-text">
                        Bootstrap er et framework. Hvad er et framework så? 
                    </p>
                    
                    <p class="body-text">
                        Ja, et framework er færdige standardiserede kodeelementer, som anvendes til at opbygge layout og funktionalitet på en strukturel og effektiv måde (Østergaard, 2020). Det er en form for færdig lavet blueprint, som et blueprint på en frame til en bygning (ibid).
                    </p>
                    
                    <p class="body-text">
                        Bootstrap har mange forskellige frameworks man gør brug af både med Grid-layouts, CTA-knapper, karruseller, pop-overs, navigationsbar osv. (Østergaard, 2020).  Når man gerne vil bruge disse frameworks, vil man typisk skulle copy + paste noget HTML sammen med et CSS stylesheet og noget javascript (ibid).
                    </p>
                </section> <!-- Hvad er Bootstrap -->
        
                <section id="bootstrap-praksis">
                    <section id="bootstrap-praksis-intro">
                        <h2 class="overskrift">Bootstrap på hundesiden</h2>
                        <p class="body-text">
                            Efter jeg hørte om Bootstrap prøvede jeg det af på min hundeside fra starten af semestreret. For at bruge bootstrap skal man først under ”getting started” have copy + paste deres CSS og Javascript ind i HTML-fil (Bootstrap, 2020). 
                        </p>
                        
                        <h3 class="underoverskrift">Tommelfingerregler:</h3>
                        <ul class="liste">
                            <li>
                                Læg CSS’en over din egen CSS så det følger kaskadeloven og du derved kan style på de forskellige frameworks du bruger (Bootstrap, 2020). 
                            </li>
                            <li>
                                Læg Javascriptet i bunden af body under alt din HTML kode, for at være sikker på det hele spiller (ibid).
                            </li>
                        </ul>
                    </section>
                    
                    <section class="mt" id="bootstrap-nav-prakis">
                        <h3 class="underoverskrift">Bootstrap navigation</h3>
                        <p class="body-text">
                            Jeg går ind på bootstrap og finder deres <a href="https://getbootstrap.com/docs/4.5/components/navbar/">navbar</a> components. Derefter kopier jeg det og putter det ind i HTML'en. Så vil der komme en menu op på min hundeside.
                        </p>
                        
               
                        
                        <figure id="navigation-eksempel-kode" >
                            <h4 class="sub-skrift">Koden til navigationen sat ind</h4>
                            <img src="kodning/bootstrap/navbar.png" id="navbar-kode-bootstrap">
                        </figure>
                        
                        <figure id="navigation-eksempel-before" >
                            <h4 class="sub-skrift">Hvordan sidens navigation så ud før Bootstrap</h4>
                            <img src="kodning/bootstrap/navbar-before.jpg" id="navbar-screen-before">
                            <a href="http://10850.web.eadania.dk/hundoriginal/index.html">Hvis du gerne vil besøge den originale hundesiden</a>
                        </figure>
                        
                        <figure id="navigation-eksempel-after" >
                            <h4 class="sub-skrift">Hvordan sidens navigation ser ud nu med Bootstrap</h4>
                            <img src="kodning/bootstrap/navbar-after.jpg" id="navbar-screen-after">
                            <a href="http://10850.web.eadania.dk/hundeside/index.html">Navigationen kan prøves af på hundesiden</a>
                        </figure>
                     
                        <p class="body-text">
                            Menuen er en responsiv menu der bliver til en burgermenu på mobil størrelse. Det er gjordt ved hjælp af css media queries og burgermenuen skubber alle andre elementer ned som er gjordt i javascript, hvor det siger at når collapse boksen åbner så skubber den resten af siden ned og når den lukker kommer sidens elementer op igen. 
                        </p>
                    </section> <!-- navigation -->
                    
                    <section class="mt" id="bootstrap-dropogpop-praksis">
                        <h3 class="underoverskrift">Bootstrap dropdown og popover knapper</h3>
                        <p class="body-text">
                            Jeg går ind på bootstrap og finder deres <a href="https://getbootstrap.com/docs/4.5/components/dropdowns/">dropdown</a> og <a href="https://getbootstrap.com/docs/4.5/components/popovers/">popover</a> components. Derefter kopier jeg det og putter det ind i HTML'en. Så vil der komme en dropdown og popover knap frem på min hundeside.
                        </p>
                        
                        
                        <section id="images-dropandpop">
                        
                        <figure id="dropogpop-eksempel-kode">
                            <h4 class="sub-skrift">Koden Dropdown og Popover knappen sat ind</h4>
                            <img src="kodning/bootstrap/dropdown-kode.png" id="dropdown-koden">
                        </figure>
                        
                        <div class="background-icons-kodning">
                        <figure id="dropogpop-eksempel-after">
                            <h4 class="sub-skrift">Dropdown og Popover knappen på hundesiden</h4>
                            <img src="kodning/bootstrap/popoveranddropdown-billed.png" id="knapper-on-site">
                            <a href="http://10850.web.eadania.dk/hundeside/index.html">Dropdown og Popover knappen kan prøves af på hundesiden</a>
                        </figure>
                        </div>
                            
                        </section>    
                        
                        <p class="body-text">
                            Popover virker sådan at noget javascript fortæller knappen at når den trykkes på så popper der en boks med noget tekst op over knappen, og hvis man trykker på knappen mens den er åben så forsvinder boksen. 
                        </p>
                        
                        <p class="body-text">
                            Det samme gælder for dropdown knappen, hvor javascriptet siger at når man trykker på knappen så vil der poppe en boks op nedenfor knappen med links. Og hvis man trykker på den igen eller trykker udenfor boksen så forsvinder listen med links igen.
                        </p>
                    </section> <!-- popover og dropdown -->
                    
                    <section class="mt" id="bootstrap-karousel-praksis">
                        <h3 class="underoverskrift">Bootstrap billedkarousel</h3>
                        <p class="body-text">
                            Jeg går ind på bootstrap og finder deres <a href="https://getbootstrap.com/docs/4.5/components/carousel/">carousel</a> components. Derefter kopier jeg det og putter det ind i HTML'en, og lægger billeder ind i sliderne. Så vil der komme en billed karousel med billederne frem på min hundeside.
                        </p>
                        
                        <section id="images-carousel">
                        
                        <figure id="karousel-eksempel-kode" >
                            <h4 class="sub-skrift">Koden til karousellen sat ind</h4>
                            <img src="kodning/bootstrap/karousel.png" id="karousel-koden">
                        </figure>
                        
                        <div class="background-icons-kodning">
                        <figure id="karousel-eksempel-after">
                            <h4 class="sub-skrift">Karousellen på hundesiden</h4>
                            <img src="kodning/bootstrap/karousel-billed.png" id="karousel-on-site">
                            <a href="http://10850.web.eadania.dk/hundeside/hundemad.html">Billedkarousellen kan prøves af på hundesiden</a>
                        </figure>
                        </div>
                            
                        </section>
                            
                        <p class="body-text">
                            Denne karousel er responsiv på grund css styling og dens slider funktion kommer af javascript, som siger at når man trykker på højre pil så vil elementet skifte til næste billed til højre for den og omvendt. Måden den slider til siden er en transistion style fra CSS.
                        </p>
                    </section>
                
                </section> <!-- bootstrap anvendelse -->
        
                
                <section id="fordelogulemp-bootstrap">
                    <h2 class="overskrift">Fordele og Ulemper</h2>
                    <section id="fordele-bootstrap">
                        <h3 class="underoverskrift">Fordele</h3>
                        <ul class="liste">
                            <li>
                                Du kan hurtigere lave noget der er pænt (ibid).
                            </li>
                            <li>
                                Du får let mange funktioner (ibid).
                            </li>
                            <li>
                                Det er lettere at gøre brugervenligt (ibid).
                            </li>
                        </ul>
                    </section>
                    
                    <section id="ulemper-bootstrap">
                        <h3 class="underoverskrift">Ulemper</h3>
                        <ul class="liste">
                            <li>
                                Det er vanskeligere at lave unikt design (Østergaard, 2020).
                            </li>
                            <li>
                                Du skal sætte dig ind i kode og funktionalitet (ibid).
                            </li>
                            <li>
                                Man lærer framework og ikke sprog (ibid).
                            </li>
                            <li>
                                Du må ofte gå på kompromis med layoutet (ibid).
                            </li>
                        </ul>
                    </section>
                </section> <!-- bootstrap fordele og ulemper -->
                
                
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            Bootstrap, 2020. Introduction. [Online] 
                            Available at: <a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/" target="_blank">https://getbootstrap.com/docs/4.5/getting-started/introduction/</a>
                            [Senest hentet eller vist den 8 december 2020].
                        </li>
                        <li>
                            Østergaard, N., 19. september 2020. Frameworks. [Online] 
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
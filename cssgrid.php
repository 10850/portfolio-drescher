<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drescher Rijna's Læringsportfolio for 1.semester 2020, som mulitmediedesigner. Siden fortæller om alt jeg har lært gennem studiet og viser mine fremskridt og projekter...">
    <meta name="keywords" content="Multimedidesigner, 1. semester, læringsportfolio, Drescher Rijna, Design Thinking, Kodning, Kommunikation, Usability, Design, Videoproduktion, Fotografering, Refleksion, Projekter, Studieprojekt, Eksamensprojekt">
    <meta name="author" content="Drescher Rijna">
    <title>CSS Grid - Læringsportfolio</title>
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
    <body class="cssgrid-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
             <?php include 'undermenu-css.inc' ?>
        
            <div id="mitgrid-cssgrid">
                
                <h1 class="titel">CSS Grid</h1>
        
                <section id="grid-intro">
                    <section id="hvadergrid">
                        <h2 class="overskrift">Hvad er Grid</h2>
                        <p class="body-text">
                            Grid er den nyeste og standardmåde man strukturerer layoutet på en side så man kan få et responsivt design (Østergaard, 2020). 
                        </p>
                    </section>
                    
                    <section id="hvorforgrid">
                        <h2 class="overskrift">Hvorfor Grid</h2>
                        <ul class="liste">
                            <li>
                                CSS Grid er det første system som effektivt kan placere elementer i CSS, som samtidigt forbliver responsivt (Østergaard, 2020).
                            </li>
                            <li>
                                HTML- og andre CSS-funktioner var brugt til mere end de var lavet til (ibid).
                            </li>
                            <li>
                                Det er en vanskelig proces at bruge HTML og CSS til mere end de er egnet til (ibid).
                            </li>
                            <li>
                                Float og clear som er den gamle måde at gøre det på er forældet og ses som at værende ”trial and error” (ibid).
                            </li>
                            <li>
                                CSS Flexbox er godt og responsivt. Men er kun 1-dimensionel (ibid).
                            </li>
                            <li>
                                Man kan lave mere end et grid på samme side og man kan lave grids inde i en grid (embeddet grids) (Østergaard, 2020).
                            </li>
                        </ul>
                    </section>
                </section>
                
                <section id="to-metoder-grid">
                    
                    <section id="metoder-grid-intro">
                        <h2 class="overskrift"></h2>
                        <p class="body-text">
                            For at starte et grid på et element skal man skrive:
                            Selector { display: grid; }
                        </p>
                        
                        <p class="body-text">
                            Der findes to metoder til hvordan man laver grid på CSS (Østergaard, 2020).
                        </p>
                    </section>
                    
                    <section id="metode-et-grid">
                        <section id="metode-et-intro">
                            <h3 class="underoverskrift">Grid-template</h3>
                            <p class="body-text" >
                             Dette eksempel kommer fra en øvelse jeg lavet på studiet med <a href="http://10850.web.eadania.dk/grid-template-area/ovelse4.html" target="_blank" >Grid Template Areas, Øvelse 4</a>
                            </p>
                        </section>
                        
                        <section id="grid-areas">
                            <p class="body-text">
                                1. Man vælger sine elementer i CSS som man ville placere i sit grid ved at give dem et grid-area (Østergaard, 2020):
                            </p>
                            <div class="background-icons-kodning">
                                <a href="http://10850.web.eadania.dk/grid-template-area/ovelse4.html" target="_blank" class="pdf-link">Grid Template Area Øvelse 4</a>
                                <img src="kodning/css/grid/gridareas.png" id="gridareas-img">
                                
                            </div>
                            
                            <p class="body-text">
                                Dette siger at:
                            </p>
                            
                            <ul class="liste">
                                <li>
                                    felt1 hedder a
                                </li>
                                <li>
                                    felt4 hedder b
                                </li>
                                <li>
                                    felt3 hedder c
                                </li>
                                <li>
                                    felt5 hedder d
                                </li>
                                <li>
                                    felt2 hedder e
                                </li>
                                <li>
                                    felt6 hedder f
                                </li>
                                <li>
                                    felt5 hedder g
                                </li>
                                <li>
                                    felt8 hedder h
                                </li>
                            </ul>
                        </section>
                        
                        
                        <section id="grid-template">
                            <p class="body-text">
                                2. Så tager man det stor forældre element eller container som indeholder alle dine grid-areas (ibid). Hvor man laver en grid-template (ibid):
                            </p>
                            <div class="background-icons-kodning">
                                <a href="http://10850.web.eadania.dk/grid-template-area/ovelse4.html" target="_blank" class="pdf-link">Grid Template Area Øvelse 4</a>
                                <img src="kodning/css/grid/gridtemplate.png" id="gridtemplate-areas">
                            </div>
                            <p class="body-text">
                                Dette siger at:
                            </p>

                            <ul class="liste">
                                <li>
                                    felt1 fylder hele første række 
                                </li>
                                <li>
                                    felt4 fylder 1fr i venstre side, på anden række
                                </li>
                                <li>
                                    felt3 fylder 4fr i midten af anden række
                                </li>
                                <li>
                                    felt5 fylder 1fr til højre i anden række
                                </li>
                                <li>
                                    felt2 fylder 1fr i venstre side, på tredje række
                                </li>
                                <li>
                                    felt6 fylder 4fr i midten, på tredje række
                                </li>
                                <li>
                                    felt5 fylder 1fr i højre side, på tredje række
                                </li>
                                <li>
                                    felt8 fylder hele sidste række
                                </li>
                            </ul>
                        </section>
                        
                        <img src="kodning/css/grid/css-grid-screen.jpg" id="grid-screen-img">
                        <a href="http://10850.web.eadania.dk/grid-template-area/ovelse4.html" target="_blank" class="pdf-link">Grid Template Area Øvelse 4</a>
                    </section>
                    
                    <section id="metode-to-grid">
                        <h3 class="underoverskrift">Grid start og slut</h3>
                        <p class="body-text">
                            Den anden metode for at lave grids er ved at tage et element og give den en position via properties (Østergaard, 2020):
                        </p>
                         <table class="usability-table">
                            <tr>
                                <th>Value</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>Grid-column-start </td>
                                <td>angiver en startlinje horisontalt (ibid).</td>
                            </tr>

                            <tr>
                                <td>Grid-column-end </td>
                                <td>angiver en slutlinje horisontalt (ibid).</td>
                            </tr>

                            <tr>
                                <td>Grid-row-start </td>
                                <td>angiver en startlinje vertikalt (ibid).</td>
                            </tr>

                            <tr>
                                <td>Grid-row-end </td>
                                <td>angiver en slutlinje vertikalt (ibid).</td>
                            </tr>
                        </table>
                        
                        <p class="body-text">
                            Det er tungt at ændre i. Især når man arbejder med en hel side med flere elementer der skal placeres (ibid).
                        </p>
                    </section>
                </section>
        
                <section id="hvad-fik-jeg-grid">
                    <h2 class="overskrift">Min udvikling med CSS grid</h2>
                    <p class="body-text">
                        Jeg har aldrig hørt om CSS grid før jeg kom på studiet og troede det ville være sindsygt kompliceret at have at gøre med. Men til min overraskelse var det et meget simpelt og intuitivt system. Jeg fandt nemt at forstå på grund af de simple øvelser vi havde på dagen vi lærte om responsivt design.
                    </p>
                    
                    <p class="body-text">
                        Jeg blev bedre og bedre til at bruge CSS grid, fordi jeg øvet mig på det meget derhjemme når jeg lavede hjemmesider som K3 arbejde og det har givet mig en dybere forståelse for hvordan grid virker og hvad mulgiheder den giver til layout design.
                    </p>
                    
                    <p class="body-text">
                        Det er faktisk kommet så langt at jeg kan kigge på en wireframe og med det samme se hvordan jeg ville stille det op i css grid. Sådan en forståelse for grid troede jeg ikke jeg vil få da jeg startet, men de simple øvelser og mit K3 arbejder har hjulpet mig dertil. Der har selvfølgelig også været problemer for mig med CSS grid, men jeg har hvergang fundet en løsning som lærte mig mere om CSS grid og forbedret mine kompetencer med CSS.
                    </p>
                </section>
                
                
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            Østergaard, N., 15. september 2020. LAYOUTSTRATEGIER FOR WEBDESIGN. [Online] 
                            Available at: <a href="kodning/css/grid/responsive_i_praksis.pdf" target="_blank">https://eadania.mrooms.net/</a> 
                            [Senest hentet eller vist den 9 december 2020].
                        </li>
                        <li>
                            Østergaard, N., 15. september 2020. Webudvikling vil ikke være det samme efter.... [Online] 
                            Available at: <a href="kodning/css/grid/Grids2.pdf">https://eadania.mrooms.net/</a> 
                            [Senest hentet eller vist den 9 december 2020].
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
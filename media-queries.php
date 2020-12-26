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
    <body class="media-queries-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
             <?php include 'undermenu-css.inc' ?>
        
            <div id="mitgrid-media-queries">
                
                <h1 class="titel">&#64;media i CSS</h1>
                
                <section id="media-queries-css"> 
                    <section id="media-queries-intro">
                        <p class="body-text">
                            &#64;media er en regel i CSS som bruges til at lave breakpoints til forskellige skærmstørrelser, som gør at alt css styling som skrives indenfor det breakpoints kun aktivere når regelen for skærmstørrelsen er opfyldt (W3schools, 2020).
                        </p>
                        
                        <p class="body-text">
                           Man kan bruge det til regler af:
                        </p>
                        
                        <ul class="liste">
                            <li>
                                Width og height af ens viewport (ibid).
                            </li>
                            <li>
                                Width og height af ens enhed (ibid).
                            </li>
                            <li>
                                Orientation af ens enhed så om det er landscape eller portrait mode (ibid).
                            </li>
                            <li>
                                Resolution (ibid).
                            </li>
                            <li>
                                En populær måde at lave et fuldt ud responsivt webdesign (ibid).
                            </li>
                        </ul>
                    </section>
                </section>
        
        
                <section id="softbites-media">
                    <section id="softbites-break-mobil" class="background-icons-kodning">
                        <img src="kodning/css/mediaqueries/breakpointtilgridskode2.png" id="media1-kode">
                        <img src="kodning/css/mediaqueries/breakpointtilgrids2.png" id="media1-screen">
                    </section>
                    
                    
                    <section id="softbites-break-desktop">
                        <img src="kodning/css/mediaqueries/breakpointtilgridskode1.png" id="media2-kode">
                        <img src="kodning/css/mediaqueries/breakpointtilgrids.png" id="media2-screen">
                    </section>
                </section>
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            W3schools, 2020. CSS @media Rule. [Online] 
                            Available at:  <a href="https://www.w3schools.com/cssref/css3_pr_mediaquery.asp" target="_blank">https://www.w3schools.com/cssref/css3_pr_mediaquery.asp</a>
                            [Senest hentet eller vist den 10 december 2020].
                        </li>
                        <li>
                            Rijna, D., Andreasen. F. I. N. &#38; Christensen, H. M. L., 2020. Soft Bites. [Online] 
                            Available at: <a href="http://10850.web.eadania.dk/softbites2/index.html" target="_blank">http://10850.web.eadania.dk/softbites2/index.html</a>
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
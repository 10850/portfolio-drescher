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
    <body class="adressering-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
        
        <?php include 'undermenu-html.inc' ?>
            
            <div id="mitgrid-adressering" class="background-icons-kodning">
                <h1 class="titel">Adressering</h1>
        
                <section id="relativ-adressering">
                    <h2 class="overskrift">Relativ adressering</h2>
                    <p class="body-text">
                        Relativ adressering er når man linker til sider som ligger lokalt i dine mapper, så du linker til andre HTML-filer eller filer (billeder og video) (W3schools, 2020). Eksempel på linking til relative sider ville være:
                    </p>
                    
                    <h4 class="sub-skrift">Relativ adressering fra dette læringsporfolio</h4>
                    <img src="kodning/adressering/relativ.png" alt="eksempel på relativ adressering" id="relativ-img">
                    <p class="body-text">
                        Dette er linket oppe i menuen til Design Thinking, hvor jeg har brugt relativ adressering.
                    </p>
                </section> <!-- relativ -->
                
                <section id="absolut-adressering">
                    <h2 class="overskrift">Absolut adressering</h2>
                    <p class="body-text">
                        Absolut adressering er når man linker til sider som ligger eksternt fra dit lokale drev, så du linker til andre sider/content på world wide web(www) (W3schools, 2020). Eksempel på linking til relative sider ville være:
                    </p>
                    
                    <h4 class="sub-skrift">Absolut addressering fra One page projektet</h4>
                    <img src="kodning/adressering/absolut.png" alt="eksempel på absolut adressering" id="absolut-img">
                    <p class="body-text">
                        <a href="http://10850.web.eadania.dk/softbites2/index.html">Du kan gå til min One page der omhandler Soft Bites, og prøve at trykke på Køb nu knappen der linker til nemlig.dk</a>
                    </p>
                </section> <!-- absolut -->
        
        
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            W3schools, 2020. HTML File Paths. [Online] 
                            Available at: <a href="https://www.w3schools.com/html/html_filepaths.asp" target="_blank">https://www.w3schools.com/html/html_filepaths.asp</a> 
                            [Senest hentet eller vist den 8 december 2020].
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
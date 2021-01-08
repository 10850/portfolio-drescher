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
    <body class="boxmodel-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
        
            <?php include 'undermenu-css.inc' ?>
            
            <div id="mitgrid-boxmodellen">
                
                <h1 class="titel"> Boxmodellen</h1>
        
        
                <section id="boxmodellen">
                    <p class="body-text" id="intro-boxmodel">
                        Modellen beskriver hvordan HTML elementer repræsenteres som kasser og dette gælder for alle elementer man arbejder med i CSS (W3schools, 2020).
                    </p>
                    
                    <img src="kodning/css/boxmodel/boxmodel.jpg" alt="billed af boxmodellen fra W3Schools" id="boxmodel-img">
                    
                    <section id="boxmodel-elementer">
                        <p class="body-text">
                        <strong>Modellen beskriver hvordan HTML elementer repræsenteres som kasser og dette gælder for alle elementer man arbejder med i CSS (W3schools, 2020).</strong>
                        </p>

                        <ul class="liste" id="box-elements">
                            <li>
                                Content: indholdet i elementet på HTML (W3schools, 2020).
                            </li>
                            <li>
                                Padding: som defineres af det space som er mellem padding og content (ibid).
                            </li>
                            <li>
                                Border: rammen uden om elementet og dens padding (ibid).
                            </li>
                            <li>
                                Margin: som defineres af det space som er mellem hele         elementets kasse og andre elementer på din side (ibid).
                            </li>
                        </ul>
                    </section>
                </section>
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            W3schools, 2020. CSS Box Model. [Online] 
                            Available at: <a href="https://www.w3schools.com/css/css_boxmodel.asp" target="_blank">https://www.w3schools.com/css/css_boxmodel.asp</a>
                            [Senest hentet eller vist den 4 december 2020].
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
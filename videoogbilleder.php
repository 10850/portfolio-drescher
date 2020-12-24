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
    <body class="videoogimg-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
            <div id="mitgrid-videoogimg">
                
                <h1 class="titel">Video og Billeder</h1>
        
                <section id="video-html">
                    
                    <h2 class="overskrift">To metoder til indsætning af videoer</h2>
                    
                    <section class="mt" id="video-fil-input">
                        <h3 class="underoverskrift">Lokal videofil</h3>
                        
                        <p class="body-text">
                            Videoer som ligger som en lokal fil i mappen sættes ind via video tagget og source tagget i HTML (Nautrup & Mikkelsen, 2020). Dette brugte jeg i mit portfolio til at indsætte denne løbehjulsvideo under Videoproduktion siden:
                        </p>
                        
                        <img src="kodning/videoogimg/lokal-video-kode.jpg" alt="kode til at indsætte en lokal videofil i HTML" id="lokalvideo-kode">
                        
                        <video id="scootvideo-eksempel" width="1080px" height="1350px" controls loop>
                            <source src="video/ScooterEdit.mp4" type="video/mp4">
                        </video>
                        
                        
                        
                        <p class="body-text">
                            Man bruger video tagget til at semantisk vist fortælle at det er en video og til at give videoen controls på siden som at start og stoppe, skrue op og ned for lyden og se på fuld skærm (Nautrup & Mikkelsen, 2020). 
                        </p>
                        
                        <p class="body-text">
                            Source bruges så til at linke videoen til HTML’en (Nautrup & Mikkelsen, 2020).
                        </p>
                    </section>
                    
                    <section class="mt" id="video-embedded">
                        <h3 class="underoverskrift">Embedded video</h3>
                        
                        <p class="body-text">
                            Man kan med fordel også linke til en video som allerede ligger på internettet i for eksempel youtube eller instagram (Nautrup & Mikkelsen, 2020). Hvor de giver en noget HTML kode som man kan copy + paste (ibid):
                        </p>
                        
                        <img src="kodning/videoogimg/embeddedvideo-kode.png" alt="eksempel på embedded kode til en youtube video. På hundesiden." id="embedded-kode">
                        
                        <img src="kodning/videoogimg/embeddedvideo-screen.jpg" alt="screenshot af hundesiden hvor videoen ligger" id="embedded-screen">
                        
                        <p class="body-text">
                            Man kan også lave ændringer på for eksempel de forskellige controls videoen har (Nautrup & Mikkelsen, 2020):
                        </p>
                        
                    </section>
                </section>
        
        
        
        
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
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
        
        <?php include 'undermenu-html.inc' ?>
            
            <div id="mitgrid-videoogimg">
                
                <h1 class="titel">Video og Billeder</h1>
        
                <section id="video-html">                    
                    <section class="mt" id="video-fil-input">
                        <h3 class="underoverskrift">Lokal videofil</h3>
                        
                        <p class="body-text">
                            Videoer som ligger som en lokal fil i mappen sættes ind via video tagget og source tagget i HTML (Nautrup &#38; Mikkelsen, 2020). Dette brugte jeg i mit portfolio til at indsætte denne løbehjulsvideo under Videoproduktion siden:
                        </p>
                        
                        <div class="background-icons-kodning">
                            <img src="kodning/videoogimg/lokal-video-kode.png" alt="kode til at indsætte en lokal videofil i HTML" id="lokalvideo-kode">

                            <video id="scootvideo-eksempel" width="1080px" height="1350px" controls loop>
                                <source src="video/ScooterEdit.mp4" type="video/mp4">
                            </video>
                        </div>
                        
                        
                        <p class="body-text">
                            Man bruger video tagget til at semantisk vist fortælle at det er en video og til at give videoen controls på siden som at start og stoppe, skrue op og ned for lyden og se på fuld skærm (Nautrup &#38; Mikkelsen, 2020). 
                        </p>
                        
                        <p class="body-text">
                            Source bruges så til at linke videoen til HTML’en (Nautrup &#38; Mikkelsen, 2020).
                        </p>
                    </section>
                    
                    <section class="mt" id="video-embedded">
                        <h3 class="underoverskrift">Embedded video</h3>
                        
                        <p class="body-text">
                            Man kan med fordel også linke til en video som allerede ligger på internettet i for eksempel youtube eller instagram (Nautrup &#38; Mikkelsen, 2020). Hvor de giver en noget HTML kode som man kan copy + paste (ibid):
                        </p>
                        <div class="background-icons-kodning">
                            <img src="kodning/videoogimg/iframe.png" alt="eksempel på embedded kode til en youtube video. På hundesiden." id="embedded-kode">

                            <img src="kodning/videoogimg/embeddedvideo-screen.jpg" alt="screenshot af hundesiden hvor videoen ligger" id="embedded-screen">
                        </div>
                        <p class="body-text">
                            Man kan også lave ændringer på for eksempel de forskellige controls videoen har (Nautrup &#38; Mikkelsen, 2020):
                        </p>
                        
                    </section>
                </section>
                
                <section id="billeder-html">
                    <h2 class="overskrift">Indsæt billeder i HTML</h2>
                    <p class="body-text">
                       Billeder bliver sat ind på siden via HTML-tagget &#60;img&#62; (W3schools, 2020). Man linker til et billede, enten internt fra din lokale mappe eller eksternt fra browseren, det gøres ved brug af src-attribut (ibid).
                    </p>
                    
                    <p class="body-text">
                        For SEO sætter man også en alternativ tekst ind til hvis billedet ikke viser sig, det gøres med alt-attributten (W3schools, 2020):
                    </p>
                    
                    <figure id="insert-img-figure" class="background-icons-kodning">
                        <img src="kodning/videoogimg/billeder-kode.jpg" id="kode-imginsert">
                    
                        <img src="kodning/videoogimg/billeder-screen.png" id="imginsert-screen">
                    </figure>
                    

                </section>
        
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            Nautrup, S. M. &#38; Mikkelsen, D. N., 2020. Sådan indsætter du en video. [Online] 
                            Available at: <a href="http://10763.apache.eadania.dk/video/video.html" target="_blank">http://10763.apache.eadania.dk/video/video.html</a>
                            [Senest hentet eller vist den 7 december 2020].
                        </li>
                        <li>
                            W3schools, 2020. HTML Images. [Online] 
                            Available at: <a href="https://www.w3schools.com/html/html_images.asp" target="_blank">https://www.w3schools.com/html/html_images.asp</a>
                            [Senest hentet eller vist den 11 december 2020].
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
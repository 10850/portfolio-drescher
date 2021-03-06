<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drescher Rijna's Læringsportfolio for 1.semester 2020, som mulitmediedesigner. Siden fortæller om alt jeg har lært gennem studiet og viser mine fremskridt og projekter...">
    <meta name="keywords" content="Multimedidesigner, 1. semester, læringsportfolio, Drescher Rijna, Design Thinking, Kodning, Kommunikation, Usability, Design, Videoproduktion, Fotografering, Refleksion, Projekter, Studieprojekt, Eksamensprojekt">
    <meta name="author" content="Drescher Rijna">
    <title>Grundlæggende HTML - Læringsportfolio</title>
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
    <body class="attributter-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
        
        <button class="darklight-switch" onclick="myFunction()">Dark/Light Mode</button>
            
            <?php include 'undermenu-html.inc' ?>
        
            
            <div id="mitgrid-attributter">
                
                <h1 class="titel">Grundlæggende HTML</h1>
        
                <section id="anatomi-html">
                    <section id="anatomi-html-intro">
                        <h2 class="overskrift">HTML Syntaks</h2>
                        <p class="body-text">
                            Alt HTML-kode består af et element, start tag, end tag, attribute, value og content (W3schools, 2020). Dette kan kaldes for HTML’s anatomi som kan ses på illustrationen herunder (ibid):
                        </p>
                    </section>
                    
                    <section id="html-elementer-anatomi">
                        <img src="kodning/anatomi/html-anatomy.png" alt="billed af HTML anatomi" id="html-anatomi-img">
                        
                        <h4 class="sub-skrift">Element:</h4>
                        <p class="body-text">
                            Hele koden, samt hvilken slags tag det er, så om det er en paragraph(p), en section(section) eller et image(img) osv (W3schools, 2020).
                        </p>
                        
                        <h4 class="sub-skrift">Start og end tag:</h4>
                        <p class="body-text">
                            Start tagget indikerer begyndelsen af noget HTML-kode, mens slut tagget fortæller hvornår HTML-koden stopper (W3schools, 2020).
                        </p>
                        
                        <h4 class="sub-skrift">Attribute:</h4>
                        <p class="body-text">
                            Attribute er en måde at give et HTML en identitet/gruppe, som er rigtig godt at bruge til når man skal arbejde med CSS (W3schools, 2020). Der findes to måde at give en attribute:
                        </p>
                        
                        
                        <p class="body-text">
                            <strong>Class</strong> - en attribute som kan bruges flere gange på forskellige elementer og derved er i samme gruppe (W3schools, 2020). Det bruges når man vil lave noget CSS og man ved at flere elementer skal bruge det samme CSS-styling (ibid). Så behøver man ikke gøre det flere gange igen og igen (ibid).
                        </p>
                        
                        
                        <p class="body-text">
                            <strong>Id</strong> - en attribute som kun kan bruges en gang, det bruges til at gøre et element til et individ/noget unikt (W3schools, 2020). Det bruges til når man vil lave noget CSS på kun et element, men ikke vil påvirke de andre elementer (ibid).
                        </p>
                        
                        <h4 class="sub-skrift">Value:</h4>
                        <p class="body-text">
                            Value er den værdi/navn du giver dit element og det er en god ide at kalde det noget som har sammenhæng med hvad elementet er og er meningsfuldt (W3schools, 2020).
                        </p>
                        
                        <h4 class="sub-skrift">Content:</h4>
                        <p class="body-text">
                            Content er indholdet du putter ind i mellem start- og end tagget, som tekst eller et billede (W3schools, 2020).
                        </p>
                    </section>
                </section>
                
                <section id="kode-skikke">
                    <h2 class="overskrift">God kodeskikke</h2>
                    <p class="body-text">
                        I verden af kodning findes der god og dårlige kodeskikke (Østergaard, 2020). Det er vigtigt at når man koder at man holder fast på gode kodeskikke (ibid). Ikke kun for at andre programmør nemt kan læse, forstå og overskue din kode, men også for at man selv kan have gode overblik over sin kode når man går tilbage i sin kode for at for eksempel lave ændringer (ibid). God kodeskikke er:
                    </p>

                    <ul class="liste">
                        <li>
                            Brug af tabulering (ibid).
                        </li>
                        <li>
                            Kode med indrykninger (ibid).
                        </li>
                        <li>
                            Kodning med hensigstmæssige kommentarer (ibid).
                        </li>
                        <li>
                            Kode der giver god overblik (ibid).
                        </li>
                        <li>
                            Det gør din kode læselig for andre (ibid).
                        </li>
                    </ul>


                    <img src="kodning/kodeskikke/godskik.png" alt="billed af brackets hvor der er HTML der følger god kodeskikke" id="god-skikke-img">
                </section>
        
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            W3schools, 2020. HTML class Attribute. [Online] 
                            Available at: <a href="https://www.w3schools.com/html/html_classes.asp" target="_blank">https://www.w3schools.com/html/html_classes.asp</a>
                            [Senest hentet eller vist den 8 december 2020].
                        </li>
                        <li>
                            W3Schools, 2020. HTML Elements. [Online] 
                            Available at: <a href="https://www.w3schools.com/html/html_elements.asp" target="_blank">https://www.w3schools.com/html/html_elements.asp</a>
                            [Senest hentet eller vist den 8 december 2020].
                        </li>
                        <li>
                            W3schools, 2020. HTML id Attribute. [Online] 
                            Available at: <a href="https://www.w3schools.com/html/html_id.asp" target="_blank">https://www.w3schools.com/html/html_id.asp</a>
                            [Senest hentet eller vist den 11 december 2020].
                        </li>
                        <li>
                            Østergaard, N., 2020. HTML. [Online] 
                            Available at: <a href="kodning/pdf/Intro%20til%20HTML.pdf" target="_blank">https://eadania.mrooms.net/</a>
                            [Senest hentet eller vist den 2 december 2020].
                        </li>
                    </ul>
                </section>
            </div> <!-- MITGRID -->
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- darkmode scripts -->
        <script>
            function myFunction() {
                var element = document.body;
                element.classList.toggle("darkmode-ux");
            }
        </script>
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
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
    <body class="selectors-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
            <div id="mitgrid-selectors">
                
                <h1 class="titel">CSS Selectors og Syntaks</h1>
                
                <section id="hvadercss">
                    <section id="css-intro">
                        <h2 class="overskrift">CSS</h2>
                        <p class="body-text">
                            CSS står for Cascading Style Sheets, og et kodesprog til at style en HTML’s fremvisning på browseren (Østergaard, 2020). HTML understøtter også udseende, men formålet med CSS er at adskille funktionalitet/stuktur og design til deres egen arbejdsarealer, så det gør man ikke (ibid). 
                        </p>
                        <p class="body-text">
                            Derfor vil man som standard lave CSS i et eksternt dokument som man link til i sin HTML oppe i head (Østergaard, 2020). Det gør at man kan anvende det i flere HTML på en gang og sikrer ensartethed (ibid). Styles angives som rules, som kan navngives, og refereres i HTML, så et StyleSheet er simpelt sagt en samling af rules til en HTML (ibid).
                        </p>
                    </section>
                    
                    <section id="syntx-css" class="mt">
                        <h3 class="underoverskrift">CSS syntaks</h3>
                        
                        <p class="body-text">
                            CSS skrives op på en bestemt måde for at koden vil spille og for at serveren ved at det er CSS den arbejder med (W3schools, 2020). 
                        </p>
                        
                        <img src="kodning/css/selectors/css-syntax.png" alt="billed af illustration af css syntaks" id="css-syntax-img">
                        
                        <ol class="liste">
                            <li>
                                Først vælger man hvad der skal styles ved brug af Selectors (ibid).
                            </li>
                            <li>
                                Så laver man sin declaration start og slut også kaldt tuborg klammer, som skal indeholde de rules du sætter (ibid).
                            </li>
                            <li>
                                Man vælger en property som specificerer hvad man vil style på i det valgte HTML element (ibid).
                            </li>
                            <li>
                                Så er der en property/value separator, som adskiller property og value (ibid).
                            </li>
                            <li>
                                Efter den skriver man den value/værdi man vil give det givne HTML element i den property man har specificeret (ibid).
                            </li>
                            <li>
                                Man skal huske at slutte alt styling af med et semi-kolon også kaldt declaration separator, for ellers vil den næste linje af CSS ikke virke (ibid).
                            </li>
                        </ol>
                        
                    </section>
                </section>
        
                <section id="selectors-css">
                
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
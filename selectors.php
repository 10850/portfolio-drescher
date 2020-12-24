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
                    <section id="selectors-css-intro">
                        <h3 class="underoverskrift">Selectors</h3>
                        <p class="body-text">
                            I CSS findes der Selectors, pseudo selectors og strukturelle selectors (W3schools, 2020). Indenfor Selectors er der tre primære selectorer (ibid):
                        </p>
                    </section>
                    
                    <section id="selector-tags">
                        <h3 class="underoverskrift">Type/Element selector:</h3>
                        <p class="body-text">
                            Dette er almindelige HTML tags som p, h1, body osv. (W3schools, 2020).
                        </p>
                    </section>
                    
                    <section id="selector-id">
                        <h3 class="underoverskrift">ID selector:</h3>
                        <p class="body-text">
                            Bruges når det er et helt specifikt element vi vil style, dvs. man ikke kan have 2 af samme id (W3schools, 2020). 
                        </p>
                        <p class="body-text">
                            Denne form for selector er mulig via en id-attribut man give sit HTML element i HTML’en (ibid). 
                        </p>
                        <p class="body-text">
                            Bruges når et tag er mærket op med et id-attribut (&#60;section&#62; id=”selectors”>&#60;/section&#62;) (ibid).
                        </p>
                        <p class="body-text">
                            For at bruge denne selector skal man starte med et ”#” (#selectors {…}) (ibid). 
                        </p>
                    </section>
                    
                    <section id="selector-class">
                        <h3 class="underoverskrift">Class selector:</h3>
                        <p class="body-text">
                            Denne form for selector er mulig via en class-attribut man giver sit HTML element i HTML’en (W3schools, 2020).
                        </p>
                        <p class="body-text">
                            Bruges når man vil ramme flere elementer på en gang og styles ens (ibid).
                        </p>
                        <p class="body-text">
                            Bruges når tags er mærket med en class (&#60;section&#62; class=”selectors”>&#60;/section&#62;) (ibid).
                        </p>
                        <p class="body-text">
                            For at bruge denne selector skal man starte med et ”.” (.selectors{…}) (ibid).
                        </p>
                    </section>
                    
                    <section id="selector-struktur">
                        <h3 class="underoverskrift">Strukturelle selectors:</h3>
                        <p class="body-text">
                            Disse er også kaldt Combinator operators, og bruges til at vælge specifikke elementer inde i andre elementer, eksempelvis (W3schools, 2020):
                        </p>
                        <p class="body-text">
                            Nav a { color: yellow; } denne regel siger at anchor tags der ligger indenfor en &#60;nav&#62; vil være gule.
                        </p>
                        <p class="body-text">
                            Dvs. at for at man kan vælge en efterkommer af et andet element skal forældre elementet, som her var ”nav”, have en eller flere børn som er et anchor tag &#60;a&#62; (ibid).
                        </p>
                    </section>
                </section>
                
                <section id="psuedo-selector">
                    <section id="psuedo-selector-intro">
                    
                    </section>
                    
                    <section id="psuedo-selector-table">
                        <table class="usability-table">
                            <tr>
                                <th>Selector</th>
                                <th>Eksempel</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>:active</td>
                                <td>a:active (W3schools, 2020).</td>
                                <td>Vælger det aktive link (W3schools, 2020).</td>
                            </tr>

                            <tr>
                                <td>:first-child</td>
                                <td>p:first-child (ibid).</td>
                                <td>Vælge det første barn element i en parent (ibid).</td>
                            </tr>

                            <tr>
                                <td>:focus</td>
                                <td>input:focus (ibid).</td>
                                <td>Vælger det element som der er fokus på (ibid).</td>
                            </tr>

                            <tr>
                                <td>:hover</td>
                                <td>a:hover (ibid).</td>
                                <td>Vælger det element musen er over (ibid).</td>
                            </tr>

                            <tr>
                                <td>:link</td>
                                <td>a:link (ibid).</td>
                                <td>Vælge links der ikke er besøgte (ibid).</td>
                            </tr>

                            <tr>
                                <td>:nth-child(n)</td>
                                <td>p:nth-child(2) (ibid).</td>
                                <td>Vælger det barn man specificerer ved nummer (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>:visited</td>
                                <td>a:visited (ibid).</td>
                                <td>Vælger besøgte links (ibid).</td>
                            </tr>
                        </table>
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
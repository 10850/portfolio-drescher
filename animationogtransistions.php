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
    <body class="animation-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
            <div id="mitgrid-animation">
                
                <h1 class="titel">Transition og Animation</h1>
                
                <section id="transition-css"> 
                    <section id="transition-intro">
                        <h2 class="overskrift">Transition</h2>
                        <p class="body-text">
                            Transition property’en bruges til at definere transistion for HTML elementer (W3schools, 2020). Syntaksen for Transition property’en er:
                        </p>
                        
                        <p class="body-text">
                           transition: property duration timing-function delay; (ibid).
                        </p>
                        
                        <p class="body-text">
                           VIGTIGT: Duration skal altid defineres for ellers er den 0 sekunder by default (ibid).
                        </p>
                        
                        <p class="body-text">
                           Under transition property’en er der forskellige values som man kan ændre på og lave bestemte regler for (ibid).
                        </p>
                    </section>
                    
                    <section class="mt" id="transition-table">
                        <h3 class="underoverskrift">Transition values</h3>
                        <table class="usability-table">
                            <tr>
                                <th>Value</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>Transition-property</td>
                                <td>Specificere hvilken CSS property transitionen har indflydelse på (ibid).</td>
                            </tr>

                            <tr>
                                <td>Transition-duration</td>
                                <td>Specificere hvor lang tid transitionen skal vare (ibid).</td>
                            </tr>

                            <tr>
                                <td>Transition-timing-function</td>
                                <td>Specificere fart kurven for transitionen så om den skal ease-in, ease-out, ease-in-out osv. (ibid).</td>
                            </tr>

                            <tr>
                                <td>Transition-delay</td>
                                <td>Specificere hvornår transitionen skal starte. Er 0s by default (ibid).</td>
                            </tr>
                        </table>
                    </section>
                </section>
        
                
                <section id="animation-css"> 
                    <section id="animation-intro">
                        <h2 class="overskrift">Animation</h2>
                        <p class="body-text">
                            Animation property’en bruges til at lave animation og under denne shorthand er der flere forskellige property-values man kan style med (W3schools, 2020). Syntaksen for animation er:
                        </p>
                        
                        <p class="body-text">
                           animation: name duration timing-function delay iteration-count direction fill-mode play-state; (ibid).
                        </p>
                    </section>
                    
                    <section class="mt" id="animation-table">
                        <h3 class="underoverskrift">Animation values</h3>
                        <table class="usability-table">
                            <tr>
                                <th>Value</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>Animation-name</td>
                                <td>Giver navnet til keyframen du vil forbinde til selectoren (ibid).</td>
                            </tr>

                            <tr>
                                <td>Animation-duration</td>
                                <td>Specificere hvor lang tid animationen tager (ibid).</td>
                            </tr>

                            <tr>
                                <td>Animation-timing-function</td>
                                <td>Specificere fart kurven på animationen (ibid).</td>
                            </tr>

                            <tr>
                                <td>Animation-delay</td>
                                <td>Specificere hvornår animationen starter. Er 0 by default (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>Animation-iteration-count</td>
                                <td>Bestemmer hvor mange gange animationen gentager sig (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>Animation-direction</td>
                                <td>Bestemmer om animationen spiller i reverse eller alternative cyklusser (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>Animation-fill-mode</td>
                                <td>Bestemmer hvilke values animationen beholder når animationen slutter og hvad den har når den starter (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>Animation-play-state</td>
                                <td>Bestemmer om animationen er spiller eller er sat på pause (ibid).</td>
                            </tr>
                        </table>
                    </section>
                </section>
        
                 <section id="keyframes-css"> 
                     <section id="keyframe-intro">
                        <h2 class="overskrift">&#64;keyframes</h2>
                        <p class="body-text">
                            @keyframe reglen bruges til at lave meget specificeret animation med forskellige animation breakpoints der går fra fra 0 til 100%. syntaksen er (W3schools, 2020):
                        </p>
                        
                        <p class="body-text">
                           @keyframes animationname {keyframes-selector {css-styles;}} (ibid).
                        </p>
                    </section>
                     
                    <section class="mt" id="keyframes-table">
                        <h3 class="underoverskrift">&#64;keyframes values</h3>
                        <table class="usability-table">
                            <tr>
                                <th>Value</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>Animationname</td>
                                <td>Skal med. Definere navnet på animationen (ibid).</td>
                            </tr>

                            <tr>
                                <td>Keyframes-selector</td>
                                <td>Skal med. Procent dele af animationens længde fra 0 til 100% (ibid).</td>
                            </tr>

                            <tr>
                                <td>CSS-style</td>
                                <td>Skal med (ibid). Bestemmer hvilke CSS style properties der bruges i animationen (ibid).</td>
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
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
    <body class="display-psoition-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
            <div id="mitgrid-display-position">
                
                <h1 class="titel">Display og Positionering i CSS</h1>
                
                <section id="display"> 
                    <section id="display-intro">
                        <h2 class="overskrift">Display</h2>
                        <p class="body-text">
                            Display property’en definere hvordan et valgt element fremvises på skærmen, som standard er display sat til (W3schools, 2020):
                        </p>
                        
                        <p class="body-text">
                           display: block;
                        </p>
                    </section>
                    
                    <section class="mt" id="display-table">
                        <h3 class="underoverskrift">Display styles/values</h3>
                        <table class="usability-table">
                            <tr>
                                <th>Style</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>Inline</td>
                                <td>Placere sig horisontalt efter hinanden (W3schools, 2020).</td>
                            </tr>

                            <tr>
                                <td>Block</td>
                                <td>Placere sig efter hinanden i stakke (ibid).</td>
                            </tr>

                            <tr>
                                <td>Grid</td>
                                <td>Fremviser elementer som grid container (ibid).</td>
                            </tr>

                            <tr>
                                <td>Inline-block</td>
                                <td>Placere sig horisontalt I en block container (ibid).</td>
                            </tr>

                            <tr>
                                <td>Inline-flex</td>
                                <td>Placere sig horisontalt I en flex container (ibid).</td>
                            </tr>

                            <tr>
                                <td>None</td>
                                <td>Fjerne et element fra skærmen (ibid).</td>
                            </tr>
                        </table>
                    </section>
                </section>
        
                
                <section id="position"> 
                    <section id="position-intro">
                        <h2 class="overskrift">Positionering</h2>
                        <p class="body-text">
                            Position property’en I CSS definerer positionen af et valgt element (W3schools, 2020).
                        </p>
                    </section>
                    
                    <section class="mt" id="position-table">
                        <h3 class="underoverskrift">Positionering styles/values</h3>
                        <table class="usability-table">
                            <tr>
                                <th>Style</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>Relative</td>
                                <td>Positioneret relativt til sin position i page flowet (ibid).</td>
                            </tr>

                            <tr>
                                <td>Absolute</td>
                                <td>Positioneret som et absolut element, der står for sig selv og er ikke med i page flowet (ibid).</td>
                            </tr>

                            <tr>
                                <td>Fixed</td>
                                <td>Står i samme position heletiden (ibid).</td>
                            </tr>

                            <tr>
                                <td>Sticky</td>
                                <td>Placeret iforhold til brugerens scroll position (ibid).</td>
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
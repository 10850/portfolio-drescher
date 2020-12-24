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
    <body class="border-shadow-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
            <div id="mitgrid-border-shadow">
                
                <h1 class="titel">Borders og Shadows</h1>
                
                <section id="borders-css">
                    
                    <section id="border-intro">
                        <h2 class="overskrift">Borders</h2>
                        <p class="body-text">
                            Ifølge boxmodellen har alle elementer en boks som hedder border, som er en ramme om elementet (W3schools, 2020). Denne kan styles ved brug af border property’en.
                        </p>
                    </section>
                    
                    <section class="mt" id="defireproperty">
                        <h3 class="underoverskrift">De fire primære properties for borders</h3>
                        <p class="body-text">
                            <strong>Border-width:</strong> tykkelse af borderen, normalt i pixels (W3schools, 2020).
                        </p>

                        <p class="body-text">
                            <strong>Border-radius:</strong> radiussen på kanterne af borderen, normalt i pixels (ibid).
                        </p>

                        <p class="body-text">
                            <strong>Border-color:</strong> farven på borderen (ibid).
                        </p>

                        <p class="body-text">
                            <strong>Border-style:</strong> hvilken slags border man vil have - så for eksempel section {border-style: dotted;} (ibid).
                        </p>
                    </section>
                    
                    <section class="mt" id="border-styles-table">
                        <h3 class="underoverskrift">Alle border styles</h3>
                        <table class="usability-table">
                            <tr>
                                <th>Style</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>Dotted</td>
                                <td>Definere en dotted border (W3schools, 2020).</td>
                            </tr>

                            <tr>
                                <td>Dashed</td>
                                <td>Definere en border med dashes (ibid).</td>
                            </tr>

                            <tr>
                                <td>Solid</td>
                                <td>Definere en solid border (standard) (ibid).</td>
                            </tr>

                            <tr>
                                <td>Double</td>
                                <td>Definere en double border (ibid).</td>
                            </tr>

                            <tr>
                                <td>Groove</td>
                                <td>Definere en form for 3D border (ibid).</td>
                            </tr>

                            <tr>
                                <td>Ridge</td>
                                <td>Definere en form for 3D border (ibid).</td>
                            </tr>

                            <tr>
                                <td>Inset</td>
                                <td>Definere en form for 3D border (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>Outset</td>
                                <td>Definere en form for 3D border (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>None</td>
                                <td>Definere at der ikke skal være en border (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>Hidden</td>
                                <td>Definere at en border skal skjules (ibid).</td>
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
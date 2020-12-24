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
        
             <?php include 'undermenu-css.inc' ?>
            
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
                
                <section id="shadow-css">
                    <section id="shadow-intro">
                        <h2 class="overskrift">Shadow</h2>
                        <p class="body-text">
                            Shadow er en Property som bruges til box og tekst (W3schools, 2020).
                        </p>
                    </section>
                
                    <section id="shadowbox-table">
                        <table class="usability-table" id="box-shadow-table-change">
                            <tr>
                                <th>Value</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>none</td>
                                <td>Betyder der ikke vises en skygge. (Standard tilstand) (W3schools, 2020).</td>
                            </tr>

                            <tr>
                                <td>h-offset</td>
                                <td>Skal skrives. Definere offsettet af skyggen på den horisontale plan. Positiv værdi putter skyggen til højre. Negativ værdi putter den til venstre (ibid).</td>
                            </tr>

                            <tr>
                                <td>v-offset</td>
                                <td>Skal skrives. Definere offsettet af skyggen på den vertikale plan. Positiv værdi putter skyggen under boksen. Negativ værdi putter den over boksen (ibid).</td>
                            </tr>

                            <tr>
                                <td>blur</td>
                                <td>Definer radius på skyggens blur. Jo større værdi desto mere blur (ibid).</td>
                            </tr>

                            <tr>
                                <td>spread</td>
                                <td>Definere hvor stor radius skyggens spreder sig med. Jo større værdi, desto større spread (ibid).</td>
                            </tr>

                            <tr>
                                <td>color</td>
                                <td>Definer farven på skyggen (ibid).</td>
                            </tr>

                            <tr>
                                <td>Inset</td>
                                <td>Ændre skyggen fra sin standarde tilstand, som en outer shadow til at den bliver en inner shadow (ibid).</td>
                            </tr>
                            
                            <tr>
                                <td>Initial </td>
                                <td>Sætter property’en til sin default value (ibid).</td>
                            </tr>
                        </table>
                    </section>
                    
                    <section id="shadowtext-table">
                        <h3 class="underoverskrift">Text-shadow</h3>
                        <table class="usability-table" >
                            <tr>
                                <th>Value</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>h-shadow</td>
                                <td>Denne skal skrives og definere skyggens position horisontalt (W3schools, 2020).</td>
                            </tr>

                            <tr>
                                <td>v-shadow</td>
                                <td>Denne skal skrives og definere skyggens position vertikalt (ibid).</td>
                            </tr>

                            <tr>
                                <td>Blur-radius</td>
                                <td>Definere hvor stor radiussen for en blur er. Som standard er den på 0 (ibid).</td>
                            </tr>

                            <tr>
                                <td>color</td>
                                <td>Definere farven på skyggen (ibid).</td>
                            </tr>

                            <tr>
                                <td>none</td>
                                <td>Standard value. Betyder der er ingen skygge(ibid).</td>
                            </tr>

                            <tr>
                                <td>initial</td>
                                <td>Sætter property’en til sin default value (ibid).</td>
                            </tr>
                        </table>
                    </section>
                </section>
                
                
                
        
                <section id="border-shadow-text-prakis">
                
                </section>
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            W3schools, 2020. CSS Borders. [Online] 
                            Available at: https://www.w3schools.com/css/css_border.asp
                            [Senest hentet eller vist den 4 december 2020].
                        </li>
                        <li>
                            W3schools, 2020. CSS Box Shadow. [Online] 
                            Available at: https://www.w3schools.com/css/css3_shadows_box.asp
                            [Senest hentet eller vist den 8 december 2020].
                        </li>
                        <li>
                            W3schools, 2020. CSS Shadow Effects. [Online] 
                            Available at: https://www.w3schools.com/css/css3_shadows.asp
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
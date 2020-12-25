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
    <body class="background-property-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
        
             <?php include 'undermenu-css.inc' ?>
            
            <div id="mitgrid-background-property">
                
                <h1 class="titel">Background-Property</h1>
                
                <section id="background-intro">
                    <p class="body-text">
                        Background property’en giver mulighed for at man kan style på et valgt elements baggrund (Rijna &#38; Lank, 2020). Under det findes der forskellige property-values som man kan laver rules med (ibid):
                    </p>
                    
                    <table class="usability-table">
                        <tr>
                            <th>Value</th>
                            <th>Beskrivelse</th>
                        </tr>
                        
                        <tr>
                            <td>Background-color</td>
                            <td>Definere farven på baggrunden (W3schools, 2020).</td>
                        </tr>
                        
                        <tr>
                            <td>Background-image</td>
                            <td>Giver mulighed for at sætte et billede ind som baggrund (ibid).</td>
                        </tr>
                        
                        <tr>
                            <td>Background-origin</td>
                            <td>Specificere positionsområdet af et background-image (ibid).</td>
                        </tr>
                        
                        <tr>
                            <td>Background-position</td>
                            <td>Specificere hvilken position baggrundsbilledet har (ibid).</td>
                        </tr>
                        
                        <tr>
                            <td>Background-repeat</td>
                            <td>Specificere hvordan billedet repeater på siden (ibid).</td>
                        </tr>
                        
                        <tr>
                            <td>Background: linear-gradient</td>
                            <td>Funktion som definerer en linær gradient (W3schools, 2020).</td>
                        </tr>
                        
                        <tr>
                            <td>Background: radial-gradient</td>
                            <td>Funktion som definerer en radial gradient (ibid).</td>
                        </tr>
                    
                    </table>
                </section>
                
                <section id="radial-image">
                    <section id="radial-image-intro">
                        <h2 class="overskrift">Background-image + Radial gradient</h2>
                        <p class="body-text">
                            Ved hjælp af LinkedIn learning lærte jeg hvordan man kan kombinere linear gradient og et background-image til at laver en fed visuel illustration. <a href="http://10850.apache.eadania.dk/workshop/kombination/kombination.html">Og jeg har lavet en siden om Background property'en i CSS hvor man kan se mere om backgrounds på CSS.</a> 
                        </p>
                    </section>
                    
                    <figure id="radial-images">
                        <img src="kodning/css/background/whitmanstep5kode.JPG" id="whitman-kode">
                        
                        <img src="kodning/css/background/startwhitman.JPG" id="whitman-start">
                        
                        <img src="kodning/css/background/whitmanstep5billed.JPG" id="whitman-slut">
                    </figure>
                    
                    <section id="radial-image-steps">
                        <section id="radial-image-steps1">
                            <h4 class="sub-skrift">Step 1</h4>
                            <p class="body-text">
                                Vi starter denne her gang med at lave et radial gradient ved brug af RGBA sammen med Background: radial-gradient() i CSS (Rijna & Lank, 2020).
                            </p>
                        </section>

                        <section id="radial-image-steps2">
                            <h4 class="sub-skrift">Step 2</h4>
                            <p class="body-text">
                                Efterfølgende putter vi en radial gradient på og den putter vi foran vores url() value (ibid).
                            </p>
                        </section>

                        <section id="radial-image-steps3">
                            <h4 class="sub-skrift">Step 3</h4>
                            <p class="body-text">
                                Derefter skal man sørger for at billedet ikke repeater ved brug af no-repeat eftter url() valuen, uden komma. Og selv hvis det ikke er nødvendigt (fordi ens billed er stort nok), så er det en god ting at gøre, både af god skikke og for at man har tjekket den boks af (ibid).
                            </p>
                        </section>

                        <section id="radial-image-steps4">
                            <h4 class="sub-skrift">Step 4</h4>
                            <p class="body-text">
                                Så definere vi hvilken position billedet skal have ved brug af positionsvaluene og i dette eksempel bruger vi bottom right, som vi skriver efter no-repeat uden komma imellem (ibid).
                            </p>
                        </section>
                        
                        <section id="radial-image-steps5">
                            <h4 class="sub-skrift">Step 5</h4>
                            <p class="body-text">
                                Til sidst definere vi størrelsen af billedet ved brug af procenttal og den skal altid lægge efter positionsvaluen med en slash imellem de to for at CSS kan registere det (ibid).
                            </p>
                        </section>
                    </section>
                </section>
                
                <section id="linear-image">
                    <section id="linear-image-intro">
                        <h2 class="overskrift">Background-image + Linear gradient</h2>
                        <p class="body-text">
                            Udover background-image kombineret med linear gradient, lærte jeg også ved hjælp af LinkedIn learning  hvordan man kan kombinere radial gradient og et background-image til at lave en fed visuel illustration. <a href="http://10850.apache.eadania.dk/workshop/kombination/kombination.html">Og jeg har lavet en siden om Background property'en i CSS hvor man kan se mere om backgrounds på CSS.</a> 
                        </p>
                    </section>
                    
                    <figure id="linear-images">
                        <img src="kodning/css/background/sonnet-step-4-kode.JPG" id="sonnet-kode">
                        
                        <img src="kodning/css/background/sonnet-step-1-billed.JPG" id="sonnet-start">
                        
                        <img src="kodning/css/background/sonnet-slut.JPG" id="sonnet-slut">
                    </figure>
                    
                    <section id="linear-image-steps">
                        <section id="linear-image-steps1">
                            <h4 class="sub-skrift">Step 1</h4>
                            <p class="body-text">
                                Først skal vi sætte billedet ind ved hjælp af Background-image: url(); (Rijna &#38; Lank, 2020).
                            </p>
                        </section>

                        <section id="linear-image-steps2">
                            <h4 class="sub-skrift">Step 2</h4>
                            <p class="body-text">
                                Efterfølgende skal man sørger for at billedet ikke repeater ved brug af Background-repeat: no-repeat; Og selv hvis det ikke er nødvendigt (fordi ens billed er stort nok), så er det en god ting at gøre, både af god skikke og for at man har tjekket den boks af (ibid).
                            </p>
                        </section>

                        <section id="linear-image-steps3">
                            <h4 class="sub-skrift">Step 3</h4>
                            <p class="body-text">
                                Så definere positionen af billedet, da positionen altid skal komme før størrelsen, og i dette eksempel putter vi den til at være bottom, ved hjælp af Background-position: Bottom; (ibid).
                            </p>
                        </section>

                        <section id="linear-image-steps4">
                            <h4 class="sub-skrift">Step 4</h4>
                            <p class="body-text">
                                Derefter kommer vi til størrelsen, man kan bruge de forskellige størrelse der er givet som cover, men her har vi tænkt at bruge procent og sætte den på 100%. Det gøres ved hjælp af Background-size: 100%; (ibid).
                            </p>
                        </section>
                            
                        <section id="linear-image-steps5">
                            <h4 class="sub-skrift">Step 5</h4>
                            <p class="body-text">
                                Nu kommer vi til det sjove og putter noget farve på billedet. Her skal man tilbage op under Background-image og skriver valuesene efter url() valuen. Det er grundet af at hvis man laver en ny Background-image property for at lave sin gradient så vil den sidste background-image property i CSS'en overgør den anden. Så det skal gøres indenfor samme property (ibid).
                            </p>
                        </section>
                    </section>
                </section>
        
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            Rijna, F. D. &#38; Lank, N., 2020. CSS Background (Billeder og Gradient). [Online] 
                            Available at: http://10850.apache.eadania.dk/workshop/Index.html
                            [Senest hentet eller vist den 25 november 2020].
                        </li>
                        <li>
                            W3schools, 2020. CSS background Property. [Online] 
                            Available at: https://www.w3schools.com/cssref/css3_pr_background.asp
                            [Senest hentet eller vist den 10 december 2020].
                        </li>
                        <li>
                            W3schools, 2020. CSS background-image Property. [Online] 
                            Available at: https://www.w3schools.com/cssref/pr_background-image.asp
                            [Senest hentet eller vist den 3 december 2020].
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
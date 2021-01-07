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
    <body class="smokey-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <?php include 'undermenu-photoshop.inc' ?>
        
            <h1 class="titel">Smokey the Bear</h1>
        
            <div id="mitgrid-smokeythebear">
                <section id="smokey">
                    <section id="smokey-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Marquee tool</h4>
                                Marquee tool giver en mulighed for at lave en selection i form af en geometrisk figur. Herunder elipse, rectangle, single row og single column.
                            </li>
                            <li>
                                <h4 class="sub-skrift">Text tool</h4>
                                Text tool giver mulighed for at skrive text som er i sit eget layer.
                            </li>
                            <li>
                                <h4 class="sub-skrift">Gradients</h4>
                                Gradients giver mulighed for at lave unikke farvekombinationer, der kan skabe nye nuancer 
                            </li>
                        </ul>
                        
                        <p class="body-text">
                            Dette er den første øvelse jeg havde på studiet hvor jeg brugte Marquee tool, Gradients og Text tool til at lave en bjørn jeg kaldte "Smokey the Bear".
                        </p>
                    </section>
                    
                    <section id="smokey-start">
                        
                        <img src="design/photoshop/smokey-before.jpg" alt="screenshot af photoshop" id="smokey-start-img">
                        <ol class="liste">
                            <li>
                                Det første jeg gør er at lave alle delene til bjørnen med marquee tool.
                            </li>
                            <li>
                                Jeg laver hovedet med elipse marquee tool, hvor jeg laver en cirkel og bruger CRTL + Shift + Backspace til at farve den og derefter CRTL + J til at lave en kopi af den selection som sit eget layer.
                            </li>
                            <li>
                                Det samme gøres for ørene hvor jeg laver en cirkel med marquee tool, farver den, og kopier den tre gange og lavet to stor og to små cirkler som udgøre ørene.
                            </li>
                            <li>
                                Derefter lavede jeg elipsen til munden, til næsen og til munden med marquee tool, fyldte det ind og brugte CRTL + J til hver af dem.
                            </li>
                            <li>
                                Når jeg laver øjenen lavet jeg den første ydre elipse og når jeg så laver pupillerne med en sort farve og bruger marquee tool til at cutte en lille halvcirkel ud af pupillerne.
                            </li>
                            <li>
                                Den samme process blev brugt med pupillerne gjorde jeg med øjenbrynene, hvor jeg lavet en sort cirkel med marquee tool og brugte marquee tool til at cutte en stor del af cirklen ud i form af et øjenbryn og kopieret den så jeg har to øjenbryn
                            </li>
                        </ol>
                        
                    </section>
                    
                    <section id="smokey-options">
                        <img src="design/photoshop/smokey-no-color.png" alt="screenshot af photoshop" id="smokey-options-img">
                        <ol class="liste">
                            <li>
                                Efter alle delene er lavet, sætter jeg dem sammen til et bjørnefjæs
                            </li>
                            <li>
                                Herefter bruger jeg text tool til at give den et navn, "Smokey the Bear".
                            </li>
                            <li>
                                Nu kommer jeg til at farve bjørnen og her bruger jeg gradients.
                            </li>
                            <li>
                                Jeg laver en gradient med en brun og mørkebrun til fjæset og ydreside af ørene.
                            </li>
                            <li>
                                Så laver jeg en gradient med en brun og lysebrun farve til indeside af ørene og munden.
                            </li>
                            <li>
                                Til sidst laver jeg en gradient med pink og lyserød til snuden.
                            </li>
                        </ol>
                        
                    </section>
                    
                    <section id="smokey-slut">
                        <h4 class="underoverskrift">
                            Sig hej til Smokey the Bear.
                        </h4>
                        <img src="design/photoshop/smokey-done.png" alt="screenshot af photoshop" id="smokey-slut-img">
                        <p class="body-text">
                            Jeg vidste godt man kunne lave selection, kopier og cutte dem ud med marquee tool fra tidligere brug photoshop, men jeg vidste ikke man kunne fylde dem ind og lave illustrationer med marquee tool.
                        </p>
                    </section>
                </section>
            </div>
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
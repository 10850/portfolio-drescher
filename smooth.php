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
    <body class="smooth-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <?php include 'undermenu-photoshop.inc' ?>
        
            <h1 class="titel">Warped Text</h1>
        
            <div id="mitgrid-smooth">
                <section id="smooth">
                    <section id="smooth-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Text tool Arc</h4>
                                Text tool giver mulighed for at skrive text som er i sit eget layer. Hvor man kan vælge Arc som en mulig customization. 
                            </li>
                            <li>
                                <h4 class="sub-skrift">Layer mask</h4>
                                Mask layers er et værktøj som gør et valgt lag til en maske som man kan udviske normalt for at give det gennemsigtighed til et lag under ved brug af en sort farve eller man kan gør layer masken sort og derved gøre sit layer usynligt og tegne det frem med en hvid farver nærmest som en form for omvendt eraser tool.
                            </li>
                            <li>
                                <h4 class="sub-skrift">Gradients</h4>
                                Gradients giver mulighed for at lave unikke farvekombinationer, der kan skabe nye nuancer 
                            </li>
                        </ul>
                    </section>
                    
                    
                    
                    <section id="smooth-start">
                        <img src="design/photoshop/warped/warped-alternate-start.jpg" alt="screenshot af photoshop" id="smooth-start-img">
                        <ol class="liste">
                            <li>
                                Jeg skriver noget tekst med text tool og bruger gradient med en pink og lilla farve på teksten.
                            </li>
                            <li>
                                Jeg giver derefter bogstaverne en stærk skygge som giver bogstaverne et pink omrids.
                            </li>
                            <li>
                                Jeg giver også en normal skygge og noget outerglow til at give det noget dybde og får det til at stå ud.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="smooth-options">
                        <img src="design/photoshop/warped/warped-alternate-2.jpg" alt="screenshot af photoshop" id="smooth-options-img">
                        <ol class="liste">
                            <li>
                                For at bøje teksten bruger jeg text arc tool og giver den en arc som bøjer teksten.
                            </li>
                            <li>
                                Nu giver jeg den en lilla baggrundsfrave.
                            </li>
                            <li>
                                Så for lidt ekstra effekt giver jeg baggrunden en radial gradient med pink i bunden og i toppen.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="smooth-secondlast">
                        <img src="design/photoshop/warped/warped-alternate-3.jpg" alt="screenshot af photoshop" id="smooth-secondlast-img">
                        <ol class="liste">
                            <li>
                                Nu laver jeg et rectangle med rectangle tool og give den en pink farve og giver den en lavere opaicity.
                            </li>
                            <li>
                                Til sidst laver jeg en clipping mask med teksten i så regtanglet kun dækker bogstaverne.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="smooth-slut">
                        <img src="design/photoshop/warped/warped-alternate.jpg" alt="screenshot af photoshop" id="smooth-slut-img">
                        <p class="body-text">
                            Jeg lavet denne øvelse på studiet med at lave noget dynamisk text design ved brug af Text tool arc, Layer mask og Gradients.
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
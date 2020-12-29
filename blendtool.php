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
    <body class="blendtool-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <?php include 'undermenu-illustrator' ?>
        
            <h1 class="titel">Blend tool</h1>
        
            <div id="mitgrid-bendtool">
                <section id="blend-tool">
                    <section id="blend-intro">
                        <h2 class="overskrift">Blend tool</h2>
                        <p class="body-text">Blend tool giver muligheden for at mixe 2 eller flere objekter og farver så det bliver til et objekt.</p>
                    </section>
                    
                    <section id="blend-start">
                        <img src="design/illustrator/blendtool/blend-tool-flag-before.png" alt="screenshot af illustrator" id="blend-start-img">
                        <p class="body-text">
                            Dette er en øvelse hvor jeg skal bruge blend tool til at lave det europæriske flag med grønne og gule stjerne, hvor jeg skal blend stjernerne sammen med cirklen.
                        </p>
                    </section>
                    
                    <section id="blend-options">
                        <img src="design/illustrator/blendtool/blendtool-steps.png" alt="screenshot af illustrator" id="blend-options-img">
                        <ol class="liste">
                            <li>
                                Du selector de tre lag du gerne vil blend.
                            </li>
                            <li>
                                Derefter går du op under "Object" og går under "Blend" og tryk på "Make" for at lave et blend layer.
                            </li>
                            <li>
                                Til sidst dobbleklikker du på blend tool eller går under "Object" og under "Blend" og vælger options. Hvor du så vælge specified steps og skriver antallet af stjerner du vil have, som her er 12.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="blend-slut">
                        <p class="body-text">
                            Nu har man det europæriske flag med grønne og gule stjerner.
                        </p>
                        <img src="design/illustrator/blendtool/blend-tool-flag-after.png" alt="screenshot af illustrator" id="blend-slut-img">
                    </section>
                </section>
            </div>
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
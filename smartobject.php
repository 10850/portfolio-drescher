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
    <body class="smartobject-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <h1 class="titel">Smart Object</h1>
        
            <div id="mitgrid-smartobject">
                <section id="smartobject">
                    <section id="smartobject-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Smart Object</h4>
                                Smart Objects er lag, der indeholder billeddata fra raster- eller vektorbilleder, f.eks. Photoshop- eller Illustrator-filer. Smart Objects bevarer et billedes kildeindhold med alle dets oprindelige egenskaber, hvilket bevirker, at du kan foretage redigering af laget uden at slette noget. 
                            </li>
                        </ul>
                    </section>
                    
                    <section id="smartobject-start">
                        <img src="design/photoshop/smartobject/smart-object-mockups.jpg" alt="screenshot af photoshop" id="smartobject-start-img">
                        <p class="body-text">
                            Jeg startede ud med dette billed af et tomt billboard og ville gerne sætte et billed op på det. Her fandt jeg ud af via youtube at smart objects er et fantastisk værktøj.
                        </p>
                    </section>
                    
                    <section id="smartobject-options">
                        <img src="design/photoshop/smartobject/smartobjectrec.jpg" alt="screenshot af photoshop" id="smartobject-options-img">
                        <ol class="liste">
                            <li>
                                Jeg laver et rektangle med rectangle tool
                            </li>
                            <li>
                                Så bruger jeg free transform mens jeg holder CRTL nede til at sætte det på på billboardet med den rigtige vinkel.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="smartobject-edit">
                        <img src="design/photoshop/smartobject/smartobject3.jpg" alt="screenshot af photoshop" id="smartobject-edit-img">
                        <p class="body-text">Nu kommer det smarte</p>
                        <ol class="liste">
                            <li>
                                Jeg laver rektanglet om til et smart object med "Convert to smart object".
                            </li>
                            <li>
                                Så dobbel klikker jeg på thumbnailen af smart objectet og photoshop åbner en ny fil.
                            </li>
                            <li>
                                I denne fil for rektanglen sætter jeg et billed ind med noget tekst og gemmer. 
                            </li>
                            <li>
                                Gå tilbage til billedet med billboardet og automatisk udskifter photoshop rektanglen med det billed jeg har lavet og vinkler den som rektanglet var fordi det er et smart object.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="smartobject-slut">
                        <img src="design/photoshop/smartobject/smart-object-mockupsdone.jpg" alt="screenshot af photoshop" id="smartobject-slut-img">
                        
                        <p class="body-text">
                            Det her er super smart. Jeg har aldrig rigtig brugt smart objects før, og da jeg så at dette var ens af dens mulige funktioner, var jeg virkelig overrasket, og blev nød til at prøve det selv. Det er virkeligt et godt værktøj som jeg kan se mig selv bruge igen.
                        </p>
                    </section>
                </section>
                
                <section class="kilder">
                    <ul class="kildeliste">
                        <li>
                        
                        </li>
                        <li>
                        
                        </li>
                        <li>
                        
                        </li>
                    </ul>
                </section>
            </div>
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
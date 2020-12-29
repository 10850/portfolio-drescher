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
    <body class="outofframe-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <h1 class="titel">Out of frame</h1>
        
            <div id="mitgrid-outofframe">
                <section id="outofframe">
                    <section id="outofframe-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Magic wand tool</h4>
                                Magic wand tool er ligsom quick selection tool bortset fra at den selecter ud fra farve sammenlignelighed.
                            </li>
                            <li>
                                <h4 class="sub-skrift">Select  Inverse</h4>
                                Select  Inverse gør at man kan vælge store dele af et lag som man ikke allerede har valgt. Det kan bruges til at fjerne eller ændre på baggrunden uden ens focal point på billedet ændres. 
                            </li>
                            <li>
                                <h4 class="sub-skrift">Mask layer</h4>
                                Mask layers er et værktøj som gør et valgt lag til en maske som man kan udviske normalt for at give det gennemsigtighed til et lag under ved brug af en sort farve eller man kan gør layer masken sort og derved gøre sit layer usynligt og tegne det frem med en hvid farver nærmest som en form for omvendt eraser tool.
                            </li>
                        </ul>
                    </section>
                    
                    <section id="outofframe-start">
                        <img src="design/photoshop/outofframe/wandtool-contract-inverse-layermask-before.jpg" alt="screenshot af photoshop" id="outofframe-start-img">
                        <p class="body-text">
                            Jeg startede med tre billeder og havde en ide om hvordan jeg ville have det til at se ud. Jeg søgte på youtube og fandt en video som gav mig det svar jeg ledte efter: <a href="https://www.youtube.com/watch?v=7vsnPszln8A&#38;t=345s&#38;ab_channel=ShawnDolinski" target="_blank">Unfinished Jigsaw Puzzle Effect in Photoshop 2020</a>.
                        </p>
                        <ol class="liste">
                            <li>
                                Først laver jeg en layer mask på billedet på mit hoved. Så bruger jeg brush tool med en soft brush til at tegne billedet frem på mit hoved med lavere opacity så det ligner en fantasi.
                            </li>
                            <li>
                                Derefter merger jeg alle layers bortset for puslespillet, hvor jeg så laver en selection på omridset af puslespillet og laver en kopi af billedet af mig så den tager form af omridset af puslespillet.
                            </li>
                            <li>
                                Nu visker jeg baggrunden på puslespillet væk og bruger magic wand tool til at vælge alle stregerne i puslespillet og bruger inverse til at vælge resten af  billedet, som mit focal point og kopier laget med billedet af mig, som så gøre at det kun er det som er selected med inverse der kommer med og stregerne der er selected med magic wand tool kommer ikke med.
                            </li>
                        </ol>
                        
                    </section>
                    
                    <section id="outofframe-options">
                        <img src="design/photoshop/outofframe/wandtool-contract-inverse-layermask-after2.jpg" alt="screenshot af photoshop" id="outofframe-options-img">
                        <ol class="liste">
                            <li>
                                Efter puslespillet er lavet bruger jeg et nyt layer med sort baggrund til at laver stregerne til puslespillet. 
                            </li>
                            <li>
                                Derefter laver jeg en layer maske hvor jeg putter puslespilsbilledet ind i thumbnailen. Hvor jeg bruger magic wand tool til at vælge et område i form af en puslespilsbrik, og går tilbage til lageret og tager en kopi af hele laget hvor kun  brikken som blev valgt af magic wand tool bliver kopieret.
                            </li>
                            <li>
                                Så for at gør delen af billedet ,hvor jeg har taget brikken ud, transparent, så går jeg tilbage ind i thumbnailen af layermasken og bruger magic wand tool til at vælge den samme brik, laver en group til laget og laver en ny maske på gruppen som gør, at det område som var valgt med magic wand tool bliver usynligt.
                            </li>
                            <li>
                                Efter det blev det sat sammen med andre billeder og skabte min out of frame plakat.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="outofframe-slut">
                        <img src="design/photoshop/outofframe/wandtool-contract-inverse-bevelemboss-layermask-after.jpg" alt="screenshot af photoshop" id="outofframe-slut-img">
                    </section>
                </section>
                
                <section class="kilder">
                    <ul class="kildeliste">
                        <li>
                            Dolinski, S., 2020. Unfinished Jigsaw Puzzle Effect in Photoshop 2020. [Online] 
                            Available at: <a href="https://www.youtube.com/watch?v=7vsnPszln8A&#38;t=345s&#38;ab_channel=ShawnDolinski" target="_blank">https://www.youtube.com/watch?v=7vsnPszln8A&#38;t=345s&#38;ab_channel=ShawnDolinski</a>
                            [Senest hentet eller vist den 24 december 2020].
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
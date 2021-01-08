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
    <body class="contentaware-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <?php include 'undermenu-photoshop.inc' ?>
        
            <h1 class="titel">Content Aware Fill</h1>
        
            <div id="mitgrid-content-aware">
                <section id="content-aware-fill">
                    <section id="content-aware-fill-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Content Aware Fill</h4>
                                Content aware fill er en kommando på photoshop som gør at et valgt område på billedet kan blive fjernet og udskifte med detaljer fra andre områder på billedet. Det gør at fjerne uønsket elementer fra et billede så simpelt som overhovedet muligt. 
                            </li>
                        </ul>
                    </section>
                    
                    <section id="content-aware-fill-start">
                        <img src="design/photoshop/content-aware/content-aware-fill-start.jpg" alt="screenshot af photoshop" id="aware-fill-start-img">
                        <p class="body-text">
                            Jeg har dette billede af en der laver tricks på løbehjul, men der er en person i baggrunden som jeg gerne vil fjerne fra billedet. Det er her hvor Content aware fill kommer ind.
                        </p>
                    </section>
                    
                    <section id="content-aware-fill-options">
                        <img src="design/photoshop/content-aware/content-aware-fill-step.jpg" alt="screenshot af photoshop" id="aware-fill-options-img">
                        <ol class="liste">
                            <li>
                                Jeg bruger lasso tool til at lave en selection omkring personen jeg vil fjerne
                            </li>
                            <li>
                                Så går jeg under "Edit" og finder "Content Aware Fill".
                            </li>
                            <li>
                                Så giver photoshop mig et panel hvor jeg har mulighed for at tegne de områder den skal bruge til at udfylde det hul som der er i billedet når man fjerne personen.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="content-aware-fill-slut">
                        <img src="design/photoshop/content-aware/content-aware-fill-after.jpg" alt="screenshot af photoshop" id="aware-fill-slut-img">
                        <p class="body-text">
                            Nu har jeg et billed hvor man kun ser personen der laver tricks og man kan ikke se at der var en person som er blevet fjernet fra billedet.
                        </p>
                    </section>
                </section>
                
                <section id="content-aware-move">
                    <section id="content-aware-move-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Content Aware Move</h4>
                                Content aware move tool gøre at man kan vælge et element og flyt det et andet sted hen på billedet og Photoshop vil automatisk fylde hullet ud ved brug af lignende elementer på resten af billedet. 
                            </li>
                        </ul>
                    </section>
                    
                    <section id="content-aware-move-start">
                        <img src="design/photoshop/content-aware/content_aware_move.jpg" alt="screenshot af photoshop" id="aware-move-start-img">
                        <p class="body-text">
                            Her er et billed af folk som hiker, men de to personer bagved er ret lang væk fra personen længest fremme. Det er her hvor Content aware move kan hjælpe dig.
                        </p>
                    </section>
                    
                    <section id="content-aware-move-options">
                        <img src="design/photoshop/content-aware/content-aware-move-step.jpg" alt="screenshot af photoshop" id="aware-move-options-img">
                        <ol class="liste">
                            <li>
                                Jeg laver en selection af en af de to personer med "Content aware move tool".
                            </li>
                            <li>
                                Derefter giver photoshop mig et panel hvor jeg tegner op hvilke dele af billedet den skal bruge til at udfylde det hul der kommer af at bevæge personen på billedet og klikker OK.
                            </li>
                            <li>
                                Samme process gøres igen med den anden person.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="content-aware-move-slut">
                        <img src="design/photoshop/content-aware/content_aware_move-after.jpg" alt="screenshot af photoshop" id="aware-move-slut-img">
                        <p class="body-text">
                            Nu er de to personer tættere på personen som originalt var længest fremme og billedet ser stadig realistisk ud.
                        </p>
                    </section>
                </section>
                
                <section id="content-aware-patch">
                    <section id="content-aware-patch-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Patch Tool</h4>
                                Patch tool gør det samme som healing brush tool, men den gør det ved at den udskifter et område på et billed med et mønster fra et andet område på billedet og ikke med pixels. 
                            </li>
                        </ul>
                    </section>
                    
                    <section id="content-aware-patch-start">
                        <img src="design/photoshop/content-aware/content_aware_patch.jpg" alt="screenshot af photoshop" id="aware-patch-start-img">
                        <p class="body-text">
                            Her har jeg et billed med folk der løber i solnedgangen, men man kan lige præcis se et ben i billedet, som jeg ikke vil have der. Her kan man bruge Patch tool.
                        </p>
                    </section>
                    
                    <section id="content-aware-patch-options">
                        <img src="design/photoshop/content-aware/content-aware-patch-step.jpg" alt="screenshot af photoshop" id="aware-patch-options-img">
                        <ol class="liste">
                            <li>
                                Jeg laver en selection med "Patch tool".
                            </li>
                            <li>
                                Så tager jeg den selection og trækker den ud af billedet og photoshop vil automatisk bruger patterns fra resten af billedet til at fylde billedet ud.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="content-aware-patch-slut">
                        <img src="design/photoshop/content-aware/content_aware_patch-after.jpg" alt="screenshot af photoshop" id="aware-patch-slut-img">
                        <p class="body-text">
                            Nu har jeg billedet uden det ben og det ser stadig realistisk ud og ligner ikke det er blevet redigeret.
                        </p>
                    </section>
                </section>
                
                <section id="contentaware-releksion">
                    <h2 class="overskrift">
                        Sikke et værktøj
                    </h2>
                    
                    <p class="body-text">
                        Jeg har set mange billeder hvor jeg vidste at nogen havde photoshoppet noget eller nogen ud af et billed, men har aldrig taget tiden til at finde ud af hvordan.
                    </p>
                    
                    <p class="body-text">
                        Den dag vi skulle have om det troede jeg det ville være kompliceret og svært at tage noget ud af et billed og fylde det ud så billedet stadig ser realistisk ud.
                    </p>
                    
                    <p class="body-text">
                        Til min overraskelse var det meget mere simpelt end jeg havde forventet. Jeg er chokeret over hvordan adobe har lavet et så nemt og intuitivt værktøj til at lave et arbejde der virkes til at være så kompliceret. Jeg er glad for at jeg endelig fik taget tid til at lære hemmeligheden bag content aware fill.
                    </p>
                </section>
            </div>
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
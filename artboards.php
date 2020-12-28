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
    <body class="artboards-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <h1 class="titel">Artboards</h1>
        
            <div id="mitgrid-artboards">
                
                <section id="artboard-tool">
                    
                    <section id="artboard-intro">
                        <h2 class="overskrift">Artboard tool</h2>
                        <p class="body-text">Artboard tool bruges til at kreerer nye artboards i samme dokument og redigere størrelsen på sine artboards.</p>
                    </section>
                    
                    <section id="artboard-start">
                        <img src="design/illustrator/artboardsogworkspace/artboard-start.png" alt="screenshot af illustrator" id="artboard-start-img">
                    </section>
                    
                    <section id="artboard-options">
                        <img src="design/illustrator/artboardsogworkspace/artboard-options.png" alt="screenshot af illustrator" id="artboard-options-img">
                    </section>
                    
                    <section id="artboard-slut">
                        <img src="design/illustrator/artboardsogworkspace/artboard-start.png" alt="screenshot af illustrator" id="artboard-slut-img">
                    </section>
                </section>
                
                
                <section id="workspace">
                    <section id="workspace-intro">
                        <h2 class="overskrift">Paneller</h2>
                        <p class="body-text">
                            I illustrator er paneller brugt som ens workspace hvor man kan få overblik over sine objekter, properties af elementer osv. Paneller i illustrator er typisk defineret i 4 forskellige kategorier:
                        </p>

                        <ul class="liste" id="panel-kategorier">
                            <li>
                                <strong>Command/modify &#8594;</strong> kommandere eller modificere noget som strokes, alignment, fill osv.
                            </li>
                            <li>
                                <strong>Storage &#8594;</strong> gemmer ting som custom swatches og brushes
                            </li>
                            <li>
                                <strong>Manage &#8594;</strong> management ting som for eks. Layers 
                            </li>
                            <li>
                                <strong>Create &#8594;</strong> creation af for eksempel Assets
                            </li>
                        </ul>

                        <h3 class="underoverskrift">Layers</h3>
                        <p class="body-text">
                            Layers panellet er hvor du ser alle dine layers med alle dine objekter og kan organisere dem og navngive dem for bedre overblik. Du kan også nemmere vælge specifikke objekter via layers panellet hvis du har et projekt med mange forskellige layers over hinanden.
                        </p>

                        <h3 class="underoverskrift">Properties</h3>
                        <p class="body-text">
                            Properties panellet giver dig et overview over hvilke values du kan ændre på alt efter hvilket element/objekt du selecter.
                        </p>
                    </section>
                    
                    <section id="workspace-change">
                        <section id="workspace-start">
                            <img src="design/illustrator/artboardsogworkspace/workspace-start.png" alt="screenshot af illustrator" id="workspace-start-img">
                        </section>
                        
                        <section id="workspace-slut">
                            <img src="design/illustrator/artboardsogworkspace/workspace-slut.png" alt="screenshot af illustrator" id="workspace-slut-img">
                        </section>
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
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
        
            <?php include 'undermenu-illustrator' ?>
        
            <h1 class="titel">Artboards</h1>
        
            <div id="mitgrid-artboards">
                
                <section id="artboard-tool">
                    
                    <section id="artboard-intro">
                        <h2 class="overskrift">Artboard tool</h2>
                        <p class="body-text">Artboard tool bruges til at kreerer nye artboards i samme dokument og redigere størrelsen på sine artboards.</p>
                    </section>
                    
                    <section id="artboard-start">
                        <img src="design/illustrator/artboardsogworkspace/artboard-start.png" alt="screenshot af illustrator" id="artboard-start-img">
                        <p class="body-text">
                            På studiet havde vi øvelse i hvordan man kan lave flere artboards i en fil så man kan arbejde på flere projekter på en gang. Vi startede med kun 1 artboard og skulle lave 7 artboards mere ved brug af artboard tool.
                        </p>
                    </section>
                    
                    <section id="artboard-options">
                        <img src="design/illustrator/artboardsogworkspace/artboard-options.png" alt="screenshot af illustrator" id="artboard-options-img">
                        <ol class="liste">
                            <li>
                                Man trykker på artboard tool ude på værktøjspanelet i venstre side.
                            </li>
                            <li>
                                Der vil komme et artboard tool panel op i property panellet, hvor du trykker på + knappen hvor du kan vælge hvor mange flere artboards du vil lave og hvilken størrelse de skal være.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="artboard-slut">
                        <img src="design/illustrator/artboardsogworkspace/artboard-start.png" alt="screenshot af illustrator" id="artboard-slut-img">
                        <p class="body-text">
                            Nu har man 8 artboards hvor man kan arbejde på flere projekter det samme sted eller lave forskellige versioner af samme ide.
                        </p>
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
                            <h2 class="overskrift">Customized workspace</h2>
                            <p class="body-text">På illustrator kan du ændre på de forskellige panellers position i programmet og lave dit eget personlige workspace.</p>
                            <img src="design/illustrator/artboardsogworkspace/workspace-start.png" alt="screenshot af illustrator" id="workspace-start-img">
                            <ol class="liste">
                                <li>
                                    Hvis du går op i højre hjørne kan du se en dropdown hvor der står essentials. Det er illustrators workspace.
                                </li>
                                <li>
                                    Under den dropdown er der en funktion som hedder "New workspace", som giver mulighed for at gemme dit eget workspace.
                                </li>
                            </ol>
                        </section>
                        
                        <section id="workspace-slut">
                            <img src="design/illustrator/artboardsogworkspace/workspace-slut.png" alt="screenshot af illustrator" id="workspace-slut-img">
                            <ol class="liste">
                                <li>
                                    Du rykker rundt på de forskellige paneller ved at trykke og holde nede på panellerne og trækker dem rundt.
                                </li>
                                <li>
                                    Når du er tilfreds med dit workspace, går du op og trykker på "New workspace" i dropdownen og gemmer dit workspace under et vis navn.
                                </li>
                            </ol>
                        </section>
                    </section>
                </section>
            </div>
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
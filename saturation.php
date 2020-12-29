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
    <body class="saturation-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <h1 class="titel">Saturation</h1>
        
            <div id="mitgrid-saturation">
                <section id="saturation-climate">
                    <section id="saturation-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Frame tool</h4>
                                Laver en placeholder frame for et billed. Det kan være firkantet eller en elipse.
                            </li>
                            <li>
                                <h4 class="sub-skrift">Color range</h4>
                                En funktion i photoshop som tager samples af farver fra en selection eller et helt billed.
                            </li>
                            <li>
                                <h4 class="sub-skrift">Hue/Saturation</h4>
                                Et adjustmens panel der giver mulighed for at justere et billeds Hue/saturation.
                            </li>
                        </ul>
                    </section>
                    
                    <section id="saturation-start">
                        <img src="design/photoshop/saturation/summer.jpg" alt="screenshot af photoshop" id="saturation-start-img">
                        <p class="body-text">Dette billed af et grønt landskab der ligner det er i forår/sommertiden skulle jeg lave om til et vinter landkskab. Det gjorde jeg ved brug af saturation.</p>
                        <p class="body-text">
                            Jeg startede med at bruge frame tool til at lave et område af billedet til en cirkel.
                        </p>
                    </section>
                    
                    <section id="saturation-options">
                        <img src="design/photoshop/saturation/summercircle.png" alt="screenshot af photoshop" id="saturation-options-img">
                        <ol class="liste">
                            <li>
                                Derefter selecter jeg laget og bruger color range til at vælge alt det grønne, som jeg gerne vil gøre hvidt. Her bruger jeg en fuziness på 22.
                            </li>
                            <li>
                                Jeg giver min selection fra color range en solid color af hvid, og går under blending options til at ændre på "Blend if" for mit "underlying layer", så den hvide farve ikke dækker for meget på de mørke områder.
                            </li>
                            <li>
                                Nu laver jeg et Hue/Saturation adjustment layer til at gøre resten af billedet mere hvidt og vinter agtigt. Det gør jeg ved at mindske saturationen og forstørre lightness.
                            </li>
                            <li>
                                Igen bruger jeg så blending options og ændre på "Blen if" for mit "underlying layer" så de mørke område ikke blive for hvide og lyse.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="saturation-slut">
                        <img src="design/photoshop/saturation/winter.png" alt="screenshot af photoshop" id="saturation-slut-img">
                        <p class="body-text">Og nu er det sommer landskabet blevet til et vinter landskab.</p>
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
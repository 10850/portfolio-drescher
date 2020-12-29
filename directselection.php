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
    <body class="directselection-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <h1 class="titel">Direct selection tool</h1>
        
            <div id="mitgrid-directselection">
                <section id="direct-select-tool">
                    <section id="direct-select-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Direct selection tool</h4>
                                Selection tool giver muligheden for at select et eller flere elementer/layers. Hvorimod Dircet Selection Tool giver mulighed for at isolere en enkelt anchor point eller path og ændre på et objekt shape (Harmer, 2019).  
                            </li>
                            <li>
                                <h4 class="sub-skrift">Pen tool</h4>
                                En af dens funktioner er at den kan kreere og fjerne anchor points.
                            </li>
                        </ul>
                    </section>
                    
                    <section id="direct-select-start">
                        <p class="body-text">
                            Ved at lege rundt med direct selection tool og pen tool til at lave mærklige shapes fik jeg lavede denne guitar.
                        </p>
                        <img src="design/illustrator/direct-select/direct-selection-and-pen-tool.png" alt="screenshot af illustrator" id="direct-select-start-img">
                        <ol class="liste">
                            <li>
                                Man bruger pen tool til at lave flere anchor points så man har flere punkter man kan trække i med direct selection tool.
                            </li>
                            <li>
                                Derefter tager man direct selection tool og begynder at tage fat i de forskellige anchor points og trækker i dem for at bøje linjerne på forskellige måder, indtil man har formen af bunden af en guitar.
                            </li>
                        </ol>
                    </section>
                </section>
                
                <section class="kilder">
                    <ul class="kildeliste">
                        <li>
                            Harmer, T., 2019. Linkedin Learning. [Online] 
                            Available at: <a href="https://www.linkedin.com/learning/illustrator-2020-essential-training/the-direct-selection-tool?u=37312532" target="_blank">https://www.linkedin.com/learning/illustrator-2020-essential-training/the-direct-selection-tool?u=37312532</a>
                            [Senest hentet eller vist den 18 december 2020].
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
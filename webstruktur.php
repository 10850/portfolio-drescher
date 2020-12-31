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
    <body class="webstruktur-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
        <h1 class="titel">Webstruktur</h1>
        
        <div id="mitgrid-webstruktur">
            
            <section id="hvad-er-webstruktur">
                <h2 class="overskrift">Hvad er webstruktur?</h2>
                <p class="body-text">
                    Det er websites grundlæggende strukturer, som former brugerens modeller af hvordan du har organiseret dit indhold (Andersen, 2015).
                </p>
                <p class="body-text">
                    De tre mest brugte strukturerer:
                </p>
                <ol class="liste">
                    <li>
                        Sekvensstruktur 
                    </li>
                    <li>
                        Hierarkistruktur 
                    </li>
                    <li>
                        Webstruktur 
                    </li>
                </ol>
            </section>
            
            <section id="webstruktur-typer">
                <section id="sekvens-webstruktur">
                    <h3 class="underoverskrift">Sekvens</h3>
                    <p class="body-text">
                        Man bestemmer brugerens retning på hjemmesiden så det er så let og uproblematisk så muligt, fordi de går i en retning, som går et skridt ad gangen (Andersen, 2015). Dog reducere det friheden for brugeren (ibid).
                    </p>
                </section>
                
                <section id="hieraki-webstruktur">
                    <h3 class="underoverskrift">Hierarki</h3>
                    <p class="body-text">
                        Mest anvendt på websites, grundet dens egenskab til at organisere komplekse oplysninger (ibid). Der er to måde man kan bygge sit hierarki struktur på:
                    </p>
                    <p class="body-text">
                        <strong>Simpel struktur:</strong> alle sider er koblet til en hovedside som er vigtigst (ibid). 
                    </p>
                    <p class="body-text">
                        <strong>Kompleks:</strong> en hovedside, spreder forskellige branches ud til sider der er koblet under samme sekvens (ibid).
                    </p>
                    <p class="body-text">
                        Man giver normalt en global navigation så man undgår at brugeren stadig har frihed til at springe på kryds og tværs af siderne (ibid).
                    </p>
                </section>
                
                <section id="webstruktur-struktur">
                    <h3 class="underoverskrift">Webstruktur</h3>
                    <p class="body-text">
                        Har mål for at give brugerne så meget frihed så muligt så de selv bestemmer deres interaktion med siden information (ibid). Dog er den også forvirrende og besværlig at finde rundt i for brugeren, da der ikke er sat nogen grænser (ibid).
                    </p>
                </section>
            </section>
            
            
                <section id="visualisere-struktur">
                    <h3 class="underoverskrift">Hvordan kan man visualisere arkitekturen?</h3>
                    <p class="body-text">
                        Wireframe - skelettet til det visuelle design som er musklerne (ibid). Opbygningen går i udgangspunkt i gængse konventioner (ibid).
                    </p>
                </section>
            
            
            <section class="kilder">
                <h2 class="overskrift">Kilder</h2>
                <ul class="kildeliste">
                    <li>
                        Andersen, M. G., 2015. Informationsarkitektur. I: Kommunikation i multimediedesign. s.l.:forfatterne og Hans Reitzels Forlag, pp. 165-179.
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
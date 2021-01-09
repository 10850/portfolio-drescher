<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drescher Rijna's Læringsportfolio for 1.semester 2020, som mulitmediedesigner. Siden fortæller om alt jeg har lært gennem studiet og viser mine fremskridt og projekter...">
    <meta name="keywords" content="Multimedidesigner, 1. semester, læringsportfolio, Drescher Rijna, Design Thinking, Kodning, Kommunikation, Usability, Design, Videoproduktion, Fotografering, Refleksion, Projekter, Studieprojekt, Eksamensprojekt">
    <meta name="author" content="Drescher Rijna">
    <title>Drescher Rijna - Læringsportfolio</title>
    <!-- Logo ikon oppe i fanen -->
    <link href="closure-logo-black.png" rel="icon" type="image">
    <!-- Montserrat & Quimby Mayoral og Lora fra adobe fonts-->
    <link rel="stylesheet" href="https://use.typekit.net/rgm6her.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mit stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
    <body class="captain-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <?php include 'undermenu-illustrator' ?>
        
            <h1 class="titel">Captain America</h1>
        
            <div id="mitgrid-acaptainamerica">
                <section id="cap-america">
                    <section id="cap-intro">
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Elipse tool</h4>
                                Elipse tool giver en mulighed for at tegne perfekte og uperfekte cirkler 
                            </li>
                            <li>
                                <h4 class="sub-skrift">Star tool</h4>
                                Star tool giver en mulighed for at tegne stjerner og styrer hvor mange kanter den har med piletasterne
                            </li>
                            <li>
                                <h4 class="sub-skrift">Gradients</h4>
                                Gradients giver mulighed for at lave unikke farvekombinationer, der kan skabe nye nuancer 
                            </li>
                        </ul>
                    </section>
                    
                    <section id="cap-start">
                        <p class="body-text">
                            Her er et eksempel på hvordan man kan bruge elipse tool, star tool og gradients til at lave Captain Americas skjold.
                        </p>
                        <img src="design/illustrator/captaina/captain-start.png" alt="screenshot af illustrator" id="cap-start-img">
                        <ol class="liste">
                            <li>
                                Først skal skjoldet tegnes op. Hvor vi tager fat i Elipse tool (L) og tegner 1 lille cirkel.
                            </li>
                            <li>
                                Derefter bruger man Copy paste til at kopier den 4 gange og gøre dem større med free transform (CRTL + t).
                            </li>
                            <li>
                                Til sidst tager man fat i star tool i værktøjspanelet, og tegner en stjerne i den mindste cirkel i centrum.
                            </li>
                        </ol>
                        
                        <h4 class="sub-skrift">
                            Nu skal der farve på.
                        </h4>
                    </section>
                    
                    <section id="cap-options">
                        <img src="design/illustrator/captaina/gradient-options.png" alt="screenshot af illustrator" id="cap-options-img">
                        <ol class="liste">
                            <li>
                                Du selector den sidste og den anden cirkel som skal farves røde og går under properties og trykker på fill.
                            </li>
                            <li>
                                Der vil være en mulighed oppe i højre hjørne som giver mulighed for at lave gradients.
                            </li>
                            <li>
                                Så bruger du en rød og en sort farve og vælger hvor meget hver farve fylder i din gradient.
                            </li>
                            <li>
                                Det samme gøres for den anden sidste cirkel og stjernen i midten, men med en hvid og sort farve.
                            </li>
                            <li>
                                Og til sidste tager man centrum og giver den en gradient med en blå og sort farve.
                            </li>
                        </ol>
                    </section>
                    
                    <section id="cap-slut">
                        <img src="design/illustrator/captaina/Captain-america-circle-tool-star-tool-gradient.png" alt="screenshot af illustrator" id="cap-slut-img">
                    </section>
                </section>
            </div>
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
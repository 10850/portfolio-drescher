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
    <body class="wireframing-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            
            <h1 class="titel">Wireframing</h1>
        
            <div id="mitgrid-wireframing">
                <section id="wireframing-section">
                    
                    <section id="wireframing-intro">
                        <p class="body-text">
                            En wireframe er en skitse som på den meste simple måde illustrerer og giver overblik over, hvordan ens sides indhold skal placeres i forhold til hinanden (Rold, 2019). Wireframe indeholder sjældent konkret indhold som billeder og tekst (ibid). I stedet indeholder de som standard bokse, som markerer som billeder eller tekst eller knapper m.m. (ibid).
                        </p>
                        <p class="body-text">
                            Man laver wireframe for at få en hurtig, nem og billig prototype som kan give designeren af siden overblik over sine ideer visuelt og være istand til at vurdere dem (ibid). Samt gå ud og teste sin side og få feedback før den endelige implementeringsfase (ibid).
                        </p>
                    </section>
                    
                    <section id="hifivlofi">
                        <h2 class="overskrift">Lo-fi versus Hi-fi</h2>
                        <p class="body-text">
                            Lo-fi er det man normalt ville lave først hvor man tegner en skitse med bokse med markeringer der henviser til hvad deres funktion er på siden (Rold, 2019). 
                        </p>
                        <p class="body-text">
                            Hi-fi er en wireframe som man ville lave ved enden af sin prototype fase til en sidste test (ibid). Det er hvor wireframen vil være så tæt på at ligne det endelige produkt som overhovedet muligt, mens det stadig er billigt og simpelt at udføre.
                        </p>
                    </section>
                    
                    <section id="lofi-india">
                        <h2 class="overskrift">Lo-fi</h2>
                            
                        <img src="design/wireframing/lofi-india.png" id="lofi-india-img">
                            
                        <ul class="liste">
                            <li>
                                Firkanter med et "X" betyder det er et billed (Rold, 2019).
                            </li>
                            <li>    
                                horisontale streger betyder tekst (ibid).
                            </li>
                            <li>
                                cirklerne og rektanglerne med en orange farve betyder CTA-knap (ibid).
                            </li>
                            <li>
                                Tykke horisontale streger betyder det er en tekst med stor font-weight (ibid).
                            </li>
                            <li>
                                Pile betyder det er en funktion som går en vis retning (ibid).
                            </li>
                        </ul>
                    </section>
                    
                    <section id="hifi-india">
                        <h2 class="overskrift">Hi-fi</h2>

                        <img src="design/wireframing/hifi-india.jpg" id="hifi-india-img">
                        
                        <ul class="liste">
                            <li>
                                Hi-fi wireframes vil normalt have færdiggjort tekst (Rold, 2019).
                            </li>
                            <li>
                                Funktionalitet implementeret som en navigation (ibid).
                            </li>
                            <li>
                                CTA-knapper (ibid).
                            </li>
                            <li>
                                Færdiggjorte billeder sat ind som de ville på den endelige side (ibid).
                            </li>
                        </ul>
                    </section>
                </section>
                
                <section class="kilder">
                    <ul class="kildeliste">
                        <li>
                            Rold, M., 2019. Output: wireframes. I: Interfacedesign. s.l.:Samfundslitteratur, pp. 141-146.
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
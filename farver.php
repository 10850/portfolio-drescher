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
    <body class="farver-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
            <h1 class="titel">Farver</h1>
        
            <div id="mitgrid-farver">
                <section id="farver">
                    <section id="farver-intro">
                        <h2 class="overskrift">Grundlæggende begreber</h2>
                        <ul class="liste">
                            <li>
                                <h4 class="sub-skrift">Hue</h4>
                                Kulør - definer hvilken farve der er tale om (Rold, 2019).
                            </li>
                            <li>
                                <h4 class="sub-skrift">Saturation</h4>
                                Intensitet - om de er klare eller dæmpede, fravær af hvid, sort og grå (Rold, 2019).
                            </li>
                            <li>
                                <h4 class="sub-skrift">Value</h4>
                                Lyshed - lys farve eller mørk farve (Rold, 2019).
                            </li>
                        </ul>
                    </section>
                    
                    <section id="farver-cirklen">
                        <h2 class="overskrift">Farvecirklen</h2>
                        <p class="body-text">
                            Farver cirklen er en model som viser farvernes relation til hinanden (Rold, 2019). Den er opbygget af:
                        </p>
                        <ul class="liste">
                            <li>
                                Tre primær farver i centrum (ibid).
                            </li>
                            <li>
                                Tre sekundær farver udenfor de tre primær (ibid).
                            </li>
                            <li>
                                Seks tertiær farver helt ude i den yderste del af cirklen. Omkring både de sekundær og primær farver (ibid).
                            </li>
                        </ul>
                        
                        <h3 class="underoverskrift">Reglerne for farvernes relation til hinanden i en farvecirkel er:</h3>
                        <ul class="liste">
                            <li>
                                Farver der står foran hinanden ”komplementær farver” (ibid).
                            </li>
                            <li>
                                Naboaer kaldes ”analoge farver”. Deles i varme og kolde farver som betyder forskelligt for en psykisk (ibid).
                            </li>
                        </ul>
                    </section>
                    
                    <section id="rgbvscmyk">
                        <h2 class="overskrift" id="titel-rgbcmyk">RGB vs CMYK</h2>
                        
                        <section id="rgb-fordele">
                            <p class="body-text">
                                RGB er det man altid skal bruge når man laver noget til skærm på grund af dens egenskaber (Rold, 2019):
                            </p>
                            <ul class="liste">
                                <li>
                                    Additivt farvesystem (ibid).
                                </li>
                                <li>
                                    Hvid som primær farve (ibid).
                                </li>
                                <li>
                                    Rød, grøn, blå + intensitet 0 til 255 (ibid).
                                </li>
                            </ul>
                        </section>
                        
                        <section id="cmyk-fordele">
                            <p class="body-text">
                                CMYK er det man som standard bruger til print på grund af (Rold, 2019):
                            </p>
                            <ul class="liste">
                                <li>
                                    Substraktivt farvesystem (ibid).
                                </li>
                                <li>
                                    Sort som primær farve (ibid).
                                </li>
                                <li>
                                    Cyan, Magenta, Gul (ibid).
                                </li>
                            </ul>
                        </section>
                    </section>
                </section>
                
                <section id="farve-harmonier">
                    <section id="harmonier-intro">
                        <h2 class="overskrift">Farve harmonier</h2>
                        <p class="body-text">
                            Farver påvirker hinanden alt efter hvordan de sættes sammen (Guru, 2014). Derfor findes der flere forskellige farve harmonier i farvecirklen(ibid). De er kaldt, monokrom, analog, Komplementær, split-komplementær, triader og tetriader (ibid).
                        </p>
                    </section>
                    <section id="monokrom">
                        <h3 class="underoverskrift"></h3>
                        <ul class="liste">
                            <li>
                                Er en farver/kulør som ændrer i sin lyshed og mætning (Guru, 2014).
                            </li>
                            <li>
                                Bedst til enkle emner (ibid).
                            </li>
                            <li>
                                Kan bruges til at skabe en vis atmosfære (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="analog">
                        <h3 class="underoverskrift"></h3>
                        <ul class="liste">
                            <li>
                                En farve/kulør som bredere sig i et større spektrum af lyshed og mætning (Guru, 2014).
                            </li>
                            <li>
                                Let for øjnene (ibid).
                            </li>
                            <li>
                                Føles naturlig at kigge på (ibid).
                            </li>
                            <li>
                                Skaber en rolig stemmening (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="komplementary">
                        <h3 class="underoverskrift"></h3>
                        <ul class="liste">
                            <li>
                                To farver som ligger overfor hinanden i farvecirklen (Guru, 2014).
                            </li>
                            <li>
                                Nok den mest populær farveharmoni (ibid).
                            </li>
                            <li>
                                Dejlig for øjene at kigge på (ibid).
                            </li>
                            <li>
                                Føles narturlig at kigge på (ibid).
                            </li>
                            <li>
                                Dog skal man aldrig bruge begge farve med lighed (ibid). Det er anbefalet at man vælger en af farverne som den primær farve 80/20 (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="split-komplementary">
                        <h3 class="underoverskrift"></h3>
                        <ul class="liste">
                            <li>
                                Sammenlignlig med komplentær farve harmoni men har et bredere farvespektrum (Guru, 2014).
                            </li>
                            <li>
                                Giver mere kreativ frihed i det man har flere nuancer af samme farve man kan arbejde med (ibid).
                            </li>
                            <li>
                                Føles livlig at kigge på (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="triader">
                        <h3 class="underoverskrift"></h3>
                        <ul class="liste">
                            <li>
                                Tre farver som ligger med samme distance fra hinanden i farvehjulet (Guru, 2014).
                            </li>
                            <li>
                                Det er den sværeste at bruge optimalt (ibid).
                            </li>
                            <li>
                                Bruges meget til ting der er for børn eller lege, som cartoons, forlystelsesparker eller legetøj (ibid).
                            </li>
                            <li>
                                Giver tegn på fiktion (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="tetriader">
                        <h3 class="underoverskrift"></h3>
                        <ul class="liste">
                            <li>
                                Denne er også kaldt dobbelt komplentær fordi det er en kombination af 2 par af komplementær farver (Guru, 2014).
                            </li>
                            <li>
                                God til forgrunde og baggrunde (ibid).
                            </li>
                            <li>
                                Man skal aldrig bruge farverne ligeligt. Der skal være en farve som er en primær brug (ibid).
                            </li>
                            <li>
                                Det er anbefalet at man bruger en mørkere farve som sin primær og bruger lysere farver som ens sekundære farve, som bruges her og der (ibid).
                            </li>
                        </ul>
                    </section>
                </section>
                
                <section id="farve-psyk">
                    <section id="intro-psyk">
                        <h2 class="overskrift">Farvepsykologi</h2>
                        <p class="body-text">
                            Farver taler sit eget sprog og mennesker forstår farver på en vis måde (Rold, 2019). Derfor er det vigtigt som multimediedesigner at vide hvordan farver anses i mennesker psyke (ibid).
                        </p>
                    </section>
                    <section id="blue-psyk">
                        <h4 class="sub-skrift">Blå</h4>
                        <ul class="liste">
                            <li>
                                Udbredt yndlingsfarve (ibid).
                            </li>
                            <li>
                                Associeres med positivitet i de fleste kulturer (ibid).
                            </li>
                            <li>
                                Mørkere nuancer ses som sikkerhed, troværdighed og loyalitet (ibid).
                            </li>
                            <li>
                                Lysere nuancer ses som afslappende og rolige (ibid).
                            </li>
                            <li>
                                Bruges af fx Facebook og twitter (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="red-psyk">
                        <h4 class="sub-skrift">Rød</h4>
                        <ul class="liste">
                            <li>
                                Associeres hovedsageligt med Ekstreme og dramatiske følelser (ibid).
                            </li>
                            <li>
                                Fare, aggression og magt (ibid).
                            </li>
                            <li>
                                Passion, energi og kærlighed (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="gul-psyk">
                        <h4 class="sub-skrift">Gul</h4>
                        <ul class="liste">
                            <li>
                                Associeres med glæde, håb og optimisme (ibid).
                            </li>
                            <li>
                                Modsat kan det associeres med jalousi og svigt (ibid).
                            </li>
                            <li>
                                I Danmark ses det som farven for gode tilbud (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="green-psyk">
                        <h4 class="sub-skrift">Grøn</h4>
                        <ul class="liste">
                            <li>
                                Associeres med vækst, fornyelse og bæredygtighed. Grundet den dominans som den primær farve i naturen (ibid).
                            </li>
                            <li>
                               Kan også være farven for misundelse. Grøn af misundelse, som man siger (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="lilla-psyk">
                        <h4 class="sub-skrift">Lilla</h4>
                        <ul class="liste">
                            <li>
                                Associeres med Mystik, kreativitet og spiritualitet (ibid).
                            </li>
                            <li>
                                Kan også associeres med magt og luksus (ibid). På grund af man i oldtiden skulle udtrække lilla pigmenter fra snegle og skaldyr, som var tidskrævende og kostbar, og derfor var noget kun kongelige havde råd til (ibid).
                            </li>
                        </ul>
                    </section>
                    <section id="orange-psyk">
                        <h4 class="sub-skrift">Orange</h4>
                        <ul class="liste">
                            <li>
                                Det en dynamisk farve som associeres med Energi, spænding og ungdom (ibid).
                            </li>
                            <li>
                                I nogle kulturer som USA kan det være farven for discountprodukter og derfor betyde discount (ibid). 
                            </li>
                        </ul>
                    </section>
                    <section id="slut-psyk">
                        <p class="body-text">
                            Disse er mere generelle beskrivelser af farvernes psykologi, men det er ikke så generaliserende som man ville tro (ibid). Farvernes betydning kan ændre sig alt efter hvilken kultur man befinder sig i (ibid).
                        </p>
                    </section>
                </section>
                
                <section id="opdage-farver">
                    <section id="opdage-intro">
                        <h2 class="overskrift">På opdagelse</h2>
                        <p class="body-text">

                        </p>
                    </section>
                    
                    <figure id="mono-bus-fig">
                        <img src="design/farver/bus-blue-mono.jpg" id="mono-bus">
                        <figcaption>
                        <p class="body-text">
                            Jeg så en blå bus og indså at dens blå farve er grundet at den skal ses som værende troværdigt og sikkert transport.
                            Samt er den kun en farve fordi det er et enkelt emne/objekt man har fokus på.
                        </p>
                        </figcaption>
                    </figure>
                    
                    <figure id="green-mono-fig">
                        <img src="design/farver/green-mono.jpg" id="green-mono">
                        <figcaption>
                        <p class="body-text">
                            Jeg blev mere bevidst om hvordan forretninger bruger farver på deres reklamer, som på denne Fakta reklame som har en monokrom farve harmoni fordi reklamen omhandler et emne. Og den bruger en grøn farve fordi det omhandler sundhed og grøntsager.
                        </p>
                        </figcaption>
                    </figure>
                    
                    <figure id="mono-tilbud-fig">
                        <img src="design/farver/gul-tilbud.jpg" id="mono-tilbud">
                        <figcaption>
                        <p class="body-text">
                            Et andet eksempel er tilbud reklamer hvor Fakta igen bruger en monkrom farveharmoni fordi det omhandler et emne altså discount priser. Derfor bruger de så også den gule farve som vi i Danmark associere med tilbud og discount priser.
                        </p>
                        </figcaption>
                    </figure>
                    
                    <figure id="blad-analig-fig">
                        <img src="design/farver/blad-gultilred-analog.jpg" id="blad-analog">
                        <figcaption>
                        <p class="body-text">
                            Jeg kiggede på bladenes farveskifte til efteråret og så at de havde en analog farveharmoni med rød, orange og gul idet den skifter farve til efteråret. Den orange farve associeres med eventyr og nye begyndelser, som passer godt til efteråret som er en årstid tæt på enden af året og begyndelsen på et nyt.
                        </p>
                        </figcaption>
                    </figure>
                    
                    <figure id="complementary-skilt-fig">
                        <img src="design/farver/complentary-vejskilt-red-blue.jpg" id="complementary-skilt">
                        <figcaption>
                        <p class="body-text">
                            Jeg indså hvorfor nogle skilte har en blå og rød farve. Den bruger komplementær farveharmoni som er meget iøjenfaldene, som er vigtigt for et vejskilt og dens røde farve indikere fare, mens den blå farve indikere sikkerhed, altså det er for vores sikkerheds skyld.
                        </p>
                        </figcaption>
                    </figure>
                   
                    <figure id="tretiader-playtoy-fig">
                        <img src="design/farver/legetoj-triader-starkefarver.jpg" id="tretiader-playtoy">
                        <figcaption>
                        <p class="body-text">
                            Jeg blev bevidst om at det er rigtigt at triader farveharmonier er brugt til fiktive ting eller legetøj da jeg så det here legetøj og forskellige legepladser, som alle havde triader farveharmonier og med meget lyse farver som er meget iøjenfaldende.
                        </p>
                        </figcaption>
                    </figure>
                    
                    <section id="opdage-farver-slut">
                        <h2 class="overskrift">Større bevidsthed om farver</h2>
                        <p class="body-text">
                            Jeg kunne virkelig godt lide denne øvelse for det ændret faktisk hvor bevidst jeg var om farverne omkring mig og hvor stort et omfang de faktisk har betydning i verden ikke kun de menneskeskabte ting, som vi bevidst vælger farver til af hensigtsmæssige grunde, men også naturen og hvordan deres farver også hænger sammen med farveharmonierne og har en hensigtsmæssig betydning og ikke bare er random.
                        </p>
                        <p class="body-text">
                            Faktisk går jeg stadig nogle gange rundt og se forskellige plakater osv. og hurtigt kommer i tanke om hvorfor de bruger de farver de bruger.
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
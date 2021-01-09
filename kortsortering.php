<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drescher Rijna's Læringsportfolio for 1.semester 2020, som mulitmediedesigner. Siden fortæller om alt jeg har lært gennem studiet og viser mine fremskridt og projekter...">
    <meta name="keywords" content="Multimedidesigner, 1. semester, læringsportfolio, Drescher Rijna, Design Thinking, Kodning, Kommunikation, Usability, Design, Videoproduktion, Fotografering, Refleksion, Projekter, Studieprojekt, Eksamensprojekt">
    <meta name="author" content="Drescher Rijna">
    <title>Kortsortering - Læringsportfolio</title>
    <!-- Logo ikon oppe i fanen -->
    <link href="closure-logo-black.png" rel="icon" type="image">
    <!-- Montserrat & Quimby Mayoral og Lora fra adobe fonts-->
    <link rel="stylesheet" href="https://use.typekit.net/rgm6her.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mit stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
    <body class="kortsortering-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
            <div id="mitgrid-kort">
            
                <h1 class="titel">Kortsortering</h1>

                <section class="hvad-er-kortsortering">
                    <h2 class="overskrift">Hvad er kortsortering?</h2>
                    <p class="body-text">
                        Kortsortering bruges til at kunne teste om en websides strukturer af sine sider og sin globale menu er brugervenlighed, logisk og let forståelig (Gregersen &#38; Wisler-Poulsen, 2017). Det man tester for, er om brugeren kan forstå menupunkterne og knapperne som de får til rådighed på siden og hvordan de er sammensat (ibid).
                    </p>
                    
                    <p class="body-text">
                        Kortsortering er en metode man gør lige på og råt og derfor bruger labels af papir med tekst til testen og ikke en færdig hjemmeside (ibid).
                    </p>
                </section> <!-- Hvad er kortsortering? -->

                <section class="tre-overvejelser">
                    <section class="tre-overvejelser-intro">
                        <h2 class="overskrift">De tre overvejelser</h2>
                        <ol class="liste">
                            <li>Hvilke og hvor mange brugere skal testen udføres med (Gregersen &#38; Wisler-Poulsen, 2017).</li>
                            <li>Hvilke elementer af websiden skal testes (ibid).</li>
                            <li>Hvilken variant af kortsorteringen er bedst egnet (ibid).</li>
                        </ol>
                    </section>
                

                    <section class="valg-af-brugere">
                        <h3 class="underoverskrift">Valg af brugere</h3>
                        <ol class="liste">
                            <li>De kender til begreberne og betegnelserne der brugt i kortsorteringen (Gregersen &#38; Wisler-Poulsen, 2017). </li>
                            <li>De er en del af målgruppen. Principielt vil det være fortrak, men det kan gøres med folk udenfor målgruppen (ibid).</li>
                            <li>Hvor mange testpersoner man har, det anbefales man laver som minimum 5 test (ibid).</li>
                        </ol>
                    </section> <!-- valg af brugere -->

                    <section class="valg-af-elementer">
                        <h3 class="underoverskrift">Valg af elementer</h3>
                        <p class="body-text">
                            Kortsortering egner sig bedst til store elementer med mange informationer (Gregersen &#38; Wisler-Poulsen, 2017). Derfor er det oplagt at man normalt tester den globale menu på siden eller en anden form for menu med mange menupunkter (ibid). 
                        </p>
                        
                        <p class="body-text">
                            Det kan dog også gøres på en hel underside hvor man tager links, knapper og overskrifter sammen i en kortsortering for den valgte underside (ibid). 
                        </p>
                        
                        <p class="body-text">
                            Undgå at kortsortering bliver mere end 50 kort (ibid). Det er for uoverskueligt og tidskrævende for testpersonerne (ibid).
                        </p>
                    </section> <!-- valg af elementer -->
                </section> <!-- tre-overvejelser -->
                
                <section class="forberedelse-kort">
                    <h2 class="overskrift">Forberedelse</h2>
                    
                    <p class="body-text">
                        Til forberedelse skal følgende ting blive gået igennem:
                    </p>
                    
                    <ul class="liste">
                        <li>
                            Kortene skal laves og de skal være ensartet så der er ingen kort der skiller sig ud (Gregersen &#38; Wisler-Poulsen, 2017).
                        </li>
                        <li>Brugeren giver samtykke via en blanket (ibid).</li>
                        <li>Det er hvad gøre det muligt at sende sit budskab ud og faktisk få en indflydelse hos folk (som man ønsker) (ibid).</li>
                        <li>Stedet man laver testen er ved et bord med rigelig plads (ibid).</li>
                        <li>Vælge om man vil side foran eller ved siden af testpersonen som testleder (ibid).</li>
                    </ul>
                </section> <!-- Forberedelse -->

                <section class="udforelse-kort">
                    <section class="udforelse-kort-intro">
                        <h2 class="overskrift">Udførelse</h2>
                        <p class="body-text">
                            Udførelsen af testen kan gøres på mange måder (Gregersen &#38; Wisler-Poulsen, 2017). De to overordnede måder man kan udføre testen, er ved den åbne test eller den lukket test (ibid).
                        </p>
                    </section>
                    
                    <section class="aben-test-kort">
                        <h3 class="underoverskrift">Åben test</h3>
                        <ol class="liste">
                            <li>
                                Testpersonen får et kort ad gangen og sætter dem i grupper efter den forståelse de har for de givende kort. Der er mulighed for omrokering (Gregersen &#38; Wisler-Poulsen, 2017).
                            </li>
                            <li>Når alle kort er givet ud, så bedes testpersonen om at give være gruppe en overskrift</li>
                            <li>
                                Derefter spørg man indtil brugerens overvejelser og udfordringer, der var med at gennemføre testen (ibid). Man kan eventuelt spørg ind til observationer man har gjort sig under testen (ibid).
                            </li>
                        </ol>
                    </section>
                    
                    <section class="lukket-test-kort">
                        <h3 class="underoverskrift">Lukket test</h3>
                        <ol class="liste">
                            <li>
                                Testlederen præsenterer de overskrifter som der er sat op for siden i forvejen (Gregersen &#38; Wisler-Poulsen, 2017).
                            </li> 
                            <li>
                                Testperson får et kort ad gangen og lægger dem hvor de synes det giver mest mening i forhold til de givende overskrifter (ibid).
                            </li>
                            <li>
                                Afslutningen her er ens med den åbne test (ibid).
                            </li>
                        </ol>
                    </section>
                </section> <!-- udførelse -->

                <section class="rapport-kort">
                    <section class="rapport-kort-intro">
                        <h2 class="overskrift">Kortsortering på Resturant Flammen</h2>
                        <p class="body-text">
                            I min rapport om Usability testmetoder lavede vi en kortsortering på Resturants Flammen. Vi valgte deres globale menu, som element, og testede 3 personer.
                        </p>
                        <p class="body-text">
                            I testen var der to rundter hvor personen skulle sortere kortene og det var en rundte der var en åben test, og derefter en form for lukket test i anden rundte.
                        </p>
                    </section>
                    
                    <section class="testmetoder-table">
                        <h2 class="overskrift">Testmetoder</h2>
                        <div class="background-image-usability">
                        <table class="usability-table">
                            <tr>
                                <th>Opgave: sortere under kategorier mellem de forskellige hovedemner</th>
                            </tr>
                            <tr>
                                <td>
                                    <p class="body-text">
                                        <strong>Mål</strong> - Problemstilling: Sortere de forskellige underemner i forskellige kategorier og derefter re-sorter dem efter de kategorier der vil vises efterfølgende.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="sub-skrift">Første runde:</h4>
                                    <h4 class="sub-skrift">Optimale løsning</h4>
                                    <p class="body-text">Alle emner er sorteret som på sidens egen menu</p>

                                    <h4 class="sub-skrift">Alternativ</h4>
                                    <p class="body-text">Person har ikke helt det samme som hjemmesiden, men der er ligheder</p>

                                    <h4 class="sub-skrift">Anden runde:</h4>
                                    <h4 class="sub-skrift">Optimale løsning</h4>
                                    <p class="body-text">Testpersonen er enig i sortering</p>

                                    <h4 class="sub-skrift">Alternativ</h4>
                                    <p class="body-text">Testpersonen vil forstå og være enig i hjemmesidens sortering eller give god konstruktiv feedback</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h4 class="sub-skrift">Opgavetekst</h4>
                                    <p class="body-text">Du har de her underemne som er del af en menu/navigation af en side. Dit job er at kategorisere dem som du ser logisk. Derefter vil vi give dig de kategorier der faktisk er og du vil igen sortere dem, men efter de givende kategorier.</p>
                                </td>
                            </tr>
                        </table>
                        </div>
                        <a class="pdf-link" href="usability/Usability%20testmetoder.pdf" target="_blank">Denne kortsortering kommer fre usability testmetoder rapporten</a>
                    </section> <!-- opgaveskabelon -->
                    
                    <section class="resultater-kort">
                        <section class="image-grid">
                            <div id="rundte1-img">
                                <h3 class="underoverskrift">Første rundte</h3>
                                <img src="usability/kortsortering/rundte1-kort.jpg" alt="Første rundte af en kortsortering jeg lavede i usability testmetoder rapporten" class="kort-img" >
                             </div>
                            <div id="rundte2-img">
                                <h3 class="underoverskrift">Anden rundte</h3>
                                <img src="usability/kortsortering/rundte2-kort.jpg" alt="Første rundte af en kortsortering jeg lavede i usability testmetoder rapporten" class="kort-img" >
                            </div>
                        </section>
                        
                        <h3 class="underoverskrift">Deres begrundelse for deres sortering</h3>
                        <ol class="liste">
                            <li>
                                Menuer hører sammen under samme kategori i mit hoved, og ALLERGILISTE sat jeg sammen med dem fordi det giver god mening er det der viser maden også har en allergiliste med.
                            </li>
                            <li>
                                Nyheder er noget som jeg for det meste ser på en hjemmesides forside, så tænker den står for sig selv. Der er forventning til at nyheder betyder tilbud eller nye retter for eksempel.
                            </li>
                            <li>
                                Alle byerne sat jeg sammen fordi de var ens da de alle er lokationer
                            </li>
                            <li>
                                Gavekortene var indlysende
                            </li>
                            <li>
                                FAQ, HISTORIE, COVID-19 OG SOCIALT ANSVAR lyder alle sammen som noget man vil prøve at finde yderligere information om.
                            </li>
                        </ol>
                        
                        <h4 class="sub-skrift">Undtagelse</h4>
                        <p class="body-text">
                            Der var så 1 ud af de 3 testpersoner som satte ALLERGILISTE under information fordi de tænkte at det var noget man gerne ville ”informeres om” i mere detaljer.
                        </p>
                        
                        <h3 class="underoverskrift" id="konklusion-kort">Konklusion</h3>
                        <p class="body-text">
                            Det kan ses at der er stor enighed i hvordan menuen skulle se ud i første rundte mellem testdeltagerne. Men iforhold til Resturant Flammens kortsortering er der visse forskelle. Den stor forskel er at Resturant Flammen lægger "Julefrokost-menu" under Mad ud af huset og testdeltagerne puttet det under samme kategori som alle andre menukort.
                        </p>
                        
                        <p class="body-text">
                            Den anden stor forskel var at "Nyheder" ligger under information hos Flammen. Testdeltagerne kunne forstå hvorfor, men troede det ville være selvstændigt fordi de fleste sider har nyheder som det første man ser på siden.
                        </p>
                    </section>
                    
                    
                    <a class="pdf-link" href="usability/Usability%20testmetoder.pdf" target="_blank">Hele rapporten med kortsorteringen kan findes i denne PDF</a>
                </section> <!-- rapport -->
                
                
                <section class="dok-kort">
                    <h2 class="overskrift">Dokumentation</h2>
                    <p class="body-text">
                        Når man dokumenterer for resultatet for en kortsortering, kan det gøre på forskellig vis: 
                    </p>
                    
                    <ul class="liste">
                         <li>
                             Maskinelt og statistisk (er bedst til stor mængder data) (Gregersen &#38; Wisler-Poulsen, 2017).
                        </li>
                         <li>
                             Tolke resultaterne når det er test på lille skala (ibid).
                        </li>
                         <li>
                             Have en visuel illustration af testene enten på computer i en model eller på en tavle med billeder (ibid). Hvor man så kan sammenligne og diskutere resultaterne (ibid).
                        </li>
                    </ul>
                    
                    <p class="body-text">
                        Resultaterne skal ikke direkte oversættes til ens struktur på siden (ibid). Det skyldes at testdeltagerne ikke har den fulde kontekst af hvad strukturen dækker over og dens formål på selve websiden (ibid). Men hvis det er tydeligt at se eller er blevet tydeligt udtrykket af testdeltagerne at noget er svært at forstå så vilde være hensigtsmæssigt at fortage ændringer på (ibid).
                    </p>
                </section> <!-- Lige på og råt -->



                
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            Gregersen, O. &#38; Wisler-Poulsen, I., 2017. Kortsortering. I: Usability - Testmetoder til mere brugbare websites. s.l.:Wislers Forlag, pp. 86-96.
                        </li>
                        <li>
                            Rijna, Drescher &#38; Lank, Nicolaj, 2020, 26. Oktober: <a class="pdf-link" href="usability/Usability%20testmetoder.pdf" target="_blank">Usability testmetoder</a>
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
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
    <body class="foto-php">
        <header>
            <?php include 'menu.inc' ?>
        </header>
        
        <button class="darklight-switch" onclick="myFunction()">Dark/Light Mode</button>

        
        <div id="mitgrid-foto">
            <h1 class="titel">Fotografering</h1>
            
            
            <section class="exposure">
                <section class="exposure-intro">
                    <h2 class="overskrift">Exposure</h2>

                    <p class="body-text">
                        Simpelt sagt så er exposure en måling på hvor meget lys kameraet fanger for at kunne se det objekt den tager billeder af (Long, 2015). Ligesom vores øjne der har brug for en vis mængde lys for at kunne se noget (ibid). Og hvis man justerer indstillingerne som Brændvidde, lukketid, ISO osv. Så vil billedet blive mørkere eller lysere (ibid).
                    </p>
                </section>
                
                <div class="background-image1">
                    <section class="exposure-triangle">
                        <figure class="card">
                            <img src="foto/eksponering-default.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Med standardindstillinger er billedet for mørkt
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/eksponering-iso.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    ISO sat til 800 gøre billedet lysere
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/eksponering-lukkertid.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketiden sat ned til 40 gøre billedet lysere
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/eksponering-bland.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Blænden sat op til 11 gøre billedet meget mørkt
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->
                    </section>
                </div> <!-- div til at få background image ind lige præcis hvor jeg vil det -->
                    
                <section class="exposure-parameter-resultat">
                    <h3 class="underoverskrift">De tre parameters indflydelse på exposure</h3>
                    <p class="body-text">
                        Efter at have taget disse billeder hvor vi beholdt to parameter konstante og ændret på en, og gjorde det tre gange. Kunne vi se at hver parameter ændret eksponering af billedet:
                    </p>
                    
                    <ul class="liste">
                        <li>Jo større ISO'en er, desto lysere bliver billedet</li>
                        <li>Jo mindre lukketiden er, desto lysere bliver billedet</li>
                        <li>Jo større blænden er, desto mørkere bliver billedet </li>
                    </ul>
                </section>
                
                <section class="exposure-luk-iso">
                    
                    <h3 class="underoverskrift">Lukketid i samspil med ISO</h3>
                    
                    <div class="background-image2">
                        <section class="img-luk-iso">
                            <figure class="card">
                                <img src="foto/eksponering-lukkertid-iso1.jpg" class="card-img-top" alt="...">
                                <figcaption class="card-body">
                                    <p class="body-text-fig">
                                        Lukketid på 125
                                    </p>
                                    <p class="body-text-fig">
                                        ISO på 800
                                    </p>
                                </figcaption>
                            </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                            <figure class="card">
                                <img src="foto/eksponering-lukkertid-iso2.jpg" class="card-img-top" alt="...">
                                <figcaption class="card-body">
                                    <p class="body-text-fig">
                                        Lukketid på 400
                                    </p>
                                    <p class="body-text-fig">
                                        ISO på 2000
                                    </p>
                                </figcaption>
                            </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                            <figure class="card">
                                <img src="foto/eksponering-lukkertid-iso3.jpg" class="card-img-top" alt="...">
                                <figcaption class="card-body">
                                    <p class="body-text-fig">
                                        Lukketid på 50
                                    </p>
                                    <p class="body-text-fig">
                                        ISO på 320
                                    </p>
                                </figcaption>
                            </figure> <!-- BOOTRAP IMAGE CARDS HVOR Vi HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->
                        </section>
                    </div>
                    
                    <section class="resultat-luk-iso">
                        <h3 class="underoverskrift">Resultat</h3>
                        <p class="body-text">
                            Vi tog billeder med en forskellige ISO-værdier og lukketider og fandt fremtil, at Når man justerer lukkeren, kan man bestemme hvor længe den er åben, og dermed hvor meget lys den kan lukke ind.
                        </p>

                        <p class="body-text">
                            Derudover når man justerer ISO'en, justerer man på hvor følsomt billedet er overfor lys.
                        </p>
                    </section>
                </section>
                
                    
                <section class="exposure-luk-blande">
                    
                    <h3 class="underoverskrift">Lukketid i samspil med blænderen</h3>
                
                    <div class="background-image1">
                        <section class="img-luk-blande">
                            <figure class="card">
                                <img src="foto/eksponering-blande-lukker1.jpg" class="card-img-top" alt="...">
                                <figcaption class="card-body">
                                    <p class="body-text-fig">
                                        Lukketid på 30
                                    </p>
                                    <p class="body-text-fig">
                                        Blænderen på 7,1
                                    </p>
                                </figcaption>
                            </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                            <figure class="card">
                                <img src="foto/eksponering-blande-lukker2.jpg" class="card-img-top" alt="...">
                                <figcaption class="card-body">
                                    <p class="body-text-fig">
                                        Lukketid på 15
                                    </p>
                                    <p class="body-text-fig">
                                        Blænderen på 10
                                    </p>
                                </figcaption>
                            </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                            <figure class="card">
                                <img src="foto/eksponering-blande-lukker3.jpg" class="card-img-top" alt="...">
                                <figcaption class="card-body">
                                    <p class="body-text-fig">
                                        Lukketid på 8
                                    </p>
                                    <p class="body-text-fig">
                                        Blænderen på 13
                                    </p>
                                </figcaption>
                            </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->
                        </section>
                    </div>
                </section>
                
                <section class="resultat-luk-blande">
                    <h3 class="underoverskrift">Resultat</h3>
                    <p class="body-text">
                        Ved at tage billeder med forskellige blænde-værdier og lukketider fandt vi fremtil at, når man justerer blænderen, justerer man på hvor meget lys der kan lukkes ind gennem objektivet, hvilket også justerer på dybdeskarphed. 
                    </p>
                    <p class="body-text">
                        Derudover, når man justerer lukkeren, kan man bestemme hvor længe den er åben, og dermed hvor meget lys den kan lukke ind. 
                    </p>
                </section>
            </section> <!-- EXPOSURE -->
            
            <section class="iso">
                <section>
                    <h2 class="overskrift">ISO</h2>

                    <p class="body-text">
                        ISO styre lys følsomheden, og jo højere ISO man har desto mere støj, fremkommer på billedet (Østergaard, 2020). Og jo lavere ISO desto mindre støj er der på billedet (ibid).
                    </p>
                </section>
            </section> <!-- ISO -->
            
            <section class="lukketid">
                <section class="lukketid-intro">
                    <h2 class="overskrift">Lukketid</h2>

                    <p class="body-text">
                        Lukketid er den tid det tager for lukkeren at åbne for at tage billedet målt i sekunder (Østergaard, 2020). Hvis lukketiden er langsom, så vil der et langt delay fra du trykke på knappen til at tage et fotografi (ibid). Det vil også gøre billedet lysere og give det mere Bevægelsessløring og rystelser (ibid). Hvis lukketiden er hurtig, så vil der ikke være nogen delay efter du trykker knappen og billedet ville være stillestående uden rystelser eller sløring (ibid). En typisk lukketid er omkring 1/125s (ibid).
                    </p>
                </section>
                
                <div class="background-image2">
                    <section class="lukketid-hop">
                        <figure class="card">
                            <img src="foto/lukkertid1.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketid på 1/30
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/lukkertid3.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketid på 1/100
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/lukkertid4.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketid på 1/250
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/lukkertid2.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketid på 1/1000
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->
                    </section>
                </div>
                
                <section class="lukketid-hop-resultat">
                    <h3 class="underoverskrift">Resultat</h3>
                    <p class="body-text">
                        Vi tog billeder med lukkertid på 1/30, 1/250, 1/1000, 1/125, 1/60 og 1/100. 
                    </p>
                    <p class="body-text">
                        Vi fandt fremtil at man begynder at fornemme bevægelsen, hvor vi stadig er genkendelig, ved en lukkertid på omkring 1/100.
                    </p>
                    <p class="body-text">
                        Vi også ud af at billedet af mig begynder at fremstå helt skarpt og frosset, ved omkring 1/250. 
                    </p>
                </section>
                
                <div class="background-image2">
                    <section class="lukketid-holdt">
                        <figure class="card">
                            <img src="foto/lukkertid-holdt1.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketid på 1/15
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/lukkertid-holdt2.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketid på 1/60
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/lukkertid-holdt3.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lukketid på 1/500
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->
                    </section>
                </div>
                
                <section class="lukketid-holdt-resultat">
                    <h3 class="underoverskrift">Resultat</h3>
                    <p class="body-text">
                        Vi tog billeder med lukkertiden på 1/15, 1/60, 1/500. 
                    </p>
                    <p class="body-text">
                        Vi kunne fornemme og efter at have taget billedet at omkring 1/60 begynder det at blive muligt at holde kameraet stille. Hvor hvis det er mindre, så er det meget mere besværeligt fordi det tager langtid for lukkeren at lukke så kameraet kan tage billedet.
                    </p>
                </section>    
            </section> <!-- LUKKERTID -->
            
            <section class="blande">
                <section class="blande-intro">
                    <h2 class="overskrift">Blænde</h2>

                    <p class="body-text">
                        Blænde er det som styrer dybdeskarpheden på billedet (Østergaard, 2020). Jo højere blændetal der er desto mere mindre, bliver blændeåbningen og billedet ville have alt i fokus, så lille dybdeskarphed (ibid). Derimod hvis blændetallet er mindre så er blændeåbningen større og billedet ville være sløret i baggrunden, så en stor dybdeskarphed (ibid).
                    </p>
                </section>
                
                <div class="background-image1">
                    <section class="blande-dybde">
                        <figure class="card">
                            <img src="foto/dybdeskarphed1.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lav blænde
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/dybdeskarphed2.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Mellemstor blænde
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/dybdeskarphed3.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Høj blænde
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->
                    </section>
                </div>
                    
                <section class="blande-resultat">
                    <h3 class="underoverskrift">Resultat</h3>
                    <p class="body-text">
                        Ved at lege lidt rundt med blænderen, fandt vi frem til, at blænderen gøre baggrunden sløret jo mindre blændeværdien er, og omvendt. Så Jo lavere blændeværdi, desto lavere dybdeskarphed og omvendt.
                    </p>
                    <p class="body-text">
                        Vi fandt også ud af, at jo højere blændeværdien er, desto længere er lukkertiden.
                    </p>
                </section>
            </section> <!-- BLÆNDE -->
            
            <section class="brandvidde">
                <section class="brandevidde-intro">
                    <h2 class="overskrift">Brændevidde</h2>

                     <p class="body-text">
                        Brændvidde er det som bestemmer the field of view af billedet som kameraet tager, ligesom vores field of view når vi kigger ud kan siges at være tæt på 180 grader (Long, 2015). Det gør også at kameraet kommer tættere eller længere væk fra billedets focal point altså det du tager et billede af (ibid). Det er ligesom en form for zoom hvor du ved at rotere på dit objektiv kan bestemme ved mm hvor tæt på eller langt væk perspektivet dit kamera tager billedet fra (ibid). En typisk brændvidde ligger mellem 50-80mm (ibid).
                     </p>
                </section>
                
                <div class="background-image2">
                    <section class="brandevidde-low-high">
                        <figure class="card">
                            <img src="foto/brandevidde4.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Lav brændevidde
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->

                        <figure class="card">
                            <img src="foto/brandevidde3.jpg" class="card-img-top" alt="...">
                            <figcaption class="card-body">
                                <p class="body-text-fig">
                                    Høj brændevidde
                                </p>
                            </figcaption>
                        </figure> <!-- BOOTRAP IMAGE CARDS HVOR JEG HAR UDSKIFTET DIV'ERNE MED SEMANTISKE TAGS <figure> og <figurecaption> -->
                    </section>
                </div>
                
                <section class="lego-brandvidde-resultat">
                    <h3 class="underoverskrift">Resultat</h3>
                    <p class="body-text">
                        Vi legede lidt rundt med forskellige brændevidder og fandt fremtil, at når brændevidden er høj så kan man se rigtig meget af scenariet på billedet og alt var tydeligt og klart.
                    </p>
                    <p class="body-text">
                        Hvorimod når brændevidden er lav så kan man ikke se så meget af scenariet på billedet og man kan kun se det forreste objekt tydeligt, derefter objektet i mellemgrund mindre tydeligt, og til sidst er det helt sløret i baggrunden.
                    </p>
                    <p class="body-text">
                        Det som er overraskkende er, at den lave brændevidde fik det bagerste objekt til at se ud som om det var tættere på baggrunden end den egentlig var. Så brændevidden ændre på perspektivet i et billede.
                    </p>
                </section>
            </section> <!-- BRÆNDEVIDDE -->
            
            <section class="refleksion-foto">
                <h2 class="overskrift">Første gang med et kamera i hånden</h2>
                <p class="body-text">
                    Før studiet havde jeg aldrig arbejdet med et kamera før. Ja jeg har taget billeder med min telefon en masse, men aldrig med et kamera med lenser osv.
                </p>
                <p class="body-text">
                    Jeg gik fra at have ingen forstand på hvordan et kamera virker til at have en grundlæggende forståelse for hvordan de forskellige indstillingerne arbejder sammen og ændre på billedets eksponering, dybdeskarphed og perspektiv.
                </p>
                <p class="body-text">
                    Øvelsen hvor jeg tog billeder af lego hjalp rigtig meget med at få mig til at få den forståelse jeg har nu. især fordi jeg havde Veli som gruppekammerat som arbejder som fotograf, så han kunne forklare mig hvordan det hele virket på en meget simpel måde, som var til at forstå.
                </p>
            </section> <!-- REFLEKSION -->
            
            <section class="kilder-foto">
                <h2 class="overskrift">Kilder</h2>
                <ul class="kildeliste">
                    <li>
                        Long, B., 2015. Linkedin Learning. [Online] 
                        Available at: <a href="https://www.linkedin.com/learning/introduction-to-photography/understanding-exposure?u=37312532">https://www.linkedin.com/learning/introduction-to-photography/understanding-exposure?u=37312532</a> 
                        [Senest hentet eller vist den 19 december 2020].
                    </li>
                    <li>
                        Long, B., 2015. Linkedin Learning. [Online] 
                        Available at: <a href="https://www.linkedin.com/learning/introduction-to-photography/understanding-lenses?u=37312532">https://www.linkedin.com/learning/introduction-to-photography/understanding-lenses?u=37312532</a> 
                        [Senest hentet eller vist den 19 december 2020].
                    </li>
                    <li>
                        Østergaard, N., 2020. Introduktion til fotografering, s.l.: Moodle.
                    </li>
                </ul>
            </section> <!-- KILDER -->
        </div> <!-- mitgrid til fotografering -->
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- darkmode scripts -->
        <script>
            function myFunction() {
                var element = document.body;
                element.classList.toggle("darkmode-foto");
            }
        </script>
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
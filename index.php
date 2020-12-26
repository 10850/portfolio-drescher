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
    <!-- Karma fra google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mit stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
    <body class="index-php">
        <div id="mitgrid">
            <header>
                <nav class="globalmenu">
                    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
                      <a class="navbar-brand" href="index.php"><img src="closure-logo-white.png"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="burgermenu-line"></span>
                          <span class="burgermenu-line"></span>
                          <span class="burgermenu-line"></span>
                          <!-- labels til at lave tre hvide linjer som brugermenu ikon-->
                      </button> <!-- burgermenuen -->

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" id="nav-link-uxui" href="designthinking.php">Design Thinking </a>
                          </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Kodning
                                </a>
                                <div class="dropdown-menu" id="kodning-dropdown" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="attributter.php">HTML</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="server.php">Serverer</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="boxmodellen.php">CSS</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="versionsstyring.php">Versionsstyring</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="php.php">PHP</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="bootstrap.php">Bootstrap</a>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Kommunikation
                                </a>
                                <div class="dropdown-menu" id="kommunikation-dropdown" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="hvad-er-kommunikation.php">Hvad er kommunikation?</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="humanistisk.php">Paradigmer</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="kvalitativ.php">Empiri</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="opskrifttilgodtale.php">Præsentationsteknik</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="lacth.php">Informationsarkitektur</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="licens.php">Ophavsret og Licensering</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="bmc.php">BMC</a>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Usability
                                </a>
                                <div class="dropdown-menu" id="usability-dropdown" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="hvad-er-usability.php">Hvad er Usability?</a>
                                    <div class="dropdown-divider"></div>  
                                  <a class="dropdown-item" href="gangstertest.php">Gangstertest</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="sporgeskema.php">Spørgeskema</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="ekspertvudering.php">Ekspertvudering</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="kortsortering.php">Kortsortering</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="brugertest.php">Brugertest</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="tilgangelighed.php">Tilgængelighedstest</a>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Design
                                </a>
                                <div class="dropdown-menu" id="design-dropdown" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="smokeythebear.php">Photoshop</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="artboards.php">Illustrator</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="farver.php">Farver</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="typografi.php">Typografi</a>
                                    <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href=gestaltlove.php>Gestaltlovene</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="lofi.php">Wireframing</a>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" id="nav-link-ui2" href="videoproduktion.php">Videoproduktion </a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" id="nav-link-ui3" href="fotografering.php">Fotografering </a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" id="nav-link-projekter" href="projekter.php"> Projekter</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Om siden
                                </a>
                                <div class="dropdown-menu" id="omsiden-dropdown" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="refleksion.php">Refleksion</a>
                                        <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="kilder.php">Kilder</a>
                                        <div class="dropdown-divider"></div>
                                </div>
                            </li>
                        </ul>
                      </div> <!-- menulisten -->
                    </nav> <!-- bootstrap navbar component -->                    
                </nav> <!-- Global menu til mobil og tablet -->
                
                <!-- DESKTOP  GLOBAL MENU -->
                    <nav class="globalmenu-desktop">
                        <nav class="navbar fixed-top navbar-expand-lg navbar-custom">
                          <a class="navbar-brand" href="index.php"><img src="closure-logo-white.png"></a>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" id="nav-link-uxui-desktop" href="designthinking.php">Design Thinking </a>
                                </li>
                              <div class="dropdown-menu-mega">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Kodning
                                    </a>
                                        <div class="dropdown-menu" id="background-kodning" aria-labelledby="navbarDropdown">
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>HTML</h3></li>
                                            <li><a class="dropdown-item" href="attributter.php">Attributter</a></li>
                                            <li><a class="dropdown-item" href="kodeskikke.php">Kodeskikke</a></li>
                                            <li><a class="dropdown-item" href="semantisketags.php">Semantiske tags</a></li>
                                            <li><a class="dropdown-item" href="seo.php">SEO</a></li>
                                            <li><a class="dropdown-item" href="metadata.php">Metadata</a></li>
                                            <li><a class="dropdown-item" href="adressering.php">Adressering</a></li>
                                            <li><a class="dropdown-item" href="videoogbilleder.php">Video og Billeder</a></li>
                                            <li><a class="dropdown-item" href="formularer.php">Formularer, felttyper og formatering</a></li>
                                          </ul> 
                                          
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>CSS</h3></li>
                                            <li><a class="dropdown-item" href="boxmodellen.php">Boxmodellen</a></li>
                                            <li><a class="dropdown-item" href="selectors.php">Selectors</a></li>
                                            <li><a class="dropdown-item" href="properties.php">Properties</a></li>
                                            <li><a class="dropdown-item" href="position.php">Positionering</a></li>
                                            <li><a class="dropdown-item" href="cssgrid.php">CSS Grid</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Versionsstyring</h3></li>
                                            <li><a class="dropdown-item" href="versionsstyring.php">Versionsstyring</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>PHP</h3></li>
                                            <li><a class="dropdown-item" href="php.php">PHP</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Bootstrap</h3></li>
                                            <li><a class="dropdown-item" href="bootstrap.php">Bootstrap</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Min udvikling i kodning</h3></li>
                                            <li><a class="dropdown-item" href="min-udvikling-kodning.php">Min udvikling i kodning</a></li>
                                          </ul>
                                            
                                        </div>
                                    </li> <!-- mega dropdown -->
                                 </div> <!-- container til styling for mega dropdown -->
                                 <div class="dropdown-menu-mega">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Kommunikation
                                    </a>
                                        <div class="dropdown-menu" id="background-kommunikation" aria-labelledby="navbarDropdown">
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Hvad er Kommunikation?</h3></li>
                                            <li><a class="dropdown-item" href="hvad-er-kommunikation.php">Hvad er kommunikation?</a></li>
                                          </ul> 
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Paradigmer</h3></li>
                                            <li><a class="dropdown-item" href="humanistisk.php">Humanistiske</a></li>
                                            <li><a class="dropdown-item" href="samfundsvidenskabelig.php">Samfundsvidenskablige</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Empiri</h3></li>
                                            <li><a class="dropdown-item" href="kvalitativ.php">Kvalitativ</a></li>
                                            <li><a class="dropdown-item" href="kvantitativ.php">Kvantitativ</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Præsentationsteknik</h3></li>
                                            <li><a class="dropdown-item" href="opskrifttilgodtale.php">Den Gode Præsentation</a></li>
                                            <li><a class="dropdown-item" href="deathbypowerpoint.php">Death by Powerpoint</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Informationsarkitektur</h3></li>
                                            <li><a class="dropdown-item" href="lacth.php">LATCH</a></li>
                                            <li><a class="dropdown-item" href="webstruktur.php">Webstruktur</a></li>
                                            <li><a class="dropdown-item" href="navigering.php">Navigeringsdesign</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Ophavsret og Licensering</h3></li>
                                            <li><a class="dropdown-item" href="licens.php">Ophavsret og Licensering</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Business Model Canvas</h3></li>
                                            <li><a class="dropdown-item" href="bmc.php">BMC</a></li>
                                          </ul>
                                        </div>
                                    </li> <!-- mega dropdown -->
                                 </div> <!-- container til styling for mega dropdown -->
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Usability
                                    </a>
                                    <div class="dropdown-menu" id="background-usability" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="hvad-er-usability.php">Hvad er Usability?</a>
                                          <a class="dropdown-item" href="gangstertest.php">Gangstertest</a>
                                          <a class="dropdown-item" href="sporgeskema.php">Spørgeskema</a>
                                          <a class="dropdown-item" href="ekspertvudering.php">Ekspertvudering</a>
                                          <a class="dropdown-item" href="kortsortering.php">Kortsortering</a>
                                          <a class="dropdown-item" href="brugertest.php">Brugertest</a>
                                          <a class="dropdown-item" href="tilgangelighed.php">Tilgængelighedstest</a>
                                    </div>
                                  </li> <!-- standard dropdown class="dropdown-standard" -->
                                <div class="dropdown-menu-mega">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Design
                                    </a>
                                        <div class="dropdown-menu" id="background-design" aria-labelledby="navbarDropdown">
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Illustrator</h3></li>
                                            <li><a class="dropdown-item" href="artboards.php">Artboards</a></li>
                                            <li><a class="dropdown-item" href="blendtool.php">Blend tool</a></li>
                                            <li><a class="dropdown-item" href="captainamerica.php">Captain America</a></li>
                                            <li><a class="dropdown-item" href="directselection.php">Direct Selection Tool</a></li>
                                            <li><a class="dropdown-item" href="shapebuildertool.php">Shape Builder Tool</a></li>
                                          </ul> 
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Photoshop</h3></li>
                                            <li><a class="dropdown-item" href="smokeythebear.php">Smokey the Bear</a></li>
                                            <li><a class="dropdown-item" href="smooth.php">Smooth</a></li>
                                            <li><a class="dropdown-item" href="contentawarefill.php">Content Aware Fill</a></li>
                                            <li><a class="dropdown-item" href="spothealingtool.php">Spot Healing Tool</a></li>
                                            <li><a class="dropdown-item" href="smartobject.php">Smart Object</a></li>
                                            <li><a class="dropdown-item" href="outofframe.php">Out of Frame</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Farver</h3></li>
                                            <li><a class="dropdown-item" href="farver.php">Farver</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Typografi</h3></li>
                                            <li><a class="dropdown-item" href="typografi.php">Typografi</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Gestaltlovene</h3></li>
                                            <li><a class="dropdown-item" href="gestaltlove.php">Gestaltlovene</a></li>
                                          </ul>
                                          <ul class="mega-dropdown-desktop">
                                            <li class="mega-menu-list-title"><h3>Wireframing</h3></li>
                                            <li><a class="dropdown-item" href="lofi.php">Lo-Fi</a></li>
                                            <li><a class="dropdown-item" href="hifi.php">Hi-Fi</a></li>
                                          </ul>
                                        </div>
                                    </li> <!-- mega dropdown -->
                                 </div> <!-- container til styling for mega dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Video og Foto
                                    </a>
                                    <div class="dropdown-menu" id="background-videoogfoto" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" id="video-link-dektop" href="videoproduktion.php">Videoproduktion</a>
                                      <a class="dropdown-item" id="fotografering-link-desktop" href="fotografering.php">Fotografering</a>
                                    </div>
                                </li> <!-- standard dropdown class="dropdown-standard" -->
                                <li class="nav-item active">
                                    <a class="nav-link" href="projekter.php">Projekter </a>
                                </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Om siden
                                </a>
                                <div class="dropdown-menu" id="menulisteflyt-omsiden" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="refleksion.php">Refleksion</a>
                                  <a class="dropdown-item" href="kilder.php">Kilder</a>
                                </div>
                              </li> <!-- standard dropdown class="dropdown-standard" -->
                            </ul>
                          </div>
                        </nav> <!-- bootstrap menu -->
                    </nav> <!-- global menu desktop -->                 
                <!-- DESKTOP  GLOBAL MENU -->
            </header> <!-- Her lægger de globale menuer for mobil, tablet og desktop -->

        <div id="grid-desktop">
            <nav class="forsidemenu">
                <img id="forsideimg" src="forsidemenuimg-light.png">
                
                <ul id="uxuimenu">
                    <li><div id="uxoguiboks"><h3>UX/UI</h3></div> <!-- Boksen som siger UX/UI så jeg kan lave en rød boks --></li>
                    <li><a id="designthinkingforside" href="designthinking.php">Design Thinking</a> <!-- Link til design thinking som skal stå for sig selv på toppen af billedet --></li>
                </ul>
                
                
                <ul id="uxmenu">
                    <li><div id="uxboks"><h3>UX</h3></div> <!-- Boksen som siger UX så jeg kan lave en rød boks --></li>
                    <li><a id="kodningforside" href="attributter.php">Kodning</a></li>
                    <li><a id="kommunikationforside" href="hvad-er-kommunikation.php">Kommunikation</a></li>
                    <li><a id="usabilityforside" href="hvad-er-usability.php">Usability</a></li>
                </ul> <!-- Links som skal stå under UX og på venstre side af billedet -->
                
                
                <ul id="uimenu">
                    <li><div id="uiboks"><h3>UI</h3></div> <!-- Boksen som siger UI så jeg kan lave en rød boks --></li>
                    <li><a id="designforside" href="outofframe.php">Design</a></li>
                    <li><a id="videoforside" href="videoproduktion.php">Videoproduktion</a></li>
                    <li><a id="fotoforside" href="fotografering.php">Fotografering</a></li>
                </ul> <!-- Links som skal stå under UI og på højre side af billedet -->
                
            </nav> <!-- Alt indhold til menuen på forsiden -->
        
            <section class="valuepropersition">
                <p id="desktop-tekst">Kig tilbage for</p>
                <h1 id="overskrift">Dejlige minder og viden</h1>
                <h4 id="underoverskrift">Tjek ud de fede emner vi har haft gennem studiet</h4>
            </section> <!-- Section om den valuepropersition som siden tilbyder -->
            </div> <!-- container til grid for desktop -->
        </div> <!-- MITGRID -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
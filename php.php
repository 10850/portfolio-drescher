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
    <body class="php-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
            
            <div id="mitgrid-php">
                
                <h1 class="titel">Serverside(PHP)</h1>
                
                <section id="hvad-er-serversider">
                    <h2 class="overskrift">Hvad er serversider?</h2>
                    
                    <p class="body-text">
                        En serverside er et program som afvikles på serveren, som danner en webside (Østergaard, 2020). Det er ikke en færdig webside, men snarere færdig lavede stumper man kan putte ind på en side (ibid). Man kan sige det er en form for component man kan tilkalde til brug på en webside (ibid).
                    </p>
                </section> <!-- Hvad er serversider -->
        
                <section id="php-include">
                    <section id="prereqs-include">
                        <h2 class="overskrift">PHP-include</h2>
                        <h3 class="underoverskrift">Forudsætninger</h3>
                        <p class="body-text">
                            For at skrive PHP kode så skal man lave en .php fil så serveren ved at det er PHP den arbejder med (ibid). Man kan både skrive HTML og PHP i en PHP-fil og serveren kan skelne imellem dem (Østergaard, 2020). Det er på grund af at man i PHP skal skrive &#60;?php og ?&#62; omkring sin PHP kode, hvor man med HTML kun skrive &#60; og &#62; omkring sin kode (ibid).
                        </p>
                    </section>
                    
                    <section id="hvaderinclude">
                        <section id="hvadinclude-intro">
                            <h3 class="underoverskrift">PHP-include navigation</h3>
                            <p class="body-text">
                                Include er en PHP-kommando, som bruges til at tage stumper af kode og inkludere det på mange forskellige sider (W3schools, 2020). Så man har sin stumpe kode i en fil for eksempel menu.inc (ibid). sætter det ind i en string og include kommandoen vil tage den stump kode og placere den på siden. Include skrives som følgende (ibid):
                            </p>
                        </section>
                        
                        <figure id="kode-menuinc">
                            <h4 class="sub-skrift">Menu.inc fil med navigations kode</h4>
                            <img src="kodning/serverside/php-include-menu-inc.png" alt="billed af menu.inc fil med navigation i den" id="menuinc-kode">
                        </figure>
                        
                        <figure id="kode-include">
                            <h4 class="sub-skrift">PHP-inlcude kommandoen hvor du linker til menu.inc</h4>
                            <img src="kodning/serverside/include.jpg" alt="billed af php-include kode på brackets" id="php-include-kode">
                        </figure>
                        
                        <figure id="kode-include-screen">
                            <h4 class="sub-skrift">Nu har alle sider en navigation ved brug af PHP-include</h4>
                            <img src="kodning/serverside/navigation-side.jpg" alt="billed af siden med navigation" id="php-include-kode">
                            <a href="http://10850.web.eadania.dk/php-include-navigation/side2.php">Hvis du gerne vil besøge siden og prøve navigationen</a>
                        </figure>
                    </section>
                    
                    <section id="andremuligheder">
                        <h3 class="underoverskrift">Andre muligheder</h3>
                        <p class="body-text">
                            Man kan også lave en include (once), som gør at hvis den stumpe kode der skal ind allerede er brugt en gang, så vil include ikke sætte det ind (Østergaard, 2020). Det fordi man har fortalt den, at man kun vil have det ind i siden en gang (ibid).
                        </p>

                        <p class="body-text">
                            PHP require er en anden mulighed som er næsten identisk til PHP include, med den forskel at hvis der er en fejl eller den fil man har indsat ikke kan findes så stopper scriptet (W3schools, 2020). Hvorimod include vil forsætte med at udføre scriptet uden filen (ibid).
                        </p>
                        
                        
                    </section>
                </section>

                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            W3schools, 2020. PHP Include Files. [Online] 
                            Available at: https://www.w3schools.com/php/php_includes.asp
                            [Senest hentet eller vist den 1 December 2020].
                        </li>
                        <li>
                            Østergaard, N., 2020. Serversideprogrammering med PHP. [Online] 
                            Available at: https://eadania.mrooms.net/mod/resource/view.php?id=162759&#38;redirect=1
                            [Senest hentet eller vist den 29 November 2020].
                        </li>
                        <li>
                            Rijna, Drescher: <a href="http://10850.web.eadania.dk/php-include-navigation/side2.php">Php-include-navigation</a>; Fra 19. oktober 2020
                        </li>
                    </ul>
                </section>
            </div> <!-- MITGRID -->
        
        <?php include 'footer.inc' ?> <!-- footer -->
        
        <!-- Bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
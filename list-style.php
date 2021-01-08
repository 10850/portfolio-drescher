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
    <body class="list-style-php">
        <header class="kodning-header">
            <?php include 'menu.inc' ?>
        </header>
        
             <?php include 'undermenu-css.inc' ?>
            
            <div id="mitgrid-list-style">
                
                <h1 class="titel">List styling i CSS</h1>
                
                <section id="lists-css"> 
                    <section id="lists-intro">
                        <h2 class="overskrift">List-style property</h2>
                        <p class="body-text">
                            List-style property’en giver muligheden for at style sin unordered(&#60;ul&#62;) og ordered(&#60;ol&#62;) lister på visse måder (W3schools, 2020):
                        </p>
                    </section>
                    
                    <section class="mt" id="display-table">
                        <h3 class="underoverskrift">Display styles/values</h3>
                        <table class="usability-table">
                            <tr>
                                <th>Value</th>
                                <th>Beskrivelse</th>
                            </tr>

                            <tr>
                                <td>List-style-type</td>
                                <td>Specificere hvilken slags list punkter man vil have som ”disc” (W3schools, 2020).</td>
                            </tr>

                            <tr>
                                <td>List-style-position</td>
                                <td>Specifere hvor list-items(&#60;li&#62;) skal stå (ibid).</td>
                            </tr>

                            <tr>
                                <td>List-style-image</td>
                                <td>Giver mulighed for at uploade et billede til markerne på listen (ibid).</td>
                            </tr>

                            <tr>
                                <td>List-style-none</td>
                                <td>Fjerne alt styling fra listen (ibid).</td>
                            </tr>
                        </table>
                    </section>
                </section>
        
                <section id="list-style-image">
                    <h2 class="overskrift">Soft Bites List-style-image</h2>
                    <p class="body-text">
                        I one page projektet brugte vi List-style-image til at lave prikkerne i en liste om til hundepoter, ved at bruge list-style-image og linket det til en billed-fil af en hundepote.
                    </p>
                    
                    <figure>
                        <h4 class="sub-skrift">List-style-image koden</h4>
                        <img src="kodning/css/list/listkode.png" id="list-style-image-kode">
                    </figure>
                    
                    <figure class="backgrounds-icons-kodning">
                        <h4 class="sub-skrift">List-style-image på Soft Bites</h4>
                        <img src="kodning/css/list/list-style-image.jpg" id="list-style-image-screen">
                        <a href="http://10850.web.eadania.dk/softbites2/index.html" target="_blank" class="pdf-link">Siden med listen kan ses på vores One Page for Soft Bites</a>
                    </figure>
                </section>
        
        
                <section class="kilder">
                    <h2 class="overskrift">Kilder</h2>
                    <ul class="kildeliste">
                        <li>
                            W3schools, 2020. CSS Lists. [Online] 
                            Available at: <a href="https://www.w3schools.com/css/css_list.asp" target="_blank">https://www.w3schools.com/css/css_list.asp</a> 
                            [Senest hentet eller vist den 9 december 2020].
                        </li>
                        <li>
                            Rijna, D., Andreasen. F. I. N. &#38; Christensen, H. M. L., 2020. Soft Bites. [Online] 
                            Available at: <a href="http://10850.web.eadania.dk/softbites2/index.html" target="_blank">http://10850.web.eadania.dk/softbites2/index.html</a>
                            [Senest hentet eller vist den 9 december 2020].
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
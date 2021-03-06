<?php

$bdd = new PDO('mysql:host=localhost;dbname=portfolio_projet', "root", "");

$query = $bdd->query('SELECT * FROM projet');
$results = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_global.css">
    <link rel="stylesheet" href="style_base.css">
    <link rel="stylesheet" media="only screen and (min-width:1024px)" href="style_desktop.css">
    <title>Mon CV - Kilian DUCLOS</title>
</head>

<!-- TODO: scroll-snap-type -->

<body>

    <header>

        <div id="headerContent">

            <div id="headerContentImage">

                <img src="img/portrait.jpg" alt="Ma photo">

            </div>

            <div id="headerContentTitleZone">

                <h1 id="headerContentTitle">Kilian DUCLOS</h1>

            </div>

        </div>

        <nav class="headerNavigationBar">

            <a id="dot" onclick="currentSlide(1)">A propos</a>
            <a id="dot" onclick="currentSlide(2)">Projet</a>
            <a id="dot" onclick="currentSlide(3)">Diplomes</a>
            <a id="dot" onclick="currentSlide(4)">Compétences</a>


        </nav>

    </header>

    <div class="headerBlock"></div>

    <div class="section">

        <div class="sectionContent fade" style="display: block;">

            <div id="sectionContentAbout">

                <h1>A propos de moi</h1>

                <p class="sectionContentAboutText">
                    Bonjour à vous et bienvenue sur ce site web. Je me présente, Kilian DUCLOS, et j'ai <span
                        id="aboutAge"></span> ans.
                    Après une première expérience sur un poste mélant comptabilité et informatique, c'est une nouvelle
                    page que je
                    souhaite ouvrir dans ma vie professionnelle.
                </p>
                <p class="sectionContentAboutText">
                    C'est sur le monde du développement web que c'est jeté mon dévolu. Un monde qui me paraissait
                    innacessible, mais que
                    j'arrive désormais à toucher du bout des doigts. Mes connaissances sur le domaine sont encore à
                    leurs balbutiements, et
                    le chemin à parcourir est encore long. Pour y palier, j'essaie de me démarquer avec mes capacités
                    d'adaptation et d'apprentissage,
                    mon aisance avec l'informatique en général, ainsi qu'une pincée de curiosité et de créativité.
                </p>
                <p class="sectionContentAboutText">
                    Pour parcourir ce chemin, je souhaite me former en alternance, et pour ça j'ai besoin de vous! Et je
                    serais plus qu'enchanté de
                    rejoindre votre équipe afin de vous montrer de quoi je suis capable.
                </p>

                <h2>Passions</h2>

                <ul>
                    <li>Skateboard</li>
                    <li>Zythologie</li>
                    <li>Jeu de société</li>
                </ul>


            </div>

        </div>

        <div class="sectionContent fade">


            <div class="projet">

            <h1>Projets</h1>

            <?php 
          
          foreach ($results as $line) {
              # code...
         
      
            ?> 

            <div class="projetBloc">

                <div class="projetImg">

                    <img src=<?=$line["img"] ?>  alt="image projet">

                </div>

                <div class="projetInfo">

                    <h2 class="projetTitle"><?=$line["name"]?></h2>

                    <p class="projetDescription projetText"><?=utf8_encode($line["description"])?></p>

                    <p class="projetTechno projetText"><?=$line["techno"]?></p>
                    
                    <div class="projetLink">

                        <a href="<?=$line["link"]?>" class="button">Lien</a>

                    </div>

                </div>

            </div>

            <?php } ?>

            </div>

            <div class="zone">

                <!-- <h1>Mes expérience professionnelle</h1> -->

                <!-- <ul>
                    <li>
                        <ul>
                            <li>
                                <div class="orga_liste">

                                    <div class="img_liste">

                                        <img src="img/logo_ca.png" alt="logo CACBI">

                                    </div>

                                    <div class="texte_liste">

                                        <h3>Assistant comptable et reponsable informatique</h3>
                                        <h4>Depuis 2021 | CACB Immobilier (21)</h4>
                                        <p>Saisie de facture et rapprochement comptable, gestion et maintenance du park
                                            informatique.</p>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="orga_liste">

                                    <div class="img_liste">

                                        <img src="img/logo_ca.png" alt="logo CACBI">

                                    </div>

                                    <div class="texte_liste">

                                        <h3>Comptable Gestion Locative</h3>
                                        <h4>2020 - 2021 | CACB Immobilier (21)</h4>
                                        <p>Saisie de facture, affectation des encaissements, rapprochement bancaire.</p>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="orga_liste">

                                    <div class="img_liste">

                                        <img src="img/transdev_logo.png" alt="Transdev BFCEST">

                                    </div>

                                    <div class="texte_liste">



                                        <h3>Assistant Admnistratif</h3>
                                        <h4>2019 | TRANSDEV BFC EST (21)</h4>
                                        <p>Mise en place et création d'un outil de suivi de caisse, suivi du park auto
                                        </p>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>

        </div>

        <div class="sectionContent fade">


            <div id="dipl" class="zone">

                <h1>Mes formations et certifications</h1>

                <h2>Formations:</h2>

                <ul>
                    <li>
                        <ul>
                            <li>
                                <div class="orga_liste">

                                    <div class="img_liste">

                                        <img src="img/lycee_jgf.jpg" alt="Lycée Jean Guéhenno">

                                    </div>

                                    <div class="texte_liste">

                                        <h3>BTS Comptabilité et Gestion</h3>
                                        <h4>2017 - 2019 | Lycée Jean Guéhenno (35)</h4>
                                        <p>Enseignement fondamentaux en comptabilité générale, sociale et analytique.
                                            Initiation à la création d'algorithme VBA et à l'utilisation de base SQL.
                                        </p>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="orga_liste">

                                    <div class="img_liste">

                                        <img src="img/lycee_jgf.jpg" alt="Lycée Jean Guéhenno">

                                    </div>

                                    <div class="texte_liste">

                                        <h3>BACCALAUREAT Economique et Social</h3>
                                        <h4>2014 - 2017</h4>
                                        <p>Option: Science Sociale et Politique</p>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                </ul>

                <h2>Certifications:</h2>

                <ul>
                    <li>
                        <ul>
                            <li>
                                <div class="orga_liste">

                                    <div class="img_liste">

                                        <img src="img/google_analytics_logo.png" alt="Google Analytics">

                                    </div>

                                    <div class="texte_liste">

                                        <h3>Google Analytics pour les débutants</h3>
                                        <h4>2021 | Google Analytics Academy</h4>
                                        <p>Initiation à l'utilisation de Google Analytics</p>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="orga_liste">

                                    <div class="img_liste">

                                        <img src="img/google_atelier_num_logo.jpg" alt="Google Atelier Numérique">

                                    </div>

                                    <div class="texte_liste">

                                        <h3>Fondamentaux du marketing numérique</h3>
                                        <h4>2021 | The Open University - Google Atelier Numérique</h4>
                                        <p>Initiation aux principes de bases en marketing numérique: Référencement SEO,
                                            SEA, ciblage d'audience, utilisation des réseaux sociaux...</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="sectionContent fade">
            <div id="skills" class="zone">

                <h1>Mes compétences</h1>

                <h2>3 Soft Skills</h2>

                <ul>
                    <li>Grande aisance à l'informatique</li>
                    <li>Capacité d'adaptation proche du tardigrade</li>
                    <li>Créativitude</li>
                </ul>

                <h2>3 Hard Skills</h2>

                <ul>
                    <li>Logique Comptable</li>
                    <li>Veille informationelle</li>
                    <li>Analyse de données</li>
                </ul>



                <h2>Language</h2>

                <div id="prog_lang">
                    <img src="img/html5_logo.png" alt="HTML5">
                    <img src="img/css3_logo.png" alt="CSS3">
                </div>



                <h2>Logiciels</h2>

                <ul>
                    <li>Virtual Studio Code</li>
                    <li>Inkscape</li>
                    <li>Gimp</li>
                    <li>Excel</li>
                    <li>Ableton</li>
                </ul>

            </div>

        </div>



    </div>
    <br>






    <footer id="footer">

        <div class="footerContact">
            <p>Me contacter:</p>
            <a href="mailto:kilian.duclos@laposte.net">Mail</a>
            <a href="tel:+33676573941">Téléphone</a>
        </div>

        <div class="footerDownload">
            <p>Télécharger mon CV</p>
            <a href="">Télécharger</a>
        </div>


    </footer>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="script/ageCalculator.js"></script>
    <script src="script/slideshow.js"></script>
    <script src="script/shrinkHeader.js"></script>

</body>

</html>

<?php
?>
    <!DOCTYPE html>

    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,900i" rel="stylesheet">
        <link rel="stylesheet" href="public/css/style.css">
        <title>Un cv pour la postérité</title>
    </head>

    <body>
        <!------------------------ le bandeau superieur ----------------------------->
        <!-------------------------------------------------------------->
       <?php 
       include("header.php") ;
       ?>
       
       <!------------------------ le bandeau CV ----------------------------->
        <!-------------------------------------------------------------->
        <header class="header">
            <nav class="nav">
                <ul>
                    <li class="nav__link"><a href="#competence">Mes compétences</a></li>
                    <li class="nav__link"><a href="#formation">Mes formations</a></li>
                    <li class="nav__link"><a href="#experience">Mon expérience</a></li>
                    <li class="nav__link nav__link--active"><a href="#projet">Mes projets</a></li>
                    <li class="nav__link"> <a href="/about.html">about me</a> </li>
                    <li class="nav__link"> <a href="/contact.html">contact</a> </li>
                </ul>
            </nav>
        </header>

        <main class="">


            <!---Titre Dev Conc d'App en devenir-->
            <!------------------------------------------------------------------->
            <section class="bloc1">
                <!--<img src="./public/img/background.jpg" alt="fond">-->
                <div class="bloc1">
                    <h2>
                        Raphaël <strong>  Hervieux</strong>
                    </h2>
                                    </div>

                <div class="bloc1">
                    <p>Développeur <strong> Concepteur Web</strong> <br/> en devenir</p>
                </div>
            </section>
            <!---section -->
            <section class="bloc2">
                <!--Right Block----------------------------------------->
                <section class="  ">
                    <!--Mes compétences-->
                    <section>
                        <h1 id="competence">Mes compétences professionnelles</h1>
                        <h2>Un savoir-être au service d'un savoir-faire</h2>
                        <ul>
                            <li>Savoir-être</li>
                            <ul>
                                <li>Capacité de remise en cause et qualités interpersonnelles fortes par la culture du retour d’expérience systématique</li>
                                <li>Capacité d’adaptation développée dans des environnements multiculturels et internationaux</li>
                                <li>Un sens de l'écoute et du service renforcé à travailler sur des projets variés</li>
                                <li>Une expertise technique en constante progression grâce à une formation perpétuelle</li>
                            </ul>
                            <li>Savoir-faire</li>
                            <ul>
                                <li>Motivé par le besoin de faire toujours mieux et à relever de nouveaux challenges, appuyé par de solides bases acquises lors de mon parcours</li>
                                <li>Grande rigueur et capacité de concentration exacerbée</li>
                                <li>Facilité à travailler de manière autonome</li>
                                <li>Maitrise de l'anglais technique</li>
                                <li>Fort intérêt pour les nouvelles technologies</li>
                            </ul>
                            <li>Pédagogie</li>
                            <ul>
                                <li>Capacité à orchestrer la mise en œuvre de formation</li>
                                <li>Identifier les problématiques de formation et permettre de les résoudre</li>
                                <li>Simplexifier des concepts afin de permettre leur apprentissage</li>
                            </ul>
                            <li>Management en situation complexe</li>
                            <ul>
                                <li>Facilitateur et force de proposition</li>
                                <li>Capacité de discernement dans l’incertitude éprouvée en opérations extérieures
                                </li>
                                <li>Meneur d’homme ayant le sens de la discipline</li>
                                <li>Appétence pour le travail d’équipe et l’organisation d’un travail collaboratif
                                </li>
                            </ul>
                        </ul>
                    </section>
                    <!--Mes formations-->
                    <section>
                        <h1 id="formation">Mes formations</h1>
                        <h2>Autodidacte et curieux, je me forme facilement</h2>
                        <ul>
                            <li>2021 – FORMATEUR CONCEPTEUR PÉDAGOGIQUE
                                <ul>
                                    <li>Concevoir une ingénierie de formation </li>
                                </ul>
                            </li>
                            <li>2020 – INGÉNIERIE PÉDAGOGIQUE
                                <ul>
                                    <li>ANC par l’Institut de NeuroCognitivisme (INC).</li>
                                    <li>Concepteur projet MERCURIO, l’innovation pédagogique à l'académie militaire de Saint-Cyr Coëtquidan</li>
                                </ul>
                            </li>
                            <li>2019 – FORMATEUR DE FORMATEUR
                                <ul>
                                    <li>FCM3 : Formation en pédagogie.</li>
                                    <li>PEDAGO 2 : Formation à l’ingénierie pédagogique et de la formation </li>
                                    <li>MONITORAT TOP : Enseignement de techniques d’optimisation</li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                    <!--mes experiences-->
                    <section>
                        <h1 id="experience">mes expériences professionnelles</h1>
                        <h2>Polyvalent, je m'adapte rapidement</h2>
                        <ul>
                            <li>2018 – maintenant : Formateur de formateur - Saint-Cyr Coëtquidan</li>
                            <li>2016 – 2018 : Manager d’unité opérationnelle - Saint –Cyr Coëtquidan</li>
                            <li>2014 – 2016 : Directeur du centre de recrutement - Nantes</li>
                            <li>2012 – 2014 : Responsable d’unités spécialisées - ile de la Réunion</li>
                            <li>2009 – 2012 : Chef d’unité dans les Forces spéciales- Bayonne</li>
                            <li>2006 – 2009 : Formation universitaire et opérationnelle</li>
                            <li>2001 – 2006 : Manager d’équipe - Vannes</li>
                        </ul>

                    </section>
                </section>
            </section>
            <!------------------------Mes projets---------------------------->
            <!--------------------------------------------------------------->
            <section class="">
                <h1 id="projet">Mes projets</h1>
                <div class="proj-grid">
                    <section class="proj-prev" onclick="location.href='../Projet/Site Alpha/site V9/alpha.html'">
                        <div class="proj-prev__image">
                            <img src="/public/img/photography_1280w.jpg" srcset="
                                /public/img/photography_3000w.jpg 3000w,
                                /public/img/photography_1920w.jpg 1920w,
                                /public/img/photography_0864w.jpg 864w,
                                /public/img/photography_0640w.jpg 640w,
                                /public/img/photography_0640w.jpg 640w,
                                /public/img/photography_0420w.jpg 420w
                            " alt="project title goes here">
                        </div>
                        <h1 class="proj-prev__heading">
                            Site Alpha
                        </h1>
                        <p class="proj-prev__byline">
                            project keywords would go here
                        </p>
                    </section>
                    <section class="proj-prev">
                        <div class="proj-prev__image">
                            <img src="/public/img/photography_1280w.jpg" srcset="
                                /public/img/photography_3000w.jpg 3000w,
                                /public/img/photography_1920w.jpg 1920w,
                                /public/img/photography_0864w.jpg 864w,
                                /public/img/photography_0640w.jpg 640w,
                                /public/img/photography_0640w.jpg 640w,
                                /public/img/photography_0420w.jpg 420w
                            " alt="project title goes here">
                        </div>
                        <h1 class="proj-prev__heading">
                            Deuxième projet
                        </h1>
                        <p class="proj-prev__byline">
                            Un CV pour la postérité
                        </p>
                    </section>
                    <section class="proj-prev">
                        <div class="proj-prev__image">
                            <img src="/public/img/photography_1280w.jpg" srcset="
                                    /public/img/photography_3000w.jpg 3000w,
                                    /public/img/photography_1920w.jpg 1920w,
                                    /public/img/photography_0864w.jpg 864w,
                                    /public/img/photography_0640w.jpg 640w,
                                    /public/img/photography_0640w.jpg 640w,
                                    /public/img/photography_0420w.jpg 420w
                                " alt="project title goes here">
                        </div>
                        <h1 class="proj-prev__heading">
                            Project Title
                        </h1>
                        <p class="proj-prev__byline">
                            project keywords would go here
                        </p>
                    </section>
                    <section class="proj-prev">
                        <div class="proj-prev__image">
                            <img src="/public/img/photography_1280w.jpg" srcset="
                                        /public/img/photography_3000w.jpg 3000w,
                                        /public/img/photography_1920w.jpg 1920w,
                                        /public/img/photography_0864w.jpg 864w,
                                        /public/img/photography_0640w.jpg 640w,
                                        /public/img/photography_0640w.jpg 640w,
                                        /public/img/photography_0420w.jpg 420w
                                    " alt="project title goes here">
                        </div>
                        <h1 class="proj-prev__heading">
                            Project Title
                        </h1>
                        <p class="proj-prev__byline">
                            project keywords would go here
                        </p>
                    </section>
                </div>
            </section>
            <!--Left Block-->
            <aside class=" ">
                <div class="container">
                    <!--mes coordonnées-->
                    <ul>
                        <li> <img src="./public/img/tel.png" alt="tel"> 06 34 08 54 29</li>
                        <li><img src="./public/img/pin.png" alt="pin">16 rue Parc Foular 56400 Sainte Anne d 'Auray</li>
                        <li> <img src="./public/img/mail.png" alt="mail">raphael.hervieux@gmail.com</li>
                        <li> <img src="./public/img/reseau.png" alt="reseau">Linkedin.com/raphael-hervieux</li>
                    </ul>
                    <div class="container ">
                        <!--asics-->
                        <p>un esprit sain dans un corps sain</p>
                    </div>
            </aside>
        </main>
        <footer>
            <h1>mettre un footer</h1>
        </footer>
        -->
    </body>

    </html>
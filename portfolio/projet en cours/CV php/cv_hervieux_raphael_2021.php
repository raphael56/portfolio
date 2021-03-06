<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Curiculum Vitae R.HVX</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main_wrapper">
        <header>
            <div id="logo_de_page">
                <img id="logo" src="content/image/raphael_hervieux_mini.jpg" alt="raphael hervieux"/>
                <h2 id="titre_principal">Curriculum Vitae</h2> <!-------premier titre du document------->
            </div>
            <h2 id="mon_nom"><strong>Raphaël Hervieux</strong></h2> <!----mon prénom et nom----->
           <h3 id="modjo">Developpeur web en devenir</h3>
            <!-- le menu ----->
            <?php include ("menu.php");?>
            <!--fin du menu----->
        </header>
    <section>
        <div id="colonne_droite">
            <!--------*le coté droit du CV------>
            <div id="pitch">
                <!-----le pitch ---->
                <h1>A PROPOS DE MOI</h1>
                <p>Un parcours singulier marqué par des expériences empreintes de sens, doté d’une forte capacité de remise en question et d’anticipation.</p>
            </div>
            <!---- le trait de séparation en pointillé--->
            <div class="dashed">
<img src="content/image/dashed.png" alt="pointillé">
            </div>
            <div id="experience">
                <!---- expérience---->
                <h2> mon expérience </h2>
                <img class="icone_réduite secret" src="content/image/logo/yoga.png" alt="experience"/>
                <ul>
                    <li><p class="fonction">2011 – 2012 | Chef de groupe |</p>
                        <p class="ecriture_bleue">Force de proposition, discernement dans l’incertitude et meneur d’homme.</p>
                        <p class="descriptionFonction">Commandement d’un groupe de 10 personnes à Vannes et adjoint d’une section d’infanterie.</p>
                    </li>
                    <li><p class="fonction">2006 – 2009 | Formation d’officier|
                    <p class="ecriture_bleue">Chef de file dans le développement d’expertise en tactique et stratégie.</p>
                        <p class="descriptionFonction">Réussite au Concours de l’Ecole Militaire Interarmes, suivi d’un parcours diplômant et intégration dans le corps des officiers de carrière.</p>
                    </li>
                    <li><p class="fonction">2011 – 2012 | Chef d’unité Forces spéciales |</p>
                        <p class="ecriture_bleue">Expertise en préparation de missions sensibles à hautes valeurs ajoutées.<br>Analyser, anticiper et résoudre les problèmes.</p>
                        <p class="descriptionFonction">Chef d’unité au sein des Forces spéciales dont les missions sont l’infiltration parachutée, la libération d’otage et le contre-terrorisme.</p>
                    </li>
                    <li><p class="fonction">2012 – 2014 | Responsable d’unité spéciale |</p>
                        <p class="ecriture_bleue">Autonomie, management et organisation.</p>
                        <p class="descriptionFonction">Chef de section commando sur l’île de la Réunion / Intervenir dans la zone de responsabilité de l’océan indien et des Terres Australes et Antarctiques Françaises.</p>
                    </li>
                    <li><p class="fonction">2014 – 2016 | Chef de centre |</p>
                        <p class="ecriture_bleue">Collaboration, écoute et remise en question.</p>
                        <p class="descriptionFonction">Chef de Centre d’Information et de Recrutement des Forces Armées. Gestion managériale du centre interarmées et de la politique de recrutement de la région nantaise.</p>
                    </li>
                    <li><p class="fonction">2016 – 2018| Commandant d’unité |</p>
                        <p class="ecriture_bleue">Responsabilité, gestion et qualités humaines.</p>
                        <p class="descriptionFonction">Commandement des instructeurs et des formateurs des recrues initiales du Centre de Formation Initiale des Militaires du Rang de Coëtquidan.</p>
                    </li>
                    <li><p class="fonction">2018 – maintenant| Instructeur |</p>
                        <p class="ecriture_bleue">Education, savoir-être, respect et développement de soi.</p>
                        <p class="descriptionFonction">Formation au Comportement du Militaire et conception de l’ingénierie pédagogique au profit de formateurs et dispenser des cours au profit de toutes les populations en formation d’officier.</p>
                    </li>
                    </ul>
            </div>
            <!---- le trait de séparation en pointillé--->
            <div class="dashed">
                <img src="content/image/dashed.png" alt="pointillé">
            </div>
            <div id="formation">
                <!---- formation---->
                <img class="icone_réduite secret" src="content/image/logo/Etudes.png" alt="formation" height="96" width="96"/>
                <h2> ma formation </h2>
                <ul>
                    <li><p class="fonction">2006 – L2 SCIENCES DE L’INGENIEUR</p>
                        <p class="ecriture_bleue">Formation en sciences pendant le cursus de l’Ecole Militaire Interarmes.</p>
                    </li>
                    <li><p class="fonction">2019 – L3 DIPLÔME D’ETAT-MAJOR</p>
                        <p class="ecriture_bleue">Formation au management en état-major.</p>
                    </li>
                    <li><p class="fonction">2019 – FORMATEUR DE FORMATEUR</p>
                        <p class="ecriture_bleue">FCM3: Formation en pédagogie.</p>
                        <p class="descriptionFonction"><p>PEDAGO 2 : Formation à l’ingénierie pédagogique </p>
                        <p>MONITORAT TOP : Moniteur en techniques d’optimisation du potentiel</p>
                    </li>
                    <li><p class="fonction">2020 – INGENIERIE PEDAGOGIQUE</p>
                        <p class="ecriture_bleue"><a href="https://www.neurocognitivism.fr/" target="_blank">Praticien ANC: Approche neurosciences cognitives et comportementales</a> par l’Institut de NeuroCognitivisme (INC). </p>
                        <p>Concepteur du projet MERCURIO, l’innovation pédagogique aux Ecoles de Saint-Cyr Coëtquidan.</p>
                    </li>
                    <li><p class="fonction">2021 - FORMATEUR CONCEPTEUR PEDAGOGIQUE</p>
                        <p class="ecriture_bleue"><p><a href="https://www.francecompetences.fr/recherche/rncp/31678/">L2 Formateur Concepteur Pédagogique</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <aside id="colonne_gauche"> <!-----le coté gauche du cv---->
            <div id="photo_profil"> <!----la photo de profil---->
                <a>
                    <img id="photo_portrait" src="content/image/raphael_hervieux.jpg" alt="raphael hervieux"/>
                </a>
            </div>
            <div id="intitule_de_poste">
                <!-----l'intitulé de poste---->
                <h2 id="dev_web">Développeur Web en devenir</h2>
            </div>
            <div id="contact">
                <!----contact---->
            </div>
            <div id="aventure">
                <!-----loisirs----->
                <div>
                    <img class="icone_réduite secret" src="content/image/logo/yoga.png" alt="loisirs"/></div>

                <ul>
                    <li class="ecriture_bleue">un esprit sain<br>dans un corps sain</li>
                    <li><p></p></li>
                    <li><p></p></li>
                    <li><img src="content/image/Ironman.png" alt="ironman" height=50px width=50px> <p>Ironman Finisher<br>2013-2015</p></li>
                    <li><a><img src="content/image/Ultra_marin.png" alt=ultratrail" height=50px width=50px><img src="content/image/Diagonale_des_fous.png" alt="" height=50px width=50px></a><p>Ultra-trail 2013 - 2017</p></li>
                    <li><img id="kerguelen" src="content/image/Kerguelen.png" alt=kerguelen" height=50px width=50px><p>Raid aux Kerguelen<br>150km en autonomie complète</p></li>
                </ul>
            </div>
            <div class="secret" id="competences">
                <!----compétences---->
                <img class="icone_réduite" src="content/image/logo/competences.png" alt="compétences"/>
                <h2> mes compétences </h2>
                <p>
                    <ul>
                        <li>Photoshop CS</li>
                    <li>Adobe premiere</li>
                    <li>Genially</li>
                    <li>Suite Office</li>
                    </ul>
            </div>
        </aside>
    </section>
    <!-----footer ---->
    <?php include ("footer.php"); ?>
</div> <!-----fin du main wrapper---->
</body>
</html>
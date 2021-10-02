<?php require("auth_student.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <link rel="shortcut icon" type="image/jpg" href="logo.png" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ADA Institute of Technology</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <style>
        .btn{
     width:150px;
     height: 40px;
     outline:none;
     border:none;
     border-radius:48px;
     background-color:#26375f;
     color:white;
     text-transform: uppercase;
     font-weight:700;
     margin:10px 0;
     transition:all 0.5s;
 } 
 .btn:hover{
    background-color:#4e7ff1;
 }
    </style>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logo.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">ACCUEIL</a></li>
                    <li><a href="#features-sec">TRAITS</a></li>
                    <li><a href="#faculty-sec">FACULTÉ</a></li>
                    <li><a href="#course-sec">PROGRAMMES</a></li>
                    <li><a href="#contact-sec">CONTACTER NOUS</a></li>
                    <li><a href="update.php">MODIFIER PROFILE</a></li>
                    <li><a href="questionnaire.php">QUESTIONNAIRE</a></li>
                    <li><a href="#" style="text-transform: uppercase;"><?php echo $NAME; ?></a></li>
                    <!--for connecting-->
                </ul>
            </div>

        </div>
    </div>
    <!--NAVBAR SECTION END-->
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>THE UNIQUE METHOD</h1>
                                    <button class="btn solid"  onclick="window.location.href='logout.php'">Log Out</button>
                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>UNIQUE APPROACH</h1>
                                    <button class="btn solid"  onclick="window.location.href='logout.php'">Log Out</button>
                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>ADA - Institute of Technology</h1>
                                    <button class="btn solid"  onclick="window.location.href='logout.php'">Log Out</button>
                                </li>
                                <!-- End Slider 03 -->
                            </ul>
                        </div>

                       


                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION END-->
    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">

                <div class="col-lg-12  col-md-12 col-sm-12">

                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"><i class="fa fa-circle-o-notch"></i> WELCOME TO THE ADA-IT <i class="fa fa-circle-o-notch"></i> </h2>
                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">LISTE DE TRAITS </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Chez ADA-IT, nous délectons d'une culture d'apprentissage par la pratique.
                    Dans trois départements, nos élèves allient rigueur analytique à la curiosité,
                    à l'imagination ludique et à l'appétit pour résoudre les problèmes
                    les plus difficiles au service de la société.
                </p>
            </div>

        </div>
        <!--/.HEADER LINE END-->


        <div class="row">


            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <i class="fa fa-paper-plane-o fa-4x icon-round-border"></i>
                    <h3>Education</h3>
                    <hr />
                    <hr />
                    <p style="text-align:justify;">
                        Nos étudiants de premier cycle travaillent côte à côte avec les professeurs,
                        s'attaquent aux défis mondiaux, abordent des questions fondamentales et
                        traduisent les idées en actions. Nos étudiants diplômés et post-doctorants
                        représentent l’une des cohortes les plus talentueuses et les plus diversifiées
                        au monde. De la science et l'ingénierie à l'architecture, en passant par
                        la gestion, les programmes interdisciplinaires, nous offrons l'excellence à
                        tous les niveaux. Nous sommes également les pionniers de l'éducation numérique
                        - comme ADAx - qui offre un accès flexible au contenu ADA rigoureux pour les apprenants de tous âges.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <i class="fa fa-bolt fa-4x icon-round-border"></i>
                    <h3>NOTRE APPROACHE</h3>
                    <hr />
                    <hr />
                    <p style="text-align:justify;">
                        Notre campus est un atelier pour inventer le futur et
                        nous sommes tous des apprentis, apprenant les uns des
                        autres au fur et à mesure. Parce que nous aimons faire
                        des choses, et nous aimons avoir un impact, inventer,
                        collaborer et traduire l'expertise des étudiants pour
                        atteindre le monde.Les étudiants peuvent poursuivre
                        des projets périscolaires et parascolaires
                        virtuellement infinis - ici à ADA-IT, dans
                        le centre d'innovation du Grand Boston et dans
                        le monde entier.Notre campus de bâtiments
                        numérotés de manière idiosyncrasique constitue
                        un endroit privilégié pour tirer le meilleur parti de votre potentiel.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <i class="fa fa-magic fa-4x icon-round-border"></i>
                    <h3>OPEN LEARNING</h3>
                    <hr />
                    <hr />
                    <p style="text-align:justify;">
                        ADA-IT est le pionnier de nouvelles méthodes d'enseignement
                        et d'apprentissage, sur notre campus et dans le monde entier,
                        en inventant et en tirant parti des technologies numériques.
                        ADAx, le portefeuille de cours en ligne massivement ouverts
                        de l’Institut, offre un accès flexible à une gamme de cours
                        interactifs développés et dispensés par des instructeurs de l’ADA.
                        Et l’option d’apprentissage numérique originale d’ADA,
                        OpenCourseWare, continue d’offrir aux enseignants et aux
                        apprenants du monde entier le matériel pour plus
                        de 2 450 cours ADA, disponibles gratuitement en ligne.

                    </p>
                </div>
            </div>


        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="faculty-sec">
        <div class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">NOTRE FACULTÉ </h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        La communauté ADA-IT est animée par un objectif commun:
                        <br>
                        créer un monde meilleur grâce à l'éducation,
                        à la recherche et à l'innovation. Nous sommes amusants et décalés,
                        élitistes mais pas élitistes, inventifs et artistiques,
                        obsédés par les chiffres et accueillants pour les personnes talentueuses, peu importe d'où elles viennent.
                    </p>
                </div>

            </div>
            <!--/.HEADER LINE END-->

            <div class="row">


                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/chinese.jpg" class="img-rounded" />
                        <h3>WANG LEI </h3>
                        <hr />
                        <h4>Département <br />d'Ingénierie</h4>
                        <p style="text-align:justify;">
                            “Engineers like to solve problems.
                            If there are no problems handily available,
                            they will create their own problems."

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/white.jpg" class="img-rounded" />
                        <h3>JANE DIO ALEXANDRA</h3>
                        <hr />
                        <h4>Département <br /> d'Architecture</h4>
                        <p style="text-align:justify;">
                            “Architecture is the learned game,
                            correct and magnificent,
                            of forms assembled in the light.”

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/black.jpg" class="img-rounded" />
                        <h3>EBONY DECORSA</h3>
                        <hr />
                        <h4>Département <br />de Management</h4>
                        <p style="text-align:justify;">
                            “Good management is the art of making
                            problems so interesting and their solutions
                            so constructive that everyone wants
                            to get to work and deal with them.”
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FACULTY SECTION END-->
    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">NOS PROGRAMMES </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Intensément curieux et motivés à explorer,
                    les gens d'ADA-IT apprécient la réflexion analytique rigoureuse,
                    l'ingéniosité, la résolution pratique de problèmes et les grandes idées nouvelles.
                    Stimulante, solidaire et ludique, la communauté ADA-IT devient,
                    pour de nombreux étudiants, une résidence secondaire.
                </p>
            </div>

        </div>
        <!--/.HEADER LINE END-->


        <div class="row set-row-pad">
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="assets/img/building.jpg" class="img-thumbnail" />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                    <strong> 250+</strong> ENGINEERING COURSES
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>Aéronautique et astronautique
                                    <br>
                                    Génie Biologique
                                    <br>
                                    Ingénieur Chimiste
                                    <br>
                                    Génie Civil et Environnemental
                                    <br>
                                    Données, Systèmes et Société
                                    <br>
                                    Génie Électrique et Informatique
                                    <br>
                                    Science et Génie des Matériaux
                                    <br>
                                    Génie Mécanique
                                    <br>
                                    Génie Médical et Science
                                    <br>
                                    Science et Génie Nucléaires
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                    <strong> 150+</strong> ARCHITECTURE COURSES
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>Arts et Sciences Médiatiques
                                    <br>
                                    Etudes et Planification Urbaines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                    <strong> 53+</strong> MANAGEMENT COURSES
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>
                                    Management
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s">
                    <span style="font-size:40px;">
                        <strong> 5000+ </strong>
                        <hr />
                        Étudiants
                    </span>
                </div>
            </div>



        </div>
    </div>
    <!-- COURSES SECTION END-->
    <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CONTACT US </h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            Cette section est réservée pour les réclamations des Étudiants
                        </p>
                    </div>

                </div>
                <!--/.HEADER LINE END-->
                <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form >
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button  type="submit" class="btn btn-info btn-block btn-lg">ENVOYER</button>
                            </div>
                   
                        </form>
                    </div>

                   




                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                <h2><strong>Our Location </strong></h2>
                <hr />
                <div ">
                        <h4>234/80,BOBOI STREET,</h4>
                        <h4>LONDON-UK</h4>
                        <h4><strong>Call:</strong>  + 69-420-990-1738 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>info@ADAIT.com</h4>
                    </div>


                </div>
                 <div class=" col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2><strong>Social Conectivity </strong></h2>
                    <hr />
                    <div>
                        <a href="#"> <img src="assets/img/Social/facebook.png" alt="" /> </a>
                        <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                        <a href="#"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                </div>


            </div>
        </div>
        <!-- CONTACT SECTION END-->

        <!-- FOOTER SECTION END-->

        <!--  Jquery Core Script -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!--  Core Bootstrap Script -->
        <script src="assets/js/bootstrap.js"></script>
        <!--  Flexslider Scripts -->
        <script src="assets/js/jquery.flexslider.js"></script>
        <!--  Scrolling Reveal Script -->
        <script src="assets/js/scrollReveal.js"></script>
        <!--  Scroll Scripts -->
        <script src="assets/js/jquery.easing.min.js"></script>
        <!--  Custom Scripts -->
        <script src="assets/js/custom.js"></script>
        <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>

</html>
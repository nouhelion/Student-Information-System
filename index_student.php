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
                    <li><a href="#faculty-sec">FACULT??</a></li>
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
                    Chez ADA-IT, nous d??lectons d'une culture d'apprentissage par la pratique.
                    Dans trois d??partements, nos ??l??ves allient rigueur analytique ?? la curiosit??,
                    ?? l'imagination ludique et ?? l'app??tit pour r??soudre les probl??mes
                    les plus difficiles au service de la soci??t??.
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
                        Nos ??tudiants de premier cycle travaillent c??te ?? c??te avec les professeurs,
                        s'attaquent aux d??fis mondiaux, abordent des questions fondamentales et
                        traduisent les id??es en actions. Nos ??tudiants dipl??m??s et post-doctorants
                        repr??sentent l???une des cohortes les plus talentueuses et les plus diversifi??es
                        au monde. De la science et l'ing??nierie ?? l'architecture, en passant par
                        la gestion, les programmes interdisciplinaires, nous offrons l'excellence ??
                        tous les niveaux. Nous sommes ??galement les pionniers de l'??ducation num??rique
                        - comme ADAx - qui offre un acc??s flexible au contenu ADA rigoureux pour les apprenants de tous ??ges.
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
                        autres au fur et ?? mesure. Parce que nous aimons faire
                        des choses, et nous aimons avoir un impact, inventer,
                        collaborer et traduire l'expertise des ??tudiants pour
                        atteindre le monde.Les ??tudiants peuvent poursuivre
                        des projets p??riscolaires et parascolaires
                        virtuellement infinis - ici ?? ADA-IT, dans
                        le centre d'innovation du Grand Boston et dans
                        le monde entier.Notre campus de b??timents
                        num??rot??s de mani??re idiosyncrasique constitue
                        un endroit privil??gi?? pour tirer le meilleur parti de votre potentiel.
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
                        ADA-IT est le pionnier de nouvelles m??thodes d'enseignement
                        et d'apprentissage, sur notre campus et dans le monde entier,
                        en inventant et en tirant parti des technologies num??riques.
                        ADAx, le portefeuille de cours en ligne massivement ouverts
                        de l???Institut, offre un acc??s flexible ?? une gamme de cours
                        interactifs d??velopp??s et dispens??s par des instructeurs de l???ADA.
                        Et l???option d???apprentissage num??rique originale d???ADA,
                        OpenCourseWare, continue d???offrir aux enseignants et aux
                        apprenants du monde entier le mat??riel pour plus
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
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">NOTRE FACULT?? </h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        La communaut?? ADA-IT est anim??e par un objectif commun:
                        <br>
                        cr??er un monde meilleur gr??ce ?? l'??ducation,
                        ?? la recherche et ?? l'innovation. Nous sommes amusants et d??cal??s,
                        ??litistes mais pas ??litistes, inventifs et artistiques,
                        obs??d??s par les chiffres et accueillants pour les personnes talentueuses, peu importe d'o?? elles viennent.
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
                        <h4>D??partement <br />d'Ing??nierie</h4>
                        <p style="text-align:justify;">
                            ???Engineers like to solve problems.
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
                        <h4>D??partement <br /> d'Architecture</h4>
                        <p style="text-align:justify;">
                            ???Architecture is the learned game,
                            correct and magnificent,
                            of forms assembled in the light.???

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/black.jpg" class="img-rounded" />
                        <h3>EBONY DECORSA</h3>
                        <hr />
                        <h4>D??partement <br />de Management</h4>
                        <p style="text-align:justify;">
                            ???Good management is the art of making
                            problems so interesting and their solutions
                            so constructive that everyone wants
                            to get to work and deal with them.???
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
                    Intens??ment curieux et motiv??s ?? explorer,
                    les gens d'ADA-IT appr??cient la r??flexion analytique rigoureuse,
                    l'ing??niosit??, la r??solution pratique de probl??mes et les grandes id??es nouvelles.
                    Stimulante, solidaire et ludique, la communaut?? ADA-IT devient,
                    pour de nombreux ??tudiants, une r??sidence secondaire.
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
                                <p>A??ronautique et astronautique
                                    <br>
                                    G??nie Biologique
                                    <br>
                                    Ing??nieur Chimiste
                                    <br>
                                    G??nie Civil et Environnemental
                                    <br>
                                    Donn??es, Syst??mes et Soci??t??
                                    <br>
                                    G??nie ??lectrique et Informatique
                                    <br>
                                    Science et G??nie des Mat??riaux
                                    <br>
                                    G??nie M??canique
                                    <br>
                                    G??nie M??dical et Science
                                    <br>
                                    Science et G??nie Nucl??aires
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
                                <p>Arts et Sciences M??diatiques
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
                        ??tudiants
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
                            Cette section est r??serv??e pour les r??clamations des ??tudiants
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
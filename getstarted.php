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
     line-height: 30px;
     outline:none;
     border:none;
     border-radius:48px;
     background-color:#26375f;
     color:white;
     text-transform: uppercase;
     font-weight:700;
     vertical-align:middle;
     margin:8px 0;
     z-index: 1;
     transition:all 0.5s;
 } 
 .btn:hover{
    background-color:#578aff;
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
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="index.php">TRAITS</a></li>
                    <li><a href="index.php">FACULTÉ</a></li>
                    <li><a href="index.php">PROGRAMMES</a></li>
                    <li><a href="index.php">CONTACT US</a></li>
                    <li><a href="#">GET STARTED</a></li>
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
                                    <a href="general_login.php" class="btn solid">
                                        LOG IN
                                    </a>
                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>UNIQUE APPROACH</h1>
                                    <a href="general_login.php" class="btn solid">
                                        LOG IN
                                    </a>
                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>ADA - Institute of Technology</h1>
                                    <a href="general_login.php" class="btn solid">
                                        LOG IN
                                    </a>
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